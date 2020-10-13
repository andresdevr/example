<template>
    <div>
        <b-field label="Nombre">
            <b-input placeholder="Algún nombre..." type="text" icon="user" icon-clickable v-model="name">
            </b-input>
        </b-field>
        <b-field label="Correo electrónico">
            <b-input placeholder="alguien@example.com" type="email" icon="at" icon-clickable v-model="email">
            </b-input>
        </b-field>
        <b-field label="Contraseña">
            <b-input placeholder="alguien@example.com" type="password" icon="key" password-reveal icon-clickable v-model="password">
            </b-input>
        </b-field>
        <b-field label="Confirmar contraseña" v-show="password">
            <b-input placeholder="alguien@example.com" type="password" icon="key" password-reveal icon-clickable v-model="confirmPassword">
            </b-input>
        </b-field>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: null,
            email: null,
            password: null,
            confirmPassword: null
        }
    }
}
</script>

<style>

</style>