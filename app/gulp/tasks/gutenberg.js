


export const gutenberg = (done) => {

    let srcPath;

    if (!app.path.gutenberg || app.path.gutenberg.src.length == 0) {
        return done();
    } else if (Array.isArray(app.path.gutenberg.src)) {
        srcPath = app.path.gutenberg.src.filter(el => !el.includes(app.path.srcPluginName));
    } else if (typeof app.path.gutenberg.src === 'string') {
        srcPath = !app.path.gutenberg.src.includes(app.path.srcPluginName) ? app.path.gutenberg.src : '';
    }


    if (srcPath.length == 0) {
        return done();
    }



    return app.gulp.src(srcPath, {
            allowEmpty: true,
            base: app.path.src.php,
        })
        .pipe(app.plugins.changed((file) => app.path.selectDestPath(file, app.path.gutenberg.dest)))
        .pipe(app.gulp.dest((file) => app.path.selectDestPath(file, app.path.gutenberg.dest)))
}