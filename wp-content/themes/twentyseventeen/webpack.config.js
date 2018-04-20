var webpack = require('webpack');
var ManifestPlugin = require('webpack-manifest-plugin');
var path = require('path');
const publicPath = '/wp-content/themes/twentyseventeen/';
const pathToTheme = path.resolve(__dirname, publicPath);

const ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = function(env) {
    return {
        entry: './assets/js/index.js',
        output: {
            path: __dirname + "/",
            filename: "bundle.js"
        },
        module: {
            loaders: [
                {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
                {test: /\.css$/, loader: "style-loader!css-loader", exclude: /node_modules/},
                {test: /\.scss$/, loader: "style-loader!css-loader!sass-loader", exclude: /node_modules/},
                {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader'}
            ],
        },
        plugins: [
            new webpack.ProvidePlugin({
              // the following will include default version instead of slim and umd
              // '$': 'jquery',
              // 'jQuery': 'jquery',
              // 'Popper': 'popper.js'
              '$': 'jquery/dist/jquery.slim.js',
              'jQuery': 'jquery/dist/jquery.slim.js',
              'Popper': 'popper.js/dist/umd/popper'
            }),
          ],
    }
}