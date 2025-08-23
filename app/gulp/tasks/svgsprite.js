/**
 * 
 * Creates SVG sprite 
 *  Source and destination is app.path.src.svg  
 *  move svg files in task 'image'
 * 
 * php функция для формирования тегов svg и use 
 *  кеширование <svg><use href="/assets/sprite.svg?v=2#icon-new"></use></svg>
 *  принимает 
 *      id иконки
 *      какой спрайт подключать 
 *          умолчанию false -- монохромный
 *          true - цветной 
 * разделить спрайты для цветных и монохромных иконок
 * 
 * 
 */


import svgSprite from "gulp-svg-sprite";


const config = {
    mode: {
      symbol: {
        sprite: '../sprite.svg', // имя итогового файла спрайта
        example:  {
            dest: '../sprite-preview/sprite.html' // путь и имя HTML-файла примера относительно output
          }
      },
    },
    shape: {
      transform: [
        {
          svgo: {
            plugins: [
              {
                name: 'removeAttrs',
                params: { attrs: [ 'fill', 'stroke', 'style'] }, // удалим ненужные стили
              },
              {
                name: 'removeDimensions', // удалим width/height из <svg>
              },
              {
                name: 'removeTitle', // уберем <title>
              },
            ],
          },
        },
        ],
        dimensions: {        
            maxWidth: 24,      // все иконки будут масштабированы по ширине
            maxHeight: 24      // и по высоте
          },
  
      id: {
        generator: function (name) {
          return app.plugins.nodePath.parse(name).name;
        },
      },
      svg: {
        xmlDeclaration: false, // убираем <?xml ...>
        doctypeDeclaration: false, // убираем <!DOCTYPE ...>
      },
    },
};
  
const configColor = {
    mode: {
      symbol: {
        sprite: '../sprite_color.svg', // имя итогового файла спрайта
        example:  {
            dest: '../sprite-color-preview/sprite.html' // путь и имя HTML-файла примера относительно output
          }
      },
    },
    shape: {
      transform: [
        {
          svgo: {
            plugins: [
              {
                name: 'removeAttrs',
                params: { attrs: ['style'] }, // удалим ненужные стили
              },
              {
                name: 'removeDimensions', // удалим width/height из <svg>
              },
              {
                name: 'removeTitle', // уберем <title>
              },
            ],
          },
        },
        ],
        dimensions: {        
            maxWidth: 24,      // все иконки будут масштабированы по ширине
            maxHeight: 24      // и по высоте
          },
  
      id: {
        generator: function (name) {
          return app.plugins.nodePath.parse(name).name;
        },
      },
      svg: {
        xmlDeclaration: false, // убираем <?xml ...>
        doctypeDeclaration: false, // убираем <!DOCTYPE ...>
      },
    },
  };



export const createSvgSprite = (done) => {
    const srcSvg = app.path.svg.src.filter(path => !path.includes('color'));
    return app.gulp.src(srcSvg, { "allowEmpty": true })
        .pipe(app.plugins.plumber(app.plugins.notify.onError({ title: "SVG", message: "Error: <%= error.message %>" })))
        .pipe(svgSprite(config))
        .pipe(app.gulp.dest(app.path.svg.dest))
}

export const createSvgSpriteColor = (done) => {
    const srcSvgColor = app.path.svg.src.filter(path => path.includes('color'));
    return app.gulp.src(srcSvgColor, { "allowEmpty": true })
        .pipe(app.plugins.plumber(app.plugins.notify.onError({ title: "SVG", message: "Error: <%= error.message %>" })))
        .pipe(svgSprite(configColor))
        .pipe(app.gulp.dest(app.path.svg.dest))
}
