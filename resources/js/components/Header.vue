<template>
    <div class="flex items-center" :class="sizeHeader">
            <b-icon :pack="iconPack" :icon="icon" v-if="icon"/>
            <b-image :src="src" :rounded="roundedImage" v-if="image"/>
        <h1 class="title" :class="sizeHeader">
            {{ title }}
        </h1>
    </div>
</template>

<script>
export default {
    props: {
        title: { type: String, default: null },
        size: { type: Number, default: 1 },
        icon: { type: String, default: null },
        image: { type: String, default: null },
        imageSize: { type: String, default: 'auto' },
        iconPack: { type: String, default: 'fas' },
        roundedImage: { type: Boolean, default: false}
    },
    computed: {
        sizeHeader: function () {
            return 'is-' + this.size;
        },
        src: function () {
            return this.image;
        }
    }
}
</script>

<style>

</style>