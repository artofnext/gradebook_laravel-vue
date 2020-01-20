<template>
    <div>
        <p>List of Users</p>
        <ul>
            <li
                v-for="user in users"
                :key="user.id"
                >
                Name: {{ user.name }} - Role: {{ user.role }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "users_list",
    data() {
        return {
            users: [
                {
                    id: 1,
                    name: 'UserName',
                    role: 'admin',
                },
                {
                    id: 2,
                    name: 'UserName2',
                    role: 'user',
                },
            ],
        }
    },
    // mounted () {
    //     axios
    //         .get('')
    //         .then(response => (this.users = response));
    // }
}
</script>
