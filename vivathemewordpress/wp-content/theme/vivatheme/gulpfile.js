var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

gulp.task('sass', function(done) {
    gulp.src("sass/**/*.scss") // путь к sass файлам
        .pipe(sass())
        .pipe(gulp.dest('.')) //папка для выгрузки css файлов
        .pipe(browserSync.stream());

    done();
});

gulp.task('serve', function(done) {

   browserSync.init({
        proxy: 'http://192.168.31.234:3000/wordpress/',
        host:'localhost',
        open:'external',
    });

    gulp.watch("sass/**/*.scss", gulp.series('sass'));
    gulp.watch("*.php").on('change', () => {
      browserSync.reload();
      done();
    });
  

    done();
});

gulp.task('default', gulp.series('sass', 'serve'));
