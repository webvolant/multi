/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('template-form', require('./components/TemplateForm.vue').default);
Vue.component('template-index', require('./components/TemplateIndex.vue').default);
Vue.component('editor', require('./components/Editor.vue').default);

Vue.component('placeholder-index', require('./components/PlaceholderIndex.vue').default);
Vue.component('placeholder-form', require('./components/PlaceholderForm.vue').default);
*/
Vue.component('product-form', require('./components/ProductForm.vue').default);

import 'primeflex/primeflex.css';
import PrimeVue from 'primevue/config';
import ToastService from 'primevue/toastservice';
import Toast from 'primevue/toast';
import Checkbox from 'primevue/checkbox';
import InputText from 'primevue/inputtext';
import Dropdown from 'primevue/dropdown';

import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';


Vue.use(PrimeVue);
Vue.use(ToastService);
Vue.component('prime-checkbox', Checkbox);
Vue.component('prime-inputtext', InputText);
Vue.component('prime-toast', Toast);
Vue.component('prime-dropdown', Dropdown);
Vue.component('prime-accordion', Accordion);
Vue.component('prime-accordiontab', AccordionTab);




//import useVuelidate from '@vuelidate/core'
//import { required, email } from '@vuelidate/validators'
//Vue.use(useVuelidate);

import mixin from './plugins/mixin';
const app = new Vue({
    el: '#app',
    mounted(){
        //this.sampleFunction();
    }
});
