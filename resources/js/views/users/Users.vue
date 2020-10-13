<template>
    <router-view></router-view>
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