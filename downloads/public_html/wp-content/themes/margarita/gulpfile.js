var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
 
// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './style.css',
    './*.php'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "dev.paganini",
    notify: false
    });
});
gulp.watch("./**/*.php").on("change", browserSync.reload); 
gulp.watch("./**/**/*.php").on("change", browserSync.reload); 

 
// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src('assets/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css'))
        .pipe(reload({stream:true}));
});
 
// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("assets/sass/**/*.scss", ['sass']);
});