import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());

import gulp from "gulp";
import {
  deleteAsync
} from "del";
import browsersync from "browser-sync";
import notify from "gulp-notify";
import plumber from "gulp-plumber";
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const scss = gulpSass(dartSass)
import cleanCss from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import newer from "gulp-newer";
import imagemin from "gulp-imagemin";
import imageminJPG from "imagemin-jpeg-recompress";
import imageminPNG from "imagemin-pngquant";
import webp from "gulp-webp";
import zipPlugin from "gulp-zip";
import vinylFTP from "vinyl-ftp";
import util from "gulp-util";
import {
  configFTP
} from './ftp-settings.js';


// copy all
const copyApp = () => {
  return gulp.src([
      'app/css/**/*.css',
      'app/fonts/**/*',
      'app/js/**/*.js',
      'app/img/**/*.*',
      'app/video/**/*.*',
      'app/model/**/*.*',
      'app/**/*.html',
      'app/**/*.php',
      'app/.htaccess',
      'app/**/*.json',
      'app/**/*.txt'
    ], {
      base: 'app'
    })
    .pipe(gulp.dest(`build/${rootFolder}`));
}

const copyAppEn = () => {
  return gulp.src([
      'app/en/css/**/*.css',
      'app/en/documents/**/*.*',
      'app/en/fonts/**/*',
      'app/en/js/**/*.js',
      'app/en/img/**/*.*',
      'app/en/video/**/*.*',
      'app/en/model/**/*.*',
      'app/en/**/*.html',
      'app/en/**/*.php',
      'app/en/.htaccess',
      'app/en/**/*.json',
      'app/en/**/*.txt'
    ], {
      base: 'app/en'
    })
    .pipe(gulp.dest(`build/${rootFolder}`));
}

const copyAppPl = () => {
  return gulp.src([
      'app/pl/css/**/*.css',
      'app/pl/documents/**/*.*',
      'app/pl/fonts/**/*',
      'app/pl/js/**/*.js',
      'app/pl/img/**/*.*',
      'app/pl/video/**/*.*',
      'app/pl/model/**/*.*',
      'app/pl/**/*.html',
      'app/pl/**/*.php',
      'app/pl/.htaccess',
      'app/pl/**/*.json',
      'app/pl/**/*.txt'
    ], {
      base: 'app/pl'
    })
    .pipe(gulp.dest(`build/${rootFolder}`));
}

const copyAppNd = () => {
  return gulp.src([
      'app/nd/css/**/*.css',
      'app/nd/documents/**/*.*',
      'app/nd/fonts/**/*',
      'app/nd/js/**/*.js',
      'app/nd/img/**/*.*',
      'app/nd/video/**/*.*',
      'app/nd/model/**/*.*',
      'app/nd/**/*.html',
      'app/nd/**/*.php',
      'app/nd/.htaccess',
      'app/nd/**/*.json',
      'app/nd/**/*.txt'
    ], {
      base: 'app/nd'
    })
    .pipe(gulp.dest(`build/${rootFolder}`));
}

function startWatch() {
  gulp.watch('app/scss/**/*.scss', styles)
  gulp.watch(['app/js/**/*.js', '!app/js/**/*.min.js']).on('change', refresh)
  gulp.watch('app/**/*.html').on('change', refresh)
  gulp.watch('app/**/*.php').on('change', refresh)
  gulp.watch('images/**/*', img)
  gulp.watch('images-en/**/*', imgEn)
  gulp.watch('images-pl/**/*', imgPl)
  gulp.watch('images-nd/**/*', imgNd)
}

export const cleanImg = () => {
  return deleteAsync('{images/**/*,images-en/**/*,images-pl/**/*,images-nd/**/*}', {
    force: true
  })
}

export const cleanBuild = () => {
  return deleteAsync([
    'build/**/*',
    'build/.htaccess'
  ], {
    force: true
  })
}

export const server = () => {
  // for PHP files
  browsersync.init({
    ui: false,
    notify: false,
    /* folder in open-server (website) */
    proxy: `http://${rootFolder}/app/links.php`,
    /* name folder */
    host: `${rootFolder}`,
    /* command for working */
    open: 'external'
  })
}

export const refresh = (done) => {
  browsersync.reload();
  // done();
};

export const styles = () => {
  return gulp.src([
      'app/scss/**/*.scss',
      'app/scss/**/*.sass'
    ], {
      sourcemaps: true
    })
    .pipe(plumber(
      notify.onError({
        title: "SCSS",
        message: "Error: <%= error.message %>"
      })
    ))
    .pipe(scss({
      outputStyle: "compressed"
      //outputStyle: "expanded"
    }))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: true,
      grid: true
    }))
    // .pipe(cleanCss({
    //   format: {
    //     breaks: {
    //       afterAtRule: 0,
    //       afterBlockBegins: 1, // 1 is synonymous with `true`
    //       afterBlockEnds: 2,
    //       afterComment: 1,
    //       afterProperty: 0,
    //       afterRuleBegins: 0,
    //       afterRuleEnds: 1,
    //       beforeBlockEnds: 1,
    //       betweenSelectors: 1 // 0 is synonymous with `false`
    //     },
    //     spaces: { // controls where to insert spaces
    //       aroundSelectorRelation: false, // controls if spaces come around selector relations; e.g. `div > a`; defaults to `false`
    //       beforeBlockBegins: true, // controls if a space comes before a block begins; e.g. `.block {`; defaults to `false`
    //       beforeValue: true // controls if a space comes before a value; e.g. `width: 1rem`; defaults to `false`
    //     },
    //     semicolonAfterLastProperty: true
    //   },
    //   level: 0
    // }))
    .pipe(gulp.dest('app/css/'))
    .pipe(gulp.dest('app/en/css/'))
    .pipe(gulp.dest('app/pl/css/'))
    .pipe(gulp.dest('app/nd/css/'))
    .pipe(browsersync.stream())
}

