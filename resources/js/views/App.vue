<template>
    <div class="container">
        <demo-warning />
        <header-comp :userName="userName" :userRole="userRole" :logged="authenticated"  />
        <p>
            <!-- <router-link :to="{ name: 'home' }">Home</router-link> | -->
            <!-- <router-link :to="{ name: 'hello' }">Hello World</router-link> | -->
            <!-- <router-link :to="{ name: 'users.index' }">Users</router-link> -->

            <router-link
                v-if="authenticated" to="/login"
                v-on:click.native="logout()"
                replace>Logout</router-link
            >

        </p>

        <div >

            <router-view @authenticated="setAuthenticated" />

            <!-- <router-view></router-view> -->

        </div>
    </div>
</template>
<script>
    import DemoWarning from './components/DemoWarning.vue';
    import HeaderComp from './components/HeaderComp';

    export default {
        data() {
            return {
                userName: 'User Name',
                userRole: 'Role',
                authenticated: false,
                mockAccount: {
                    username: "user",
                    password: "password"
                },
            }
        },
        components: {
            DemoWarning,
            HeaderComp,
        },
        methods: {
            setAuthenticated(status) {
                this.authenticated = status;
            },
            logout() {
                this.authenticated = false;
            }
        },
        mounted() {
            if(!this.authenticated) {
                this.$router.replace({ name: "login" });
            }
        },
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
</style>
