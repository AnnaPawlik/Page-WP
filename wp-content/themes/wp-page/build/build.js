const gulp = require('gulp')
const message = require('./lib/message')

const browsersync = require('browser-sync').create()
const reload = browsersync.reload

if (!process.env.NODE_ENV) {
  throw new Error('Please setup environment variable [NODE_ENV] before building.')
}


gulp.task('html:clean', require('./tasks/html/clean'))
gulp.task('html:build', require('./tasks/html/build'))

gulp.task('font:clean', require('./tasks/font/clean'))
gulp.task('font:build', require('./tasks/font/build'))

gulp.task('sass:clean', require('./tasks/sass/clean'))
gulp.task('sass:lint', require('./tasks/sass/lint'))
gulp.task('sass:fix', require('./tasks/sass/fix'))
gulp.task('sass:build', require('./tasks/sass/build'))

gulp.task('image:clean', require('./tasks/image/clean'))
gulp.task('image:build', require('./tasks/image/build'))

gulp.task('svg:build', require('./tasks/svg/build'))

gulp.task('javascript:clean', require('./tasks/javascript/clean'))
gulp.task('javascript:lint', require('./tasks/javascript/lint'))
gulp.task('javascript:fix', require('./tasks/javascript/fix'))
gulp.task('javascript:build', ['javascript:clean'], require('./tasks/javascript/build'))

gulp.task('html', ['html:clean', 'html:build'])
gulp.task('font', ['font:clean', 'font:build'])
gulp.task('image', ['image:clean', 'image:build'])
gulp.task('svg', ['svg:build'])
gulp.task('sass', ['sass:clean', 'sass:lint', 'sass:build'])
gulp.task('javascript', ['javascript:clean', 'javascript:lint', 'javascript:build'])

gulp.task('sync', () => {
  browsersync.init({
    open: false,
    server: { baseDir: '../public' }
  })
})

gulp.task('watch', ['sync'], () => {
  gulp.watch('resources/assets/sass/**/*.scss', { cwd: '../' }, ['sass', reload])
    .on('error', message.error('WATCH: Sass'))

  gulp.watch('resources/assets/js/**/*.js', { cwd: '../' }, ['javascript', reload])
    .on('error', message.error('WATCH: Javascript'))

  gulp.watch('resources/assets/fonts/**/*.{eot,woff,woff2,ttf,svg}', { cwd: '../' }, ['font', reload])
    .on('error', message.error('WATCH: Fonts'))

  gulp.watch('resources/assets/images/**/*.{jpg,jpeg,png,gif,svg}', { cwd: '../' }, ['image', reload])
    .on('error', message.error('WATCH: Images'))

  gulp.watch('src/svg/**/*.svg', { cwd: '../' }, ['svg', reload])
    .on('error', message.error('WATCH: SVG'))

  gulp.watch(['src/**/*.html', 'resources/json/**/*.json'], { cwd: '../' }, ['html', reload])
    .on('error', message.error('WATCH: Views'))
})

gulp.task('default', ['sass', 'javascript', 'font', 'image', 'svg', 'html'])
