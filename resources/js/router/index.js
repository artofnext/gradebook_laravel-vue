
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Secure from '../views/Secure.vue';
import Home from '../views/Home.vue';
import Register from '../views/Register.vue';
import Login from '../views/Login.vue';

const router = new VueRouter({
    mode: 'history',
    // mode: 'hash',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
            meta: {
                auth: false
            },
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                auth: false
            }
        },
        {
            path: '/secure',
            name: 'secure',
            component: Secure,
            meta: {
                auth: true
            }
        },
    ],
});

export default router;
