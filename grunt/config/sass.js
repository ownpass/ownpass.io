// https://github.com/gruntjs/grunt-contrib-sass
module.exports = {
    src: {
        options: {
            loadPath: [
            ],
            style: 'expanded',
            sourcemap: 'none',
            trace: true,
            unixNewlines: true
        },
        files: {
            '<%= paths.public %>/css/ownpass.css': '<%= paths.scss %>/ownpass.scss'
        }
    },
    dist: {
        options: {
            loadPath: [
            ],
            style: 'compressed',
            sourcemap: 'inline',
            trace: true,
            unixNewlines: true
        },
        files: {
            '<%= paths.public %>/css/ownpass.min.css': '<%= paths.scss %>/ownpass.scss'
        }
    }
};
