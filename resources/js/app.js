require('./bootstrap');

import Vue from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);

createInertiaApp({
   resolve: name => require(`./Pages/${name}`),
   setup({ el, app, props }) {
      new Vue({
         render: h => h(app, props),
      }).$mount(el);
   },
});
