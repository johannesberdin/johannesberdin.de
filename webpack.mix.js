const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source');

mix.js('source/_assets/js/main.js', 'js').vue()
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .copy('node_modules/font-awesome/fonts', 'source/fonts')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .sourceMaps()
    .version();