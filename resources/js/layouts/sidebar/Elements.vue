<template>
    <b-menu class="is-custom-mobile">
        <b-menu-list label="Menu">

            <b-menu-item active expanded icon="users" label="Usuarios">
                <b-menu-item icon="account" label="Users"></b-menu-item>
            </b-menu-item>

            <b-menu-item icon="information-outline" label="Info"></b-menu-item>
            <b-menu-item active expanded icon="settings" label="Administrator">
                <b-menu-item icon="account" label="Users"></b-menu-item>
                <b-menu-item icon="cellphone-link" label="Devices"></b-menu-item>
                <b-menu-item icon="cash-multiple" label="Payments" disabled></b-menu-item>
            </b-menu-item>
            <b-menu-item icon="account" label="My Account">
                <b-menu-item icon="account-box" label="Account data"></b-menu-item>
                <b-menu-item icon="home-account" label="Addresses"></b-menu-item>
            </b-menu-item>

        </b-menu-list>
        <b-menu-list label="Acciones">
            <b-menu-item icon="user" label="Perfil"></b-menu-item>
            <b-menu-item icon="logout" label="Cerrar sesión"></b-menu-item>
        </b-menu-list>
    </b-menu>
</template>

<script>
export default {
    methods: {
        active: function (name) {
            return name == this.$route.name;
        }
    }
}
</script>

<style>

</style>