/**
 *
 *  при необходимости использовать конкатенацию для файлов стилей плагина
 *  нужно делать отдельную задачу под плагин т.к. app.plugins.concat определяет базовую директорию по первому прошедшему через него файлу потока
 *
 *
 */

import dartSasss from 'sass';
import gulpSasss from 'gulp-sass';
import less from 'gulp-less';
import cleanCss from 'gulp-clean-css';
import webpCss from 'gulp-webpcss'; // в зависимости от браузера(!) в файл стилей картинки либо в фотмате webp либо обычные требует дополнительного js кода
import autoprefixer from 'gulp-autoprefixer';
import groupCssMediaQueries from 'gulp-group-css-media-queries';
const sass = gulpSasss(dartSasss);

var condition = function (file) {
  return !file.path.includes(app.path.srcPluginName);
};

export const styles = () => {
  return app.gulp
    .src(app.path.styles.src, { sourcemaps: app.isDev, allowEmpty: true })
    .pipe(
      app.plugins.plumber(
        app.plugins.notify.onError({
          title: 'Styles',
          message: 'Error: <%= error.message %>',
        })
      )
    )
    .pipe(app.plugins.if(condition, app.plugins.concat('main-style.less')))
    .pipe(
      app.plugins.if(
        app.isSASS,
        sass({ outputStyle: 'expanded' }),
        less({
          paths: [
            `${app.path.src.php}/assets/styles`,
            `${app.path.src.plug}/assets/styles`,
          ],
        })
      )
    )
    .pipe(app.plugins.if(app.isProd, groupCssMediaQueries()))
    .pipe(
      app.plugins.if(
        app.isProd,
        webpCss({
          webpClass: '.webp',
          nowebpClass: '.no-webp',
        })
      )
    )
    .pipe(
      app.plugins.if(
        app.isProd,
        autoprefixer({
          grid: true,
          overrideBrowsersList: ['last 3 versions'],
          cascad: true,
        })
      )
    )
    .pipe(app.plugins.if(app.isProd, cleanCss()))
    .pipe(app.plugins.rename({ extname: '.min.css' }))
    .pipe(app.gulp.dest(file => app.path.selectDestPath(file, app.path.styles.dest)))
    .pipe(app.plugins.browsersync.stream());
};
