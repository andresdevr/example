<template class="container">
    <b-card class="xl:m-5 lg:m-4 md:m-3 m-2">
        <b-header title="Usuarios" :size="titleSize"/>
    </b-card>
</template>

<script>
export default {
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
        }
    }
}
</script>

<style>

</style>