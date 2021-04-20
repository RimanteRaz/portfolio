const gulp = require("gulp");
const sass = require("gulp-sass");
const browserSync = require("browser-sync").create();
const autoprefixer = require("autoprefixer");
const postcss = require("gulp-postcss");

function style() {
  return gulp
    .src("./scss/style.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: "localhost/rimanteraz",
  });
  gulp.watch("./scss/**/*.scss", style);
  // gulp.watch("./scss/**/*.scss").on("change", browserSync.reload);
  // gulp.watch("./style.css").on("change", browserSync.reload);
  gulp.watch("./**/*.html").on("change", browserSync.reload);
  gulp.watch("./js/**/*.js").on("change", browserSync.reload);
}

exports.watch = watch;

// const autoprefixer = require("autoprefixer");
// const sourcemaps = require("gulp-sourcemaps");
// const postcss = require("gulp-postcss");

// // compile scss into css
// function style() {
//   return gulp
//     .src("./assets/scss/main.scss")
//     .pipe(sass().on("error", sass.logError))
//     .pipe(sourcemaps.init())
//     .pipe(postcss([autoprefixer()]))
//     .pipe(sourcemaps.write("."))
//     .pipe(rename("style.css"))
//     .pipe(gulp.dest("./"))
//     .pipe(browserSync.stream());
// }

// function watch() {
//   browserSync.init({
//     proxy: "localhost/ugdymoinovacijos",
//   });
//   gulp.watch("./assets/scss/**/*.scss", style);
//   gulp.watch("./**/*.php").on("change", browserSync.reload);
//   gulp.watch("./assets/js/**/*.js").on("change", browserSync.reload);
// }

// exports.style = style;
// exports.watch = watch;
