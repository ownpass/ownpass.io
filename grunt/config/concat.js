// https://github.com/gruntjs/grunt-contrib-concat
module.exports = {
    options: {
        banner: "/*! https://ownpass.io */\n",
    },
    build: {
        src: [
            'node_modules/jquery/dist/jquery.js',
            '<%= paths.js %>/ownpass.js'
        ],
        dest: '<%= paths.public %>/js/ownpass.js',
    }
};
