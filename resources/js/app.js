import {createInertiaApp} from "@inertiajs/inertia-vue";
import Vue from "vue";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";

createInertiaApp({
    resolve: name => resolvePageComponent(`./views/${name}.vue`, import.meta.glob('./views/**/*.vue')),
    setup({ el, app, props, plugin }) {
        Vue.use(plugin);

        Vue.nextTick(() => {
            document.title = 'ScrollRollDesign';
        });

        new Vue({
            render: h => h(app, props),
        }).$mount(el);
    },
})
