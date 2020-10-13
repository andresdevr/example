<template>
    <div class="w-full">
        <div class="w-full flex justify-center">
            <b-image :src="image" rounded>
            </b-image>
        </div>
        <h3 class="text-center is-size-3">
            {{ name }}
        </h3>
        <h4 class="text-center is-size-4">
            {{ email }}
        </h4>
        <div class="w-full flex justify-center" v-if="email">
            <b-button type="is-info" class="mr-2" @click="showEdit()">
                Editar
            </b-button>
            <b-button type="is-warning" class="ml-2" @click="showPermissions()">
                Permisos
            </b-button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['user'],
    computed: {
        image: function () {
            if (this.user.avatar)
                return this.user.avatar;
            return '/assets/default.jpg';
        },
        name: function () {
            if (this.user.name)
                return this.user.name;
            return 'Ninguno seleccionado';
        },
        email: function () {
            return this.user.email;
        }
    },
    methods: {
        showEdit: function () {

        },
        showPermission: function () {
            
        }
    }
}
</script>

<style>

</style>