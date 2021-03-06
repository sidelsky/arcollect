/*
 |--------------------------------------------------------------------------
 | Laravel Mix Config File
 |--------------------------------------------------------------------------
 |
 | Larvel mix is used as a build tool create all front end assets including
 | SCSS, JS, SVG Sprite and browsersync.
 |
 */

// Dependencies
const mix = require("laravel-mix");
const SvgStore = require("webpack-svgstore-plugin");

// Assets Path
const Vhost = "http://arcollect/";

const jsSrcPath = "src/Assets/js/app.js";
const scssSrcPath = "src/Assets/scss/style.scss";
const themePath = "public_html/wp-content/themes/project-theme";
const destPath = `${themePath}/assets/build`;

mix.setPublicPath("public_html");

// Styles
mix.sass(scssSrcPath, destPath).options({
  postCss: [require("lost")(), require("postcss-encode-background-svgs")()],
  processCssUrls: false,
});

// Js
mix.js(jsSrcPath, destPath);

// BrowserSync
mix.browserSync({
  watch: true,
  files: [destPath + "/**/*"],
  proxy: {
    target: Vhost,
  },
});

// SVG Sprite
mix.webpackConfig({
  plugins: [
    new SvgStore({
      svgoOptions: {
        plugins: [
          {
            removeTitle: true,
          },
        ],
      },
      prefix: "shape-",
    }),
  ],
  module: {
    rules: [
      {
        test: /\.scss/,
        loader: "import-glob-loader",
      },
      {
        test: /(\.vue|\.js)$/,
        loader: "babel-loader",
        exclude: /node_modules/,
      },
    ],
  },
});

// Versioning and Sourcemaps
if (mix.config.production) {
  // Enable cache busting in production
  mix.version();
  //mix.minify(destPath + '/app.js');
  // Code Splitting Example - More info on this in the README.md file
  // mix.extract(['vue']);
} else {
  // Enable sourcemap for development
  mix.disableNotifications();
  mix.sourceMaps();
}
