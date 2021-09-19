/**
 * External Dependencies
 */
const path = require("path");

/**
 * WordPress Dependencies
 */
const defaultConfig = require("@wordpress/scripts/config/webpack.config.js");

module.exports = {
    ...defaultConfig,
    ...{
        entry: {
            index: path.resolve(process.cwd(), "src", "index.js"),
            //  "beer-admin": path.resolve( process.cwd(), 'src', 'beer-admin.js' ),
            //  "beer-list": path.resolve( process.cwd(), 'src', 'beer-list.css' ),
        },
    },
};
