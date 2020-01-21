<template>
    <div class="container">
        <demo-warning />
        <header-comp :userName="userName" :userRole="userRole" :logged="logged"  />
        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link> |
            <router-link :to="{ name: 'users.index' }">Users</router-link>
        </p>

        <div >
            <router-view></router-view>
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
                logged: false,
            }
        },
        components: {
            DemoWarning,
            HeaderComp,
        }
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
