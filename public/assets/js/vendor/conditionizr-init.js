/*!
 * Conditionizr test: Touch
 */
conditionizr.add('touch', [], function () {
    return !!'ontouchstart' in window || !!navigator.msMaxTouchPoints;
});

/*!
 * Conditionizr test: Chrome
 */
conditionizr.add('chrome', [], function () {
    return !!window.chrome && /google/i.test(navigator.vendor);
});

/*!
 * Conditionizr test: Firefox
 */
conditionizr.add('firefox', [], function () {
    return 'InstallTrigger' in window;
});


/*!
 * Conditionizr test: Opera
 */
conditionizr.add('opera', [], function () {
    return !!window.opera || /opera|opr/i.test(navigator.userAgent);
});

/*!
 * Conditionizr test: IE8
 */
conditionizr.add('ie8', [], function () {
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
conditionizr.add('ie9', [], function () {
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
conditionizr.add('ie10', [], function () {
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
conditionizr.add('ie11', [], function () {
  return /(?:\sTrident\/7\.0;.*\srv:11\.0)/i.test(navigator.userAgent);
});

/*!
 * Windows
 */
conditionizr.add('windows', [], function () {
    return /win/i.test(navigator.platform);
});

jQuery(function($) {

    conditionizr.config({
        assets: '/path/to/my/assets/',
        tests: {
            'firefox': ['class'],
            'chrome': ['class'],
            'touch': ['class'],
            'ie11': ['class'],
            'ie10': ['class'],
            'ie9': ['class'],
            'ie8': ['class'],
        }
    });

});
