/**
 * Sample gulp file borrowed from
 * https://travismaynard.com/writing/getting-started-with-gulp
 */

// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var clean = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('scss/*/*.scss')
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(gulp.dest('build/css'))
        .pipe(rename('main.min.css'))
        .pipe(clean())
        .pipe(gulp.dest('build/css'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('build/js'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('build/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('js/*/*.js', ['scripts']);
    gulp.watch('scss/*/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'watch']);