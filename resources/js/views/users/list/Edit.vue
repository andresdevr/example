<template>
    <div class="content">
        <b-field label="Nombre">
            <b-input placeholder="Algún nombre..." type="text" icon="user" icon-clickable v-model="newUser.name" required>
            </b-input>
        </b-field>
        <b-field label="Correo electrónico">
            <b-input placeholder="alguien@example.com" type="email" icon="at" icon-clickable v-model="newUser.email" required>
            </b-input>
        </b-field>
        <b-field label="Contraseña">
            <b-input placeholder="password" type="password" icon="key" password-reveal icon-clickable v-model="newUser.password" required>
            </b-input>
        </b-field>
        <b-field label="Confirmar contraseña" v-show="newUser.password">
            <b-input placeholder="password" type="password" icon="key" password-reveal icon-clickable v-model="newUser.confirmPassword" required>
            </b-input>
        </b-field>
        <div class="w-full flex justify-end">
            <b-button type="is-success" @click="editUser()" :disabled="!validation">
                Añadir
            </b-button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['user'],
    data() {
        return {
            newUser: {
                id: null,
                name: '',
                email: '',
                password: '',
                confirmPassword: '',
                avatar: ''
            }
        }
    },
    computed: {
        form: function () {
            return {
                id: this.newUser.id,
                name: this.newUser.name,
                email: this.newUser.email,
                password: this.newUser.password,
                avatar: this.newUser.avatar
            }
        },
        validation: function () {
            var name = this.newUser.name;
            var email = this.newUser.email && validator.isEmail(this.newUser.email);
            var password = this.newUser.password && this.newUser.password == this.newUser.confirmPassword;

            return name && email && password;

        }
    },
    methods: {
        editUser: async function () {
            if (this.validation) {
                status = await this.$store.dispatch('updateUser', this.form);
                this.$buefy.dialog.alert({
                    title: 'Usuario actualizado',
                    message: 'Se ha actualizado el usuario correctamente',
                    confirmText: 'Cerrar'
                });
            }
        }
    },
    watch: {
        user: function (value) {
            this.newUser = JSON.parse(JSON.stringify(value));
        }
    }
}
</script>

<style>

</style>