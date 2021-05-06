import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpIf from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import uglify from 'gulp-uglify';
import named from 'vinyl-named';
import browserSync from 'browser-sync';

const server = browserSync.create();
const PRODUCTION = yargs.argv.prod;

sass.compiler = require('node-sass');

export default PRODUCTION;

const paths = {
	styles: {
		src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
		dest: 'dist/assets/css'
	},
	images: {
		src: 'src/assets/images/**/*.{jpg,jpeg,png,svg,gif}',
		dest: 'dist/assets/images'
	},
	other: {
		src: ['src/assets/**/*', '!src/assets/{images,js,scss}', '!src/assets/{images,js,scss}/**/*'],
		dest: 'dist/assets'
	},
	scripts: {
		src: ['src/assets/js/bundle.js', 'src/assets/js/admin.js', 'src/assets/js/customize-preview.js'],
		dest: 'dist/assets/js'
	}
}

export const serve = (done) => {
	server.init({
		proxy: 'http://dedicated-solution.local'
	});
	done();
}
export const reload = (done) => {
	server.reload();
	done();
}

export const styles = () => {
	return gulp.src(paths.styles.src)
		.pipe(gulpIf(!PRODUCTION, sourcemaps.init()))
		.pipe(sass().on('error', sass.logError))
		.pipe(gulpIf(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
		.pipe(gulpIf(!PRODUCTION, sourcemaps.write()))
		.pipe(gulp.dest(paths.styles.dest));
}

export const images = () => {
	return gulp.src(paths.images.src)
		.pipe(gulpIf(PRODUCTION, imagemin()))
		.pipe(gulp.dest(paths.images.dest))
}

export const watch = () => {
	gulp.watch('src/assets/scss/**/*.scss', gulp.series(styles, reload));
	gulp.watch('src/assets/js/**/*.js', gulp.series(scripts, reload));
	gulp.watch('**/*.php', reload);
	gulp.watch(paths.images.src, gulp.series(images, reload));
	gulp.watch(paths.other.src, gulp.series(copy, reload));
};

export const copy = () => {
	return gulp.src(paths.other.src)
		.pipe(gulp.dest(paths.other.dest))
}

export const scripts = () => {
	return gulp.src(paths.scripts.src)
		.pipe(named())
		.pipe(webpack({
			module: {
				rules: [
					{
						test: /\.js$/,
						use: {
							loader: 'babel-loader',
							options: {
								presets: ['@babel/preset-env']
							}
						}
					}
				]
			},
			output: {
				filename: '[name].js'
			},
			externals: {
				jquery: 'jQuery'
			},
			devtool: !PRODUCTION ? 'inline-source-map' : false,
			mode: PRODUCTION ? 'production' : 'development'
		}))
		.pipe(gulpIf(PRODUCTION, uglify()))
		.pipe(gulp.dest(paths.scripts.dest))
}

export const clean = () => del(['dist']);

export const dev = gulp.series(clean, gulp.parallel(styles, scripts, images, copy), serve, watch);
export const build = gulp.series(clean, gulp.parallel(styles, scripts, images, copy));