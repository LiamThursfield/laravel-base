/**
 * Create a helper function to access any properties defined in window.Laravel within Vue
 */

module.exports = function (name, default_value = undefined) {
    if (!window || !window.Laravel) {
        console.error('window.Laravel not defined');
        return default_value;
    }

    if (window.Laravel[name] === undefined) {
        console.error('Laravel property not defined ', name);
        return default_value;
    }

    return window.Laravel[name];
};