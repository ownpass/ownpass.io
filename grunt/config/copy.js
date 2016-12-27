// https://github.com/gruntjs/grunt-contrib-copy
module.exports = {
    'dist': {
        files: [
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/android/**/*.ico',
                    '<%= paths.images %>/android/**/*.png'
                ],
                dest: '<%= paths.public %>/img/android/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/apple/**/*.ico',
                    '<%= paths.images %>/apple/**/*.png'
                ],
                dest: '<%= paths.public %>/img/apple/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/download/**/*.ico',
                    '<%= paths.images %>/download/**/*.png'
                ],
                dest: '<%= paths.public %>/img/download/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/favicon/**/*.ico',
                    '<%= paths.images %>/favicon/**/*.png'
                ],
                dest: '<%= paths.public %>/img/favicon/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/ms/**/*.ico',
                    '<%= paths.images %>/ms/**/*.png'
                ],
                dest: '<%= paths.public %>/img/ms/'
            },
            {
                expand: true,
                flatten: true,
                src: [
                    '<%= paths.images %>/*.ico',
                    '<%= paths.images %>/*.png'
                ],
                dest: '<%= paths.public %>/img/'
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
