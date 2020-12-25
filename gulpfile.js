const gulp = require('gulp'),
  concat = require('gulp-concat'),
  autoprefixer = require('gulp-autoprefixer'),
  uglify = require('gulp-uglify'),
  del = require('del'),
  browserSync = require('browser-sync').create(),
  plumber = require('gulp-plumber'),
  image = require('gulp-image'),
  smushit = require('gulp-smushit'),
  htmlmin = require('gulp-html-minifier'),
  sass = require('gulp-sass'),
  rename = require('gulp-rename'),
  babel = require('gulp-babel'),
  rigger = require('gulp-rigger'),
  changed = require('gulp-changed'),
  path = require('path');

sass.compiler = require('node-sass');

const paths = {
  dist: './build',
  // dist: 'C:\\openserver\\domains\\chemical-partners',
};

gulp.task('html', function() {
  return gulp.src(['./app/**/*.{html,php}', '!./app/templates/**/*.html' ])
    .pipe(rigger())
    // .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest(`${paths.dist}`))
    .pipe(browserSync.stream());
});

gulp.task('sass', async function() {
  return gulp.src('./app/sass/**/*.sass')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 4 versions'],
      cascade: false,
    }))
    .pipe(rename({ basename: 'main.min' }))
    .pipe(gulp.dest(`${paths.dist}/css`))
    .pipe(browserSync.stream());
});

gulp.task('scripts', async function() {
  return gulp.src([
      './app/js/libs/jquery-3.4.1.min.js',
      './app/js/libs/jquery.fancybox.min.js',
      './app/js/libs/lazysizes.min.js',
      './app/js/libs/slick.min.js',
      './app/js/libs/jquery.maskedinput.min.js',
      './app/js/main.js',
    ])
    .pipe(plumber())
    .pipe(concat('main.min.js'))
    .pipe(babel({ presets: ['@babel/env'] }))
    .pipe(uglify({ toplevel: true }))
    .pipe(gulp.dest(`${paths.dist}/js`))
    .pipe(browserSync.stream());
});

// gulp.task('php', async function() {
//   return gulp.src('./app/php/**/*.php')
//     .pipe(plumber())
//     .pipe(gulp.dest(`${paths.dist}/php`))
//     .pipe(browserSync.stream());
// });

gulp.task('fonts', async function() {
  return gulp.src('./app/fonts/**/*')
    .pipe(plumber())
    .pipe(gulp.dest(`${paths.dist}/fonts`))
    .pipe(browserSync.stream());
});

gulp.task('images', function() {
  return gulp.src('./app/img/**/*.{png,svg,gif}')
    .pipe(plumber())
    .pipe(changed(`${paths.dist}/img`))
    .pipe(image())
    .pipe(gulp.dest(`${paths.dist}/img`))
    .pipe(browserSync.stream());
});

gulp.task('image-jpg', function() {
  return gulp.src('./app/img/**/*.jpg')
    .pipe(plumber())
    .pipe(changed(`${paths.dist}/img`))
    .pipe(smushit())
    .pipe(gulp.dest(`${paths.dist}/img`))
    .pipe(browserSync.stream());
});

gulp.task('watch', async function() {

  browserSync.init({
    server: {
      baseDir: `${paths.dist}`,
    },
    ui: {
      port: 8080
    },
  });

  gulp.watch('./app/**/*.{html,php}', gulp.series('html'));
  gulp.watch('./app/sass/**/*.{sass,scss,css}', gulp.series('sass'));
  gulp.watch('./app/js/**/*.js', gulp.series('scripts'));
  // gulp.watch('./app/php/**/*.php', gulp.series('php'));
  gulp.watch('./app/fonts/**/*.{eot,svg,ttf,woff,woff2}', gulp.series('fonts'));
  gulp.watch('./app/img/**/*.{png,svg,gif}', gulp.series('images'));
  gulp.watch('./app/img/**/*.jpg', gulp.series('image-jpg'));

  gulp.watch('./app/img/**/*.{jpg,png,svg,gif}').on('unlink', file => {

    const filePathFromSrc = path.relative(path.resolve('app'), file),
      destFilePath = path.resolve('build', filePathFromSrc);

    del.sync(destFilePath);

  });

});

const parallelTasks = ['html', 'sass', 'scripts', 'fonts', 'images', 'image-jpg'];

gulp.task('default', gulp.series(gulp.parallel(...parallelTasks), 'watch'));

gulp.task('del', () => {
  return del([`${paths.dist}`]);
});

gulp.task('del-img', () => {
  return del([`${paths.dist}/img/*`]);
});

gulp.task('del-fonts', () => {
  return del([`${paths.dist}/fonts/*`]);
});