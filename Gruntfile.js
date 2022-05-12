module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'wp-content/themes/vox/compiled-css/vox.css' : 'wp-content/themes/vox/sass/styles.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'wp-content/themes/vox/sass/**/*.scss',
                tasks: ['sass', 'cssmin'],
            }
        },
        cssmin: {
            combine: {
                files: {
                    'wp-content/themes/vox/style.css': ['wp-content/themes/vox/compiled-css/*.css']
                }
            },
            minify: {
                src: 'wp-content/themes/vox/style.css',
                dest: 'wp-content/themes/vox/style.min.css'
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
    grunt.log.write(' Saranghaeyo! ').ok();

};