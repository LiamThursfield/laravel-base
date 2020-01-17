/**
 * Register any core Vue Components
 */

// Buttons
Vue.component('hamburger-button', require('./components/core/buttons/HamburgerButton').default);

// Forms
Vue.component('checkbox-input', require('./components/core/forms/CheckboxInput').default);
Vue.component('csrf-input', require('./components/core/forms/CsrfInput').default);
Vue.component('two-col-input-group', require('./components/core/forms/TwoColInputGroup').default);