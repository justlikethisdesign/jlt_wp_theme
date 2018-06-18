var gulp         = require('gulp'); // Gulp of-course
var fs           = require('fs');


// Parse values from package.json
var getPackageJSON = function() {
    return JSON.parse(fs.readFileSync('./package.json', 'utf8'));
};


module.exports = {

    projectName: getPackageJSON().name,

    packageJson: getPackageJSON(),

    base: './',

    // Translation related.
    translation: {
        file:               'WPGULP.pot',   // Name of the transalation file.
        dest:               './languages',  // Where to save the translation files.
        bugReport:          '',             // Where can users report bugs.
        lastTranslator:     '',             // Last translator Email ID.
        team:               ''              // Team's Email ID.
    },

    // Any required paths
    paths: {
        css: {
            folder:         'assets/sass/', // Path to place the compiled CSS file.
            critical:       'assets/sass/critical.scss',
            noncritical:    'assets/sass/noncritical.scss', // Path to main .scss file.
            all:            'assets/sass/*.css',  // Path to main .css file
            watch:          'assets/sass/**/*.scss',
            criticalnpm: [
                './node_modules/font-awesome/css/font-awesome.css',
                './node_modules/normalize-css/normalize.css',
            ],
            noncriticalnpm: [
                './node_modules/animate.css/animate.min.css',
                './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css'
            ],
        },
        js: {
            name:       'app',
            folder:     'assets/js/',
            all:        'assets/js/*.js',
            vendor:     'assets/js/vendor/*.js',
            custom:     'assets/js/custom/*.js',
            npm: [
                './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js',
            ],
        },
        img: {
            all:        'assets/img/raw/**/*.{png,jpg,gif,svg}',
            dest:       'assets/img/',
        },
        php: {
            watch:      '**/*.php'
        },
    },

    browsersync: {
        proxy: 'localhost/justlikethis', // Project URL.
        open: "external", // Allow external connections
        browser: "chrome", // Open the site in Chrome
        //host: "192.168.2.60", // May need to update this - use dev-ip to get list of IPs
        open: true, // Automatically open the browser with BrowserSync live server.
        injectChanges: true, // Inject CSS changes on change
        // port: 7000, // Use a specific port (instead of the one auto-detected by Browsersync).
    },


    // Browsers you care about for autoprefixing.
    // Browserlist https        ://github.com/ai/browserslist
    autoprefixer_browser: [
        'last 2 version',
        '> 1%',
        'ie >= 9',
        'ie_mob >= 10',
        'ff >= 30',
        'chrome >= 34',
        'safari >= 7',
        'opera >= 23',
        'ios >= 7',
        'android >= 4',
    ],


};
