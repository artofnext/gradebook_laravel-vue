<template>
    <div class="users">
        <div class="loading" v-if="loading">
            Now loading...
        </div>
        <div class="error" v-if="error">
            Something went wrong. Try again later. <br>
            {{ error }}
        </div>

        <ul v-if="users">
            <li v-for="{ name, email } in users" :key="name">
                <strong>Name:</strong> {{ name }},
                <strong>Email:</strong> {{ email }}
            </li>
        </ul>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            loading: false,
            users: null,
            error: null,
        };
    },
    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            this.error = this.users = null;
            this.loading = true;
            axios
                .get('/api/users')
                .then(response => {
                    this.loading = false;
                    // console.log(response);
                    this.users = response.data;
                }).catch((error) => {
                    this.loading = false;
                    this.error = error;
                });
        }
    }
}
</script>

<style lang="scss" scoped>
    .error {
        color: red;
    }
</style>
