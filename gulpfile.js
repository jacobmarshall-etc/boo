var gulp = require('gulp');
var coffee = require('gulp-coffee');
var sass = require('gulp-sass');

gulp.task('clean', function() {
    // TODO Clean out any temporary files
});

gulp.task('scss', ['clean'], function() {
    gulp.src('./app/assets/scss/main.scss')
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(gulp.dest('./public/assets/css'));
});

gulp.task('watch', function() {
    gulp.watch('./app/assets/scss/**/*.scss', ['scss']);
});

gulp.task('default', ['scss', 'watch']);
