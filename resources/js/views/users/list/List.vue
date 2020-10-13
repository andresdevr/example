<template class="container">
    <b-card class="xl:m-5 lg:m-4 md:m-3 m-2">
        <b-header title="Usuarios" :size="titleSize"/>

        <b-tabs v-model="activeTab">
            <b-tab-item label="Lista">

                <users-table :data="users" v-if="users.length" @user-selected="setUser">
                </users-table>
                
            </b-tab-item>

            <b-tab-item label="Seleccionado">

                <user-details :user="user">
                </user-details>

            </b-tab-item>
            <b-tab-item label="Añadir">
                
                <create-user>
                </create-user>

            </b-tab-item>
        </b-tabs>
    </b-card>
</template>

<script>
import Table from './Table';
import UserDetails from './UserDetails';
import CreateUser from './CreateUser';

export default {
    components: {
        'users-table': Table,
        UserDetails,
        CreateUser
    },
    data() {
        return {
            user: null,
            activeTab: 0
        }
    },
    beforeCreate() {
        this.$store.dispatch('getUsers');
    },
    computed: {
        titleSize: function () {
            var size = this.$store.getters.media;
            if (size == 'xl')
                return 1;
            if (size == 'lg')
                return 2;
            if (size == 'md')
                return 3;
            if (size == 'sm')
                return 4;
            return 5;
        },
        users: function () {
            return this.$store.getters.users;
        }
    },
    methods: {
        setUser: function (user) {
            this.user = user;
            this.activeTab = 1;
        }
    }
}
</script>

<style>

</style>