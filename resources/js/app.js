
require('./bootstrap');

window.Vue = require('vue');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//import Vue from 'vue';
//import Router from 'vue-router';
//Vue.use(Router);

let router = new Router({
    routes: [
        {
            path: '/',
            component: {
                template: '<div>Este es el home</div>'
            },
            path: '/acercade',
            component: {
                template: '<div>Este es el home</div>'
            }
            
        }
    ],
    linkExactActiveClass: 'active'


});


const app = new Vue({
    el: '#app',
    router,
    data:{
        message:'Aprendible'
    }
});
