const path = require("path");
const miniCss = require("mini-css-extract-plugin");
const FileManagerPlugin = require("filemanager-webpack-plugin");

module.exports = {
  mode: "development",
  entry: "./assets/js/index.js",
  output: {
    filename: "bundle.js",
    path: path.resolve(__dirname, "dist"),
  },
  module: {
    rules: [
      {
        test: /\.(s*)css$/,
        use: [miniCss.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.(woff|woff2|eot|otf|ttf|svg)?$/,
        type: "asset/resource",
      },
    ],
  },
  plugins: [
    new miniCss({
      filename: "style.css",
    }),

    new FileManagerPlugin({
      events: {
        onStart: {
          delete: ["./style.css"],
        },
        onEnd: {
          move: [{ source: "./dist/style.css", destination: "./style.css" }],
        },
      },
    }),
  ],
};
