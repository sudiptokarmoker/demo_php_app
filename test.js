var system = require('system');
var args = system.args;
var b_debug_write = false;

if (args.length < 2) {
    console.log("Minim 2 parameters");
    console.log("call with: phantomjs program.js http://myurl.com quality");
    console.log("Parameter debug is optional");
    args.forEach(function(arg, i) {
            console.log(i + ': ' + arg);
        });
    // Exit with error level 1
    phantom.exit(1);
}

var s_url = args[1];
var s_quality = args[2];

if (args.length > 3) {
    // Enable debug
    b_debug_write = true;
}

consoleDebug("Starting with url:" + s_url + " and quality:" + s_quality);