// not active 
export const scripts = () => {
  return gulp.src([
      'node_modules/jquery/dist/jquery.min.js'
      // 'node_modules/swiper/swiper-bundle.min.js',
      // 'node_modules/moment/min/moment.min.js',
      // 'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
      // 'node_modules/inputmask/dist/jquery.inputmask.min.js'
    ])
    .pipe(gulp.dest('app/js/vendors/'))
    .pipe(browsersync.stream())
}

export const img = () => {
  return gulp.src('images/**/*.{png,jpg,svg}')
    .pipe(newer('app/img/'))
    .pipe(webp({
      quality: 100
    }))
    .pipe(gulp.dest('app/img/'))
    .pipe(gulp.src('images/**/*.{png,jpg,svg}'))
    .pipe(newer('app/img/'))
    .pipe(
      imagemin({
          progressive: true,
          svgoPlugins: [{
            removeViewBox: false
          }]
        },
        [
          imageminJPG({
            loops: 2,
            min: 90,
            max: 100,
            quality: "high",
          }),
          imageminPNG({
            speed: 1,
            floyd: 1,
          }),
        ])
    )
    .pipe(gulp.dest('app/img/'))
}

export const imgEn = () => {
  return gulp.src('images-en/**/*.{png,jpg,svg}')
    .pipe(newer('app/en/img/'))
    .pipe(webp({
      quality: 100
    }))
    .pipe(gulp.dest('app/en/img/'))
    .pipe(gulp.src('images-en/**/*.{png,jpg,svg}'))
    .pipe(newer('app/en/img/'))
    .pipe(
      imagemin({
          progressive: true,
          svgoPlugins: [{
            removeViewBox: false
          }]
        },
        [
          imageminJPG({
            loops: 2,
            min: 90,
            max: 100,
            quality: "high",
          }),
          imageminPNG({
            speed: 1,
            floyd: 1,
          }),
        ])
    )
    .pipe(gulp.dest('app/en/img/'))
}

export const imgPl = () => {
  return gulp.src('images-pl/**/*.{png,jpg,svg}')
    .pipe(newer('app/pl/img/'))
    .pipe(webp({
      quality: 100
    }))
    .pipe(gulp.dest('app/pl/img/'))
    .pipe(gulp.src('images-pl/**/*.{png,jpg,svg}'))
    .pipe(newer('app/pl/img/'))
    .pipe(
      imagemin({
          progressive: true,
          svgoPlugins: [{
            removeViewBox: false
          }]
        },
        [
          imageminJPG({
            loops: 2,
            min: 90,
            max: 100,
            quality: "high",
          }),
          imageminPNG({
            speed: 1,
            floyd: 1,
          }),
        ])
    )
    .pipe(gulp.dest('app/pl/img/'))
}

export const imgNd = () => {
  return gulp.src('images/**/*.{png,jpg,svg}')
    .pipe(newer('app/img/'))
    .pipe(webp({
      quality: 100
    }))
    .pipe(gulp.dest('app/img/'))
    .pipe(gulp.src('images/**/*.{png,jpg,svg}'))
    .pipe(newer('app/img/'))
    .pipe(
      imagemin({
          progressive: true,
          svgoPlugins: [{
            removeViewBox: false
          }]
        },
        [
          imageminJPG({
            loops: 2,
            min: 90,
            max: 100,
            quality: "high",
          }),
          imageminPNG({
            speed: 1,
            floyd: 1,
          }),
        ])
    )
    .pipe(gulp.dest('app/img/'))
}

export const zip = () => {
  // deleteAsync(`build/${rootFolder}/${rootFolder}.zip`);
  return gulp.src('build/**/*.*', {
      dot: true
    })
    .pipe(plumber(
      notify.onError({
        title: "ZIP",
        message: "Error: <%= error.message %>"
      })))
    .pipe(zipPlugin(`${rootFolder}.zip`))
    .pipe(gulp.dest(`build/${rootFolder}/`))
}

export const ftp = () => {
  configFTP.log = util.log;
  const ftpConnect = vinylFTP.create(configFTP);

  return gulp.src('build/**/*.*', {
      dot: true
    })
    .pipe(plumber(
      notify.onError({
        title: "FTP",
        message: "Error: <%= error.message %>"
      })))
    .pipe(ftpConnect.dest(`./`))
}


// gulp.task('build', gulp.series(cleanBuild, styles, scripts, img, copyApp, zip));
// gulp.task('default', gulp.parallel(styles, scripts, img, server, startWatch));


gulp.task('build-nd', gulp.series(cleanBuild, styles, imgNd, copyAppNd));
gulp.task('build-pl', gulp.series(cleanBuild, styles, imgPl, copyAppPl));
gulp.task('build-en', gulp.series(cleanBuild, styles, imgEn, copyAppEn));


gulp.task('build', gulp.series(cleanBuild, styles, img, imgEn, copyApp));
gulp.task('default', gulp.parallel(styles, img, imgEn, server, startWatch));