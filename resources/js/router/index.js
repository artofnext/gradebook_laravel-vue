
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Hello from '../views/Hello'
import Home from '../views/Home'
import UsersIndex from '../views/UsersIndex'
import UserLogin from '../views/UserLogin'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
        {
            path: '/login',
            name: 'login',
            component: UserLogin,
        },
        // {
        //     path: '/secure',
        //     name: 'secure',
        //     component: UserSecure,
        // },
    ],
});

export default router;



// import Vue from 'vue'
// import VueRouter from 'vue-router'


// Vue.use(VueRouter)

// const routes = []

// const router = new VueRouter({
//   mode: 'history',
//   base: process.env.BASE_URL,
//   routes
// })

// export default router
