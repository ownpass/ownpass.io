// https://github.com/gruntjs/grunt-contrib-watch
module.exports = {
    js: {
        files: [
            '<%= paths.js %>/**/*.js'
        ],
        tasks: ['concat', ''],
        options: {
            spawn: false
        }
    },
    sass: {
        files: [
            '<%= paths.scss %>/**/*.scss'
        ],
        tasks: ['sass'],
        options: {
            spawn: false
        }
    }
};
