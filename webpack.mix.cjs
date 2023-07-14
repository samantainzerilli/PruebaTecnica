
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .vue()
   .babelConfig({
      presets: [
         ['@babel/preset-env', { modules: false }]
      ]
   })
   .version();
