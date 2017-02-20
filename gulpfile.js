/**
 * Created by mahmutakyol on 20.02.2017.
 */
var gulp = require('gulp'),
    cleanCSS = require('gulp-clean-css'),
    watch = require('gulp-watch'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

gulp.task('scripts',function(){
    gulp.src('src/contents/script/*.js')
        .pipe(uglify())
        .pipe(concat('scripts.min.js'))
        .pipe(gulp.dest('dist/js'))
});

gulp.task('css',function(){
    gulp.src('src/contents/css/*.css')
        .pipe(cleanCSS({keepBreaks : true}))
        .pipe(concat('main.min.css'))
        .pipe(gulp.dest('dist/css'))
});

gulp.task('watch',function(){
    gulp.watch('src/contents/script/*.js',['scripts']);
    gulp.watch('src/contents/css/*.css',['css']);
});

gulp.task('default', ['css', 'scripts', 'watch']);
