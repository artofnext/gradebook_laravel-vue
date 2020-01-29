<template>
    <div class="container">
        <demo-warning />
        <header-comp :userName="userName" :userRole="userRole" :logged="authenticated" />
        <div class="panel panel-default">
        <div class="panel-heading">
            <nav>
                <ul class="list-inline">
                    <li>
                        <router-link :to="{ name: 'home' }">Home</router-link>
                    </li>
                    <li class="pull-right">
                        <router-link :to="{ name: 'login' }">Login</router-link>
                    </li>
                    <li class="pull-right">
                        <router-link :to="{ name: 'register' }">Register</router-link>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="panel-body">
            <router-view></router-view>
        </div>
    </div>

        <p>
            <!-- <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link> |
            <router-link :to="{ name: 'users.index' }">Users</router-link>
            <hr> -->

            <!-- <router-link
                v-if="!authenticated" to="{ name: 'login' }"
                v-on:click.native="login()"
                replace>Login</router-link
            >
            <router-link
                v-if="authenticated" to="{ name: 'login' }"
                v-on:click.native="logout()"
                replace>Logout</router-link
            > -->
        </p>

        <div >

            <!-- <router-view @authenticated="setAuthenticated" /> -->

            <!-- <router-view></router-view> -->

        </div>
    </div>
</template>
<script>
    import DemoWarning from '../components/DemoWarning.vue';
    import HeaderComp from '../components/HeaderComp';
    import { mapState } from 'vuex'

    // mock data object from backend
    // let user = {
    //     userId: "123456",
    //     userName: 'User Name',
    //     userRole: 'Role',
    //     mockAccount: {
    //         username: "user",
    //         password: "password",
    //     },
    // }

    export default {
        data() {
            return {
                // user: $state.user,
                authenticated: false,
                userName: '',
                userRole: '',
            }
        },
        components: {
            DemoWarning,
            HeaderComp,
        },
        methods: {

        },
        // computed: {
        //     ...mapState({
        //         authenticated: state => state.logged,
        //         user: user => state.user,
        //     }),
        // },
        // mounted() {
        //     if(!this.authenticated) {
        //         this.$router.replace({ name: "login" }).catch(err => {});
        //     }
        // },
    }
</script>

<style lang="scss" scoped>
    .container {
        max-width: 800px;
        margin: 50px auto;

        h1 {
            color: red;
        }
    }

    .router-link-exact-active {
        color: blue;
    }
</style>
