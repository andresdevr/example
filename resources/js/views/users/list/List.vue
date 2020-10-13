<template class="container">
    <b-card class="xl:m-5 lg:m-4 md:m-3 m-2">
        <b-header title="Usuarios"/>
    </b-card>
</template>

<script>
export default {
    beforeCreate() {
        this.$store.dispatch('getUsers');
    }
}
</script>

<style>

</style>