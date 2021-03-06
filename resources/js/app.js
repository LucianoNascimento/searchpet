/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import * as VueGoogleMaps from 'vue2-google-maps'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/Login.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('login', require('./components/Login.vue').default);
Vue.component('cadastro', require('./components/Cadastro.vue').default);
Vue.component('cadastro-animais', require('./components/CadastroAnimais.vue').default);
Vue.component('formulario-cadastro', require('./components/FormularioCadastro.vue').default);
Vue.component('cadastro-animais', require('./components/CadastroAnimais.vue').default);
Vue.component('formulario-endereco', require('./components/FormularioEndereco.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('mapa', require('./components/Mapa.vue').default);
Vue.component('endereco', require('./components/Endereco.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyD5BVi_IUo3zCzWefEWfW9sP1r-5ZbeWr4',
        libraries: 'places',
    },
})
const app = new Vue({
    el: '#app',

});
