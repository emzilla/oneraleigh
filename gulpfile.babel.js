// https://github.com/ahmadawais/WPGulp/tree/master/src
const gulp = require('gulp');
const babel = require('gulp-babel');
const beep = require( 'beepbeep' );
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const del = require('del');
const notify = require( 'gulp-notify' );
const postcss = require('gulp-postcss');
const livereload = require('gulp-livereload');
const plumber = require( 'gulp-plumber' );
const rename = require('gulp-rename');
const sourcemaps = require( 'gulp-sourcemaps' ); 
const uglify = require('gulp-uglify');
const util = require('gulp-util');

// PostCss Plugins
const imports = require('postcss-import');
const autoprefixer = require('autoprefixer');
const postcssApply = require('postcss-apply');
const postcssEach = require('postcss-each');
const postcssFor = require('postcss-for');
const postcssInlineSVG = require('postcss-inline-svg');
const postcssNested = require('postcss-nested');
const postcssPreEnv = require('postcss-preset-env');
const postcssUtilities = require('postcss-utilities');

const autoprefixerBrowsers = [
    'last 2 version',
    '> 1%',
    'ie >= 11',
    'last 1 Android versions',
    'last 1 ChromeAndroid versions',
    'last 2 Chrome versions',
    'last 2 Firefox versions',
    'last 2 Safari versions',
    'last 2 iOS versions',
    'last 2 Edge versions',
];

var postcssPlugins = [imports, autoprefixer({autoprefixerBrowsers}), postcssApply, postcssEach, postcssFor, postcssInlineSVG, postcssNested, postcssPreEnv({stage: 1}), postcssUtilities];

// Paths

const paths = {
    styles: {
        src: 'css/**/*.css',
        dest: 'assets/styles'
    },
    scripts: {
        src: 'js/*.js',
        dest: 'assets/scripts'
    }
};

// Error Handler

const errorHandler = r => {
    notify.onError( '\n\n❌  ===> ERROR: <%= error.message %>\n' )( r );
    beep();
}

// Browsersync

// const browsersync = done => {
//     browserSync.init({
//         proxy: config.browsersync.projectURL,
//         open: config.browsersync.browserAutoOpen,
//         injectChanges: config.browsersync.injectChanges,
//         watchEvents: ['change', 'add', 'unlink', 'addDir', 'unlinkDir']
//     });
//     done();
// }

// Helper for reloading with Gulp

// const reload = done => {
//     browserSync.reload();
//     done();
// }

// TASK: Styles

gulp.task('styles', () => {
    return gulp
        .src(paths.styles.src, {allowEmpty: true})
        .pipe(plumber(errorHandler))
        .pipe(sourcemaps.init())
        .pipe(postcss(postcssPlugins))
        .pipe(sourcemaps.write({ includeContent: false }))
		.pipe(sourcemaps.init({ loadMaps: true }))
        // .pipe(autoprefixer(config.autoprefixer.browserList))
        .pipe(gulp.dest(paths.styles.dest));
        // .pipe( notify({ message: '\n\n✅  ===> STYLES — completed!\n', onLast: true }) );
});

// TASK: Scripts

gulp.task('scripts', () => {
    return gulp
        .src(paths.scripts.src, {allowEmpty: true})
        .pipe(plumber(errorHandler))
        .pipe(babel({
            presets: [
                ['@babel/preset-env', {targets: {browsers: autoprefixerBrowsers}}]
            ]
        }))
        .pipe(concat('something.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.scripts.dest));
        // .pipe( notify({ message: '\n\n✅  ===> SCRIPTS — completed!\n', onLast: true }) );
});


// TASK: default
gulp.task(
    'default',
    gulp.parallel('styles', 'scripts', () => {
        gulp.watch(paths.styles.src, gulp.parallel( 'styles' ));
        gulp.watch(paths.scripts.src, gulp.parallel('scripts'));
    })
);