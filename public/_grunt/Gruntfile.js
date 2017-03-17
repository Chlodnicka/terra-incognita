module.exports = function (grunt) {

    var config = {
        src: '../../resources/assets',
        dest: '../assets',
        js: grunt.file.readYAML('../assets/js.yaml')
    };

    grunt.initConfig({

        config: config,

        // sass task - process sass files
        sass: {
            options: {
                outputStyle: 'compressed', // or 'nested'
                sourceMap: true,
                imagePath: '/img',
                // precision: 5,
                // includePaths: [],
            },
            assets: {
                src: '<%= config.src %>/scss/main.scss',
                dest: '<%= config.dest %>/css/main.min.css',
            },
        },


        // autoprefixer task - add css vendor prefixes in preprocessed css files (after sass task!) // TODO: expand
     //   autoprefixer: {
      //      assets: {
        //        src: '<%= config.dest %>/css/main.min.css',
        //        dest: '<%= config.dest %>/css/main.min.css',
        //    },
       // },


        // concat and minify js
        uglify: {
            options: {
                sourceMap: true,
                preserveComments: 'some'
            },
            assets: {
                src: config.js,
                dest: '<%= config.dest %>/js/main.min.js',
            },
        },


        // watch task
        watch: {
            options: {
                spawn: false,
                event: ['added', 'deleted', 'changed'],
            },
            grunt: {
                files: ['Gruntfile.js', '../assets/js.yaml'],
            },
            scss: {
                files: ['<%= config.src %>/scss/**/*.css', '<%= config.src %>/scss/**/*.scss'],
                tasks: ['scss'],
            },
            js: {
                files: config.js,
                tasks: ['js'],
            },
        },

    });


 //   grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');

    grunt.registerTask('scss', ['sass']);
    grunt.registerTask('js', ['uglify']);
    grunt.registerTask('compile', ['scss', 'js']);
    grunt.registerTask('work', ['compile', 'watch']);
    grunt.registerTask('default', ['compile']);

};