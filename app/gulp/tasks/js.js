import webpackStream from 'webpack-stream';

export const js = () => {
  const arrPathFilesJS = getJsEntries(app.path.js.src);
  const arrPathPlugin = arrPathFilesJS.filter(path =>
    path.includes(app.path.srcPluginName)
  );

  return app.gulp
    .src(arrPathFilesJS, { sourcemaps: app.isDev, allowEmpty: true })
    .pipe(
      app.plugins.plumber(
        app.plugins.notify.onError({
          title: 'JS',
          message: 'Error: <%= error.message %>',
        })
      )
    )
    .pipe(
      webpackStream({
        mode: app.isProd ? 'production' : 'development',
        entry: {
          app: arrPathFilesJS, // Входная точка для фронта
          ...(app.forPlugin && app.isWP ? { admin: arrPathPlugin } : {}), // Входная точка для админ панели
        },
        output: {
          filename: '[name].main.min.js',
        },
      })
    )
    .pipe(
      app.plugins.if(
        app.isWP && '**/app.main.min.js',
        app.gulp.dest(
          Array.isArray(app.path.js.dest) ? app.path.js.dest[0] : app.path.js.dest
        )
      )
    )
    .pipe(
      app.plugins.if(
        app.forPlugin && '**/admin.main.min.js',
        app.gulp.dest(app.path.js.dest[1])
      )
    )
    .pipe(app.plugins.if(!app.isWP, app.gulp.dest(app.path.js.dest)))
    .pipe(app.plugins.browsersync.stream());

  function getJsEntries(paths) {
    const jsFiles = [];

    const findJsFiles = path => {
      const stat = app.plugins.fs.statSync(path);

      if (stat.isDirectory()) {
        const files = app.plugins.fs.readdirSync(path);
        files.forEach(file => findJsFiles(app.plugins.nodePath.join(path, file))); // Рекурсивный поиск файлов
      } else if (stat.isFile() && app.plugins.nodePath.extname(path) === '.js') {
        jsFiles.push(path); // Добавляем файл, если он JS
      }
    };

    paths.forEach(findJsFiles);
    return jsFiles;
  }
};
