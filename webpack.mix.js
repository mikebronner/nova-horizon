let mix = require('laravel-mix')

mix.setPublicPath('dist')
    .js('resources/js/tool.js', 'js')
    .css('resources/css/tool.css', 'css')
    .vue({ version: 3 })
