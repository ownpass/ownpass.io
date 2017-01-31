// https://github.com/gruntjs/grunt-contrib-copy
module.exports = {
    'dist': {
        files: [
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/favicons/**/*.ico'
                ],
                dest: '<%= paths.public %>/img/favicons/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/icons/**/*.png'
                ],
                dest: '<%= paths.public %>/img/icons/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/download/**/*.png'
                ],
                dest: '<%= paths.public %>/img/download/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.svg %>/**/*.svg'
                ],
                dest: '<%= paths.public %>/svg/'
            }
        ]
    }
};
