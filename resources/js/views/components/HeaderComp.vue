<template>
    <header>
        <div class="container flex-between">
            <h2>Students Achievement Control System</h2>
            <div class="hello-user flex-between" v-if="logged">
                <div class="user-container">
                    <p>Hello, {{ userName }}!</p>
                    <p>you logged as {{ userRole }}</p>
                </div>
                <button>Log out</button>
            </div>
            <div class="not-logged" v-if="!logged">
                <p>You not logged in!</p>
                <button>Log In</button>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    props: {
        userName: String,
        userRole: String,
        logged: Boolean,
    }
}
</script>

<style lang="scss">
.flex-between {
    display: flex;
    justify-content: space-between;
}
</style>
