/*!
 * Conditionizr test: Touch
 */
conditionizr.add('touch', function () {
    return !!'ontouchstart' in window || !!navigator.msMaxTouchPoints;
});

/*!
 * Conditionizr test: Chrome
 */
conditionizr.add('chrome', function () {
    return !!window.chrome && /google/i.test(navigator.vendor);
});

/*!
 * Conditionizr test: Firefox
 */
conditionizr.add('firefox', function () {
    return 'InstallTrigger' in window;
});


/*!
 * Conditionizr test: Opera
 */
conditionizr.add('opera', function () {
    return !!window.opera || /opera|opr/i.test(navigator.userAgent);
});

/*!
 * IE6
 * @cc_on Conditional Compilation to test the
 * JavaScript version and MSIE 6 in the UserAgent
 */
conditionizr.add('ie6', function () {
  return (Function('/*@cc_on return (@_jscript_version == 5.6 || (@_jscript_version == 5.7 && /MSIE 6\.0/i.test(navigator.userAgent))); @*/')());
});

/*!
 * IE7
 * @cc_on Conditional Compilation to test the
 * JavaScript version and MSIE 7 in the UserAgent
 */
conditionizr.add('ie7', function () {
  return (Function('/*@cc_on return (@_jscript_version == 5.7 && /MSIE 7\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')());
});

/*!
 * Conditionizr test: IE8
 */
conditionizr.add('ie8', function () {
    var version = false;
    /*@cc_on
        if (@_jscript_version > 5.7 && !/^(9|10)/.test(@_jscript_version))
        version = true
    @*/
    return version;
});

/*!
 * Conditionizr test: IE9
 */
conditionizr.add('ie9', function () {
    var version = false;
    /*@cc_on
        if (/^9/.test(@_jscript_version) && /MSIE 9\.0(?!.*IEMobile)/i.test(navigator.userAgent))
        version = true
    @*/
    return version;
});

/*!
 * Conditionizr test: IE10
 */
conditionizr.add('ie10', function () {
    var version = false;
    /*@cc_on
        if (/^10/.test(@_jscript_version) && /MSIE 10\.0(?!.*IEMobile)/i.test(navigator.userAgent))
        version = true
    @*/
    return version;
});

/*!
 * Conditionizr test: IE11
 */
conditionizr.add('ie11', function () {
  return /(?:\sTrident\/7\.0;.*\srv:11\.0)/i.test(navigator.userAgent);
});

/*!
 * Windows
 */
conditionizr.add('windows', function () {
    return /win/i.test(navigator.platform);
});

/*!
 * Mac
 */
conditionizr.add('mac', function () {
    return /mac/i.test(navigator.platform);
});



conditionizr.config({
    assets: '/assets/js/conditionizr/',
    tests: {
        'windows': ['class'],
        'mac': ['class'],
        'firefox': ['class'],
        'chrome': ['class'],
        'touch': ['class'],
        'ie11': ['class'],
        'ie10': ['class'],
        'ie9': ['class'],
        'ie8': ['class'],
        'ie7': ['class'],
        'ie6': ['class']
    }
});


conditionizr.load('/assets/js/conditionizr/ie/warning.js', ['ie6', 'ie7']);
conditionizr.on('ie7', function () {

    window.onload = function() {
        legacyIEwarning(function() {
            return {imgPath: "/assets/js/conditionizr/ie/i" /*specifies the path to each of the browser icons*/};
        });
    };

});
