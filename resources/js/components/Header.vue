<template>
    <div class="flex items-center w-full" :class="sizeHeader">
            <b-icon :pack="iconPack" :icon="icon" v-if="icon"/>
            <b-image :src="src" :rounded="roundedImage" v-if="image" :class="imageClasses"/>
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
        imageClasses: { type: String, default: null },
        iconClasses: { type: String, default: null },
        iconPack: { type: String, default: 'fas' },
        roundedImage: { type: Boolean, default: false }
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