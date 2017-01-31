module.exports = function(grunt) {
    'use strict';

    var project = {
        pkg: grunt.file.readJSON('package.json'),
        paths: {
            get config() {
                return this.grunt + 'config/';
            },
            fonts: 'assets/fonts/',
            grunt: 'grunt/',
            images: 'assets/img/',
            js: 'assets/js/',
            public: 'public_html/',
            scss: 'assets/scss/',
            svg: 'assets/svg/'
        },
        files: {
            get config() {
                return project.paths.config + '*.js';
            },
            grunt: 'Gruntfile.js'
        }
    };

    require('load-grunt-config')(grunt, {
        configPath: require('path').join(process.cwd(), project.paths.config),
        data: project
    });

    //grunt.loadTasks('grunt/tasks/');

    grunt.registerTask('js', [
        'jshint',
        'concat',
        'uglify',
    ]);

    grunt.registerTask('default', [
        'clean',
        'js',
        'sass',
        'copy'
    ]);
};
