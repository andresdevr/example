<template>
    <div class="block">
        <img :src="src" :alt="alt" />
    </div>
</template>

<script>
export default {
    computed: {
        src: function () {
            return 'https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png';
        },
        alt: function () {
            return 'alt';
        }
    }
}
</script>

<style>

</style>