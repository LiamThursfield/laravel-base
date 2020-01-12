window._ = require('lodash');

/**
 * Route exposes the Laravel Routes to the Vue instance
 * accessed via route(ROUTE_NAME)
 */
window.route = require('./helpers/route');

/**
 * Laravel exposes any properties defined in window.Laravel to the Vue instance
 * accessed via laravel(ROUTE_NAME, DEFAULT_VALUE)
 */
window.laravel = require('./helpers/laravel');


/**
 * User exposes methods to allow for easy authentication checks
 */
import User from './classes/user';
window.user = new User(laravel('user'));

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
