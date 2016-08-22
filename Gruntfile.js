module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'style.css': 'sass/style.scss'
				}
			}
		},

		uglify: {
			target: {
				files: {
					'js/build/global.min.js': [	'js/src/navigation.js', 'js/src/skip-link-focus-fix.js', 'js/src/customizer.js' ]
				}
			}
		},

		watch: {
			css: {
				files: ['sass/*.scss', 'sass/**/*.scss', 'sass/**/**/*.scss'],
				tasks: ['sass'],
			},
		},

  });

  // Load the plugins.
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};