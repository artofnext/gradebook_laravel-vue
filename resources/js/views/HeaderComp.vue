<template>
    <header>
        <div class="container">
            <h2>Students Achievement Control System</h2>
            <div class="hello-user">
                <p>Hello, {{ userName }}!</p>
                <p>you logged as {{ userRole }}</p>
                <button>Log out</button>
            </div>
            <div class="not-logged">
                <p>You not logged in!</p>
                <button>Log In</button>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    props: {
        userName,
        userRole,
    }
}
</script>
