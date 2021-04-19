const path = require("path");
var webpack = require("webpack");
var BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = {
  entry: path.resolve(__dirname, "src/app.js"),
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "[name].bundle.js",
  },
  //https://medium.com/hackernoon/the-100-correct-way-to-split-your-chunks-with-webpack-f8a9df5b7758
  optimization: {
    runtimeChunk: "single",
    splitChunks: {
      chunks: "all",
      maxInitialRequests: Infinity,
      minSize: 0,
      cacheGroups: {
        vendor: {
          test: /[\\/]node_modules[\\/]/,
          name(module) {
            // get the name. E.g. node_modules/packageName/not/this/part.js
            // or node_modules/packageName
            const packageName = module.context.match(
              /[\\/]node_modules[\\/](.*?)([\\/]|$)/
            )[1];

            // npm package names are URL-safe, but some servers don't like @ symbols
            return `npm.${packageName.replace("@", "")}`;
          },
        },
      },
    },
  },
  plugins: [
    new MiniCssExtractPlugin(),

    new BrowserSyncPlugin({
      host: "localhost",
      port: 3008,
      server: { baseDir: ["dist"] },
    }),
    new HtmlWebpackPlugin({
      template: "src/assets/index.html",
      minify: false,
    }),
    new HtmlWebpackPlugin({
      filename: "gsp-detail.html",
      template: "src/assets/gsp-detail.html",
    }),
    new HtmlWebpackPlugin({
      filename: "gs-group-detail.html",
      template: "src/assets/gs-group-detail.html",
    }),
    new HtmlWebpackPlugin({
      filename: "midway-detail.html",
      template: "src/assets/midway-detail.html",
    }),
    new HtmlWebpackPlugin({
      filename: "cimarron-detail.html",
      template: "src/assets/cimarron-detail.html",
    }),
    new HtmlWebpackPlugin({
      filename: "crazy8-detail.html",
      template: "src/assets/crazy8-detail.html",
    }),
    new HtmlWebpackPlugin({
      filename: "email-detail.html",
      template: "src/assets/email-detail.html",
    }),
    new HtmlWebpackPlugin({
      filename: "utmost-detail.html",
      template: "src/assets/utmost-detail.html",
    }),

    new HtmlWebpackPlugin({
      filename: "dra-c-galluci.html",
      template: "src/assets/dra-c-galluci.html",
    }),

    new HtmlWebpackPlugin({
      filename: "gamingmechanics.html",
      template: "src/assets/gamingmechanics.html",
    }),
    new HtmlWebpackPlugin({
      filename: "axa-wealth.html",
      template: "src/assets/axa-wealth.html",
    }),
    new HtmlWebpackPlugin({
      filename: "utmost-ux-detail.html",
      template: "src/assets/utmost-ux-detail.html",
    }),
  ],

  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              // only enable hot module reloading in development
              hmr: process.env.NODE_ENV === "development",
              // if hmr does not work, this is a forceful method.
              reloadAll: true,
            },
          },
          // {
          //   // Adds CSS to the DOM by injecting a `<style>` tag
          //   loader: "style-loader",
          // },
          {
            // Interprets `@import` and `url()` like `import/require()` and will resolve them
            loader: "css-loader",
            options: {
              url: true,
              sourceMap: true,
            },
          },
          {
            // Loader for webpack to process CSS with PostCSS
            loader: "postcss-loader", // Run post css actions
            options: {
              plugins: function () {
                // post css plugins, can be exported to postcss.config.js
                return require("autoprefixer");
              },
            },
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
        ],
      },
      {
        test: /\.(png|jpg|gif|jpeg|svg|webp)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "images",
              publicPath: "src/images",
            },
          },
        ],
      },
    ],
  },
};
