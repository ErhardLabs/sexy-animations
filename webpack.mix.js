let mix = require('laravel-mix');

/*
 * Sets the development path to assets. By default, this is the `/resources`
 * folder in the theme.
 */
const devPath  = 'assets';

mix.setPublicPath( 'dist' );

/*
 * Copy node modules we want in our project
 *
 * @link https://laravel.com/docs/5.6/mix#copying-files-and-directories
 */

mix.copy('node_modules/animate.css/animate.min.css', 'dist/styles/animate.min.css');
mix.copy('node_modules/waypoints/lib/jquery.waypoints.min.js', 'dist/js/jquery.waypoints.min.js');


/*
 * Builds sources maps for assets.
 *
 * @link https://laravel.com/docs/5.6/mix#css-source-maps
 */
mix.sourceMaps();


/*
 * Versioning and cache busting. Append a unique hash for production assets. If
 * you only want versioned assets in production, do a conditional check for
 * `mix.inProduction()`.
 *
 * @link https://laravel.com/docs/5.6/mix#versioning-and-cache-busting
 */
mix.version();


/*
 * Compile JavaScript.
 *
 * @link https://laravel.com/docs/5.6/mix#working-with-scripts
 */

mix.js(`${devPath}/js/app.js`, 'js');