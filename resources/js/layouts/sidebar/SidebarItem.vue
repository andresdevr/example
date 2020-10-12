<template>
    <b-menu-item :expanded="item.children.length < 0" :icon="item.icon" :label="item.title" @click="goTo()">
        <sidebar-item :item="child" :key="index" v-for="(child, index) in item.children"/>
    </b-menu-item>
</template>

<script>
export default {
    props: {
        item: { type: Object, default: null}
    },
    methods: {
        goTo: function () {
            if (!_.isEmpty(this.item.route))
                this.$router.push(this.item.route);
        }
    }
}
</script>

<style>

</style>