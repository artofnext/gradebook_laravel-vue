<template>
  <dir class="login-container">
    <dir class="login warning">
      <h1>You not logged yet!</h1>
      <p>Login first to have access to secure area</p>
    </dir>
    <form id="login" class="login-form">
        <h2>Login</h2>
        <input type="text" name="username" v-model="input.username" placeholder="Username" />
        <input type="password" name="password" v-model="input.password" placeholder="Password" />
        <p v-if="message" class="login-message">{{ message }}</p>
        <button type="button" v-on:click="login()">Login</button>
    </form>
  </dir>
</template>

<script>
    export default {
        name: 'Login',
        data() {
            return {
                input: {
                    username: "",
                    password: ""
                },
                message: null,
            }
        },
        methods: {
            login() {
                if(this.input.username != "" && this.input.password != "") {
                    this.message = false;
                    if(this.input.username == this.$parent.mockAccount.username && this.input.password == this.$parent.mockAccount.password) {
                        this.$emit("authenticated", true);
                        this.$router.replace({ name: "secure" });
                    } else {
                        this.message = "The username and / or password is incorrect";
                        console.log("The username and / or password is incorrect");
                    }
                } else {
                    this.message = "Empty credentials!";
                    console.log("A username and password must be present");
                }
            }
        }
    }
</script>

<style scoped>
    #login {
        width: 500px;
        border: 1px solid #CCCCCC;
        background-color: #FFFFFF;
        margin: auto;
        margin-top: 50px;
        padding: 20px;
    }
</style>
