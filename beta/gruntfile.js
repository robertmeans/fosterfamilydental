module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			my_target: {
				files: {
					'js/scripts.js': ['components/javascript-to-compile/_scripts-staging.js'],
					'js/services-scripts.js': ['components/javascript-to-compile/_services-scripts-staging.js']
				} //files
			} //my_target
		}, //uglify		

		/* Sass */
		sass: {
		  dev: {
		    options: {
		      style: 'expanded',
		      sourcemap: 'none'
		    },
		    files: {
		      'style-expanded.css': 'components/sass/style.scss',
		      'style-services-expanded.css': 'components/sass/style-services.scss'
		    }
		  },
		  dist: {
		  	options: {
		  		style: 'compressed',
		  		sourcemap: 'none'
		  	},
		  	files: {
		  		'style.css': 'components/sass/style.scss',
		  		'style-services.css': 'components/sass/style-services.scss'
		  	}
		  }
		},
		/* Autoprefixer */
		autoprefixer: {
			options: {
				browsers: ['last 4 versions']
			},
			// prefix all files
			multiple_files: {
				expanded: true, 
				flatten: true,
				src: '*.css',
				dest: ''
			}
		},

	  	/* Watch */
		watch: {
			options: { livereload: true },
			scripts: {
				files: ['components/javascript-to-compile/_scripts-staging.js','components/javascript-to-compile/_services-scripts-staging.js'],
				tasks: ['uglify']
			}, //scripts			
			css: {
				files: '**/*.scss',
				tasks: ['sass','autoprefixer']
			}, // css
			hypertext: {
				files: ['*.php','*.htm','_includes/*.php']
			} //hypertext
		}, //watch

	});
	grunt.loadNpmTasks('grunt-contrib-uglify'); //uglify minifies js upon save
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default',['watch']);
}