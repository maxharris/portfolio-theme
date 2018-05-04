module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

		less: {
			dev: {
				options: {
					plugins: [
						new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
          	require('less-plugin-group-css-media-queries')
					]
				},
				files: {
					'style.css': 'assets/less/style.less'
				}
			}
		},
  	uglify: {
	    build: {
	      src: 'assets/js/src/*.js',
	      dest: 'production-assets/js/scripts.min.js'
	    }
		},

		watch: {
			css: {
				files: ['assets/less/*.less'],
				tasks: ['less'],
				options: {
					livereload: true
				}
			},
			scripts: {
				files: ['assets/js/*.js'],
				tasks: ['uglify'],
				options: {
					livereload: true
				}
			}
		}
  });

	grunt.loadNpmTasks('grunt-contrib-less-compiler');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['less', 'uglify']);
};