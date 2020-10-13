<template>
    <div>
        <b-field label="Nombre">
            <b-input placeholder="Algún nombre..." type="text" icon="user" icon-clickable v-model="name" required>
            </b-input>
        </b-field>
        <b-field label="Correo electrónico">
            <b-input placeholder="alguien@example.com" type="email" icon="at" icon-clickable v-model="email" required>
            </b-input>
        </b-field>
        <b-field label="Contraseña">
            <b-input placeholder="alguien@example.com" type="password" icon="key" password-reveal icon-clickable v-model="password" required>
            </b-input>
        </b-field>
        <b-field label="Confirmar contraseña" v-show="password">
            <b-input placeholder="alguien@example.com" type="password" icon="key" password-reveal icon-clickable v-model="confirmPassword" required>
            </b-input>
        </b-field>
        <div class="w-full flex justify-end">
            <b-button type="is-success" @click="create()" :disabled="!validation">
                Añadir
            </b-button>
        </div>
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
    },
    computed: {
        form: function () {
            return {
                name: this.name,
                email: this.email,
                password: this.password
            }
        },
        validation: function () {
            var name = this.name;
            var email = this.email && validator.isEmail(this.email);
            var password = this.password && this.password == this.confirmPassword;

            return name && email && password;

        }
    },
    methods: {
        create: async function () {
            if (this.validation) {
                status = await this.$store.dispatch('createUser', this.form);
                console.log(status);
            }

            
        }
    }
}
</script>

<style>

</style>