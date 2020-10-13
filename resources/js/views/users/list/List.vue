<template class="p-24">
    <div class="m-5">
    </div>
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