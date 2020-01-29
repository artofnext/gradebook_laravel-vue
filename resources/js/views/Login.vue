<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            <p>There was an error, unable to sign in with those credentials.</p>
            <p> {{ message }} </p>
        </div>
        <form autocomplete="off" @submit.prevent="login" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" class="form-control"
                placeholder="user@example.com"
                v-model="email" required
                >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control"
                v-model="password" required
                >
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            message: '',
            error: false,
        }
    },
    methods: {
        login() {
            this.$auth.login({
                data: {email: this.email, password: this.password},
                success: function() {
                        console.log('Success!');
                    },
                error: function(resp) {
                    console.log('Wrong!');
                    console.log(resp);
                    this.error = 'true';
                    this.message = resp;
                },
                rememberMe: true,
            });
        }
    }
}
</script>
