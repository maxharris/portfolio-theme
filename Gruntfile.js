module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

  	uglify: {
		    build: {
		      src: 'js/src/*.js',
		      dest: 'js/min/scripts.min.js'
		    }
			}
  });

	grunt.registerTask('default', ['uglify']);

	grunt.loadNpmTasks('grunt-contrib-uglify');

};