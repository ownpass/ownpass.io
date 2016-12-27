// https://github.com/gruntjs/grunt-contrib-uglify
module.exports = {
    dist: {
        files: {
            '<%= paths.public %>/js/ownpass.min.js': [
                '<%= paths.public %>/js/ownpass.js'
            ]
        },
        options: {
            preserveComments: false,
            sourceMap: true,
            sourceMapName: "<%= paths.public %>/js/ownpass.min.js.map",
            report: "min",
            beautify: {
                "ascii_only": true
            },
            banner: "/*! https://ownpass.io */",
            compress: {
                "hoist_funs": false,
                loops: false,
                unused: false
            }
        }
    }
};
