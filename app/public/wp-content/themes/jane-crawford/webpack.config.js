const defaults = require("@wordpress/scripts/config/webpack.config");

module.exports = {
    ...defaults,
    externals: {
        react: "React",
        "react-dom": "ReactDOM",
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules)/,
                use: {
                    loader: "babel-loader",
                },
            },
        ],
    },
};
