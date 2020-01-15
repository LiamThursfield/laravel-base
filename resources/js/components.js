/**
 * Register any core Vue Components
 */

// Buttons
Vue.component('hamburger-button', require('./components/buttons/HamburgerButton').default);

// Forms
Vue.component('checkbox-input', require('./components/forms/CheckboxInput').default);
Vue.component('csrf-input', require('./components/forms/CsrfInput').default);
Vue.component('two-col-input-group', require('./components/forms/TwoColInputGroup').default);

// Headers
Vue.component('header-main', require('./components/headers/HeaderMain.vue').default);




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))