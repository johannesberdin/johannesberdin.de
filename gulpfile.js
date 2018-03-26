var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
  var env = argv.e || argv.env || 'local';
  var port = argv.p || argv.port || 3000;

  mix.sass('main.scss')
    .webpack('main.js')
    .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
    .copy('node_modules/font-awesome/fonts', 'source/fonts')
    .browserSync({
      port: port,
      server: {
        baseDir: 'build_' + env
      },
      proxy: null,
      files: ['build_' + env + '/**/*']
    });
});
