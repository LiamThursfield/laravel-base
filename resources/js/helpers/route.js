/**
 * This chunk of code - to include Laravel routes in VueJS - is written by Santiago Argilla.
 * https://medium.com/@sargilla/laravel-named-routes-in-vue-js-components-7b03e96bede8
 * It has been modified to allow for a fallback url
 */

let routes = window.Laravel.routes;

module.exports = function (name, route_args = [], default_route = undefined) {

    if (routes[name] === undefined) {
        console.error('Route not found ', name);

        if (default_route !== undefined) {
            return window.Laravel.baseUrl + '/' + default_route
        }
    } else if (routes[name] === '/') {
        return window.Laravel.baseUrl + '/'
    } else {
        return window.Laravel.baseUrl + '/' + routes[name]
            .split('/')
            .map(s => s[0] == '{' ? route_args.shift() : s)
            .join('/');
    }
};