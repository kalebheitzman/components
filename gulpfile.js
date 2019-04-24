'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var sourcemaps = require('gulp-sourcemaps');

sass.compiler = require('node-sass');

// compile sass
gulp.task('sass', function () {
    return gulp
        .src('./ui/style.scss')
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./css'));
});

// watch sass
gulp.task('default', function() {
    gulp.watch('./ui/**/*.scss', gulp.series('sass'));
});
