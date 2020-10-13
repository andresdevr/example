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
    }
}
</script>

<style>

</style>