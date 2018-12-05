const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const autoprefixer = require('autoprefixer');

module.exports = (env, options) => {
  const isDevMode = options.mode === 'development';

  return {
    entry: {
      app: ['@babel/polyfill', './src/index.js'],
    },
    output: {
      path: path.join(__dirname, '/dist'),
      filename: 'app.js',
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
          },
        },
        {
          test: /\.scss$/,
          use: [
            // devMode ? 'style-loader' : MiniCssExtractPlugin.loader,
            MiniCssExtractPlugin.loader,
            {
              loader: 'css-loader',
              options: {
                sourceMap: isDevMode,
              },
            },
            {
              loader: 'postcss-loader',
              options: {
                plugins: () => [autoprefixer],
              },
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: isDevMode,
              },
            },
          ],
        },
        {
          test: /\.(jpe?g|png|gif|svg)$/i,
          use: [
            'file-loader?name=[name].[ext]&outputPath=images/&publicPath=http://localhost/santopixel/wp-react/wordpress/wp-content/themes/poleangos-wp-theme/dist/images',
            'image-webpack-loader'
          ]
        },
      ],
    },
    resolve: {
      extensions: ['.js']
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "style.css",
        allChunks: true,
        // chunkFilename: "[id].css"
      })
    ],
  };
};
