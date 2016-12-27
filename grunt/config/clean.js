// https://github.com/gruntjs/grunt-contrib-clean
module.exports = {
    build: [
        '<%= paths.public %>/css/',
        '<%= paths.public %>/img/',
        '<%= paths.public %>/js/'
    ]
};
