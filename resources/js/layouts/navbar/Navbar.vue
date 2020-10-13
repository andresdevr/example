<template>
    <b-navbar shadow>
        <template slot="brand">
            <b-navbar-item tag="router-link" :to="{ path: '/' }">
                <img
                    src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
                    alt="Lightweight UI components for Vue.js based on Bulma"
                >
            </b-navbar-item>
        </template>
        <template slot="start">
            <b-navbar-item href="#">
                Home
            </b-navbar-item>
            <b-navbar-item href="#">
                Documentation
            </b-navbar-item>
            <b-navbar-dropdown label="Info">
                <b-navbar-item href="#">
                    About
                </b-navbar-item>
                <b-navbar-item href="#">
                    Contact
                </b-navbar-item>
            </b-navbar-dropdown>
        </template>

        <template slot="end">
            <b-navbar-item tag="div">
                <div class="buttons">
                    
                    <b-tooltip position="is-bottom" multilined animated>
                        <b-button type="is-info" icon-right="user" />
                        <template v-slot:content>
                            <div>
                                <h3>
                                    {{ username }}
                                </h3>
                            </div>
                        </template>
                    </b-tooltip>


                    <b-button type="is-primary" outlined icon-right="sign-out-alt" @click="logout()" />
                </div>
            </b-navbar-item>
        </template>
    </b-navbar>
</template>

<script>
export default {
    computed: {
        username: function () {
            return this.$store.getters.username;
        }
    },
    methods: {
        logout: function () {
            this.$buefy.dialog.confirm({
                    title: 'Cerrar sesión',
                    message: '¿Estás seguro de querer cerrar sesión?',
                    confirmText: 'Cerrar sesión',
                    cancelText: 'Cancelar',
                    type: 'is-danger',
                    hasIcon: true,
                    onConfirm: () => this.$store.dispatch('logout')
                })
        }
    }
}
</script>

<style>

</style>