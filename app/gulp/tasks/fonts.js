/**

 */

import ttf2woff2 from 'gulp-ttf2woff2';
import fonter from 'gulp-fonter';

export const otfToTtf = () => {
  return app.gulp
    .src(`${app.path.fonts.src}/**/*.otf`, {})
    .pipe(
      app.plugins.plumber(
        app.plugins.notify.onError({
          title: 'FONTS',
          message: 'Error: <%= error.message %>',
        })
      )
    )
    .pipe(
      fonter({
        formats: ['ttf'],
      })
    )
    .pipe(app.plugins.flatten())
    .pipe(app.gulp.dest(app.path.fonts.src));
};

export const ttfToWoff = () => {
  return app.gulp
    .src(`${app.path.fonts.src}/**/*.ttf`, {})
    .pipe(
      app.plugins.plumber(
        app.plugins.notify.onError({
          title: 'FONTS',
          message: 'Error: <%= error.message %>',
        })
      )
    )
    .pipe(
      fonter({
        formats: ['woff'],
      })
    )
    .pipe(app.plugins.flatten())
    .pipe(app.gulp.dest(app.path.fonts.src))
    .pipe(app.gulp.src(`${app.path.fonts.src}/**/*.ttf`, {}))
    .pipe(ttf2woff2())
    .pipe(app.plugins.flatten())
    .pipe(app.gulp.dest(app.path.fonts.src));
};

export const fontStyle = done => {
  let arrPathFontFiles = [];
  let pluginPath = [];

  arrPathFontFiles.push(app.plugins.nodePath.parse(app.path.styles.src[0]).dir);

  pluginPath = app.path.styles.src.filter(el => {
    if (el.indexOf(`${app.path.srcPluginName}`) >= 0) {
      return el;
    }
  });
  if (pluginPath.length > 0) {
    arrPathFontFiles.push(app.plugins.nodePath.parse(pluginPath[0]).dir);
  }

  arrPathFontFiles.forEach((path, index) => {
    arrPathFontFiles[index] += '/fonts.less';
  });

  arrPathFontFiles.map((pathFontFile, index) => {
    app.plugins.fs.readdir(app.path.fonts.src[index], function (err, fontsFiles) {
      if (pathFontFile) {
        app.plugins.fs.writeFile(pathFontFile, '', cd);
        let newFileOnly;
        if (fontsFiles === undefined || fontsFiles.length === 0) {
          return;
        }
        for (var i = 0; i < fontsFiles.length; i++) {
          let fontFileName = fontsFiles[i].split('.')[0];
          if (newFileOnly !== fontFileName) {
            let fontName = fontFileName.split('-')[0]
              ? fontFileName.split('-')[0]
              : fontFileName;
            let fontWeight = fontFileName.split('-')[1]
              ? fontFileName.split('-')[1]
              : fontFileName;
            if (fontWeight.toLowerCase() === 'thin') {
              fontWeight = 100;
            } else if (fontWeight.toLowerCase() === 'extralight') {
              fontWeight = 200;
            } else if (fontWeight.toLowerCase() === 'light') {
              fontWeight = 300;
            } else if (fontWeight.toLowerCase() === 'medium') {
              fontWeight = 500;
            } else if (fontWeight.toLowerCase() === 'semibold') {
              fontWeight = 600;
            } else if (fontWeight.toLowerCase() === 'bold') {
              fontWeight = 700;
            } else if (
              fontWeight.toLowerCase() === 'extrabold' ||
              fontWeight.toLowerCase() === 'heavy'
            ) {
              fontWeight = 800;
            } else if (fontWeight.toLowerCase() === 'black') {
              fontWeight = 900;
            } else {
              fontWeight = 400;
            }
            app.plugins.fs.appendFile(
              pathFontFile,
              `@font-face {
                        font-family: "${fontName}";
                        font-display: swap;
                        src: url("../fonts/${fontFileName}.woff2") format("woff2"), url("../fonts/${fontFileName}.woff") format("woff");\n\tfont-weight: ${fontWeight};\n\tfont-style: normal;\n
                     }\r\n`,
              cd
            );
            newFileOnly = fontFileName;
          }
        }
      }
    });
  });

  return done();

  function cd() {}
};

export const copyFonts = () => {
  return app.gulp
    .src(app.path.selectSrcPath(app.path.fonts.src, '/*.{woff,woff2}'), {})
    .pipe(app.plugins.changed(file => app.path.selectDestPath(file, app.path.fonts.dest)))
    .pipe(app.gulp.dest(file => app.path.selectDestPath(file, app.path.fonts.dest)));
};
