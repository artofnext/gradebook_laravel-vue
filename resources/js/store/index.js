import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        logged: false,
        user: {
            userId: "123456",
            userName: 'User Name',
            userRole: 'Role',
            mockAccount: {
                username: "user",
                password: "password",
            },
        },
    },
    mutations: {

    },

})

export default store;
