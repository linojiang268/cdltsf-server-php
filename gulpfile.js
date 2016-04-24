var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir.config.sourcemaps = false;  // turn off source map

elixir(function(mix) {
    // base
    mix.scripts(['index.js'], 'public/assets/scripts/index.js');
    mix.sass(['main.scss'], 'public/assets/styles/main.css');

    //about
    mix.sass(['main.scss','about/firm.scss'], 'public/assets/styles/about/firm.css');

    // home page
    mix.sass(['main.scss', 'home/index.scss'], 'public/assets/styles/home/index.css');
    mix.scripts(['index.js', 'home/index.js'], 'public/assets/scripts/home/index.js');

    // brands & products
    mix.sass(['main.scss', 'brand/index.scss'], 'public/assets/styles/brand/index.css');
    mix.scripts(['index.js', 'brand/index.js'], 'public/assets/scripts/brand/index.js');

    //product
    mix.sass(['main.scss', 'product/index.scss'], 'public/assets/styles/product/index.css');

    // join - info
    mix.sass(['main.scss', 'join/index.scss'], 'public/assets/styles/join/index.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/join/index.js');

    // join - recruit
    mix.sass(['main.scss', 'join/recruit.scss'], 'public/assets/styles/join/recruit.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/join/index.js');

    // news
    mix.sass(['main.scss', 'news/index.scss'], 'public/assets/styles/news/index.css');
    mix.scripts(['index.js', 'news/index.js'], 'public/assets/scripts/news/index.js');

    // news
    mix.sass(['main.scss', 'news/detail.scss'], 'public/assets/styles/news/detail.css');
    //mix.scripts(['detail.js'], 'public/assets/scripts/news/detail.js');

    // affiliate - claim
    mix.sass(['main.scss', 'affiliate/claim.scss'], 'public/assets/styles/affiliate/claim.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/affiliate/index.js');

    // affiliate - sales
    mix.sass(['main.scss', 'affiliate/sales.scss'], 'public/assets/styles/affiliate/sales.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/affiliate/sales.js');

    // affiliate - cooperate
    mix.sass(['main.scss', 'affiliate/cooperate.scss'], 'public/assets/styles/affiliate/cooperate.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/affiliate/cooperate.js');

    // about - firm
    //mix.sass(['main.scss', 'about/firm.scss'], 'public/assets/styles/about/firm.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/about/firm.js');

    // about - culture
    mix.sass(['main.scss', 'about/culture.scss'], 'public/assets/styles/about/culture.css');
    //mix.scripts(['index.js'], 'public/assets/scripts/about/culture.js');

    // strength - cert
    mix.sass(['main.scss', 'strength/cert.scss'], 'public/assets/styles/strength/cert.css');
    mix.scripts(['index.js', 'strength/cert.js'], 'public/assets/scripts/strength/cert.js');
});
