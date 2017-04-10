module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			options: {
				sourceMap: true
			},
			dist: {   
				files: {
					'css/style.css': 'scss/app.scss',
				}
			}
		},
		watch: {
			css: {
				files: 'scss/*.scss',
				//tasks: ['sass', 'cssmin','concat:app']
				tasks: ['sass', 'cssmin']
			
			}
		},
  		cssmin: {
		  minify: {
		    expand: true,
		    cwd: 'css',
		    src: ['*.css', '!*.min.css'],
		    dest: 'css',
		    ext: '.min.css'
		  }
		}
		

	});
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.registerTask('default',['watch']);
	grunt.registerTask('once',['sass','cssmin']);
}
