<template>
    <div class="w-full h-screen flex justify-center content-center flex-wrap">
        <div class="card xl:w-2/12 lg:w-4/12 md:w-6/12 sm:8/12 p-4">
            <b-header title="ERP" :size="1" roundedImage/>
            <b-field label="Email">
                <b-input v-model="email" type="email" icon="user" placeholder="Email"></b-input>
            </b-field>
            <b-field label="Contraseña">
                <b-input v-model="password" type="password" icon="key" placeholder="Contraseña"></b-input>
            </b-field>
            <b-checkbox v-model="remember" class="my-4">
                Recordar sesión
            </b-checkbox>
            <b-button type="is-primary" icon-left="sign-in-alt" expanded :disabled="!isFormValid" @click="login">
                Iniciar sesión
            </b-button>
        </div>
    </div>
</template>



<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            remember: false
        }
    },
    computed: {
        isFormValid: function () {
            var email = this.email && validator.isEmail(this.email);
            var password = this.password;
            return email && password;
        },
        form: function () {
            return {
                email: this.email,
                password: this.password,
                remember: this.remember
            };
        }
    },
    methods: {
        login: async function () {
            await this.$store.dispatch('login', this.form);
        }
    }
}
</script>

<style>

</style>