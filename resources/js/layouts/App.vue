<template>
    <router-view>
    </router-view>
</template>

<script>
export default {
    beforeCreate() {
        this.$store.commit('setWidth', window.innerWidth || document.body.clientWidth);
        this.$store.commit('setHeight', window.innerHeight || document.body.clientHeight);
        window.onresize = () => this.listenBrowserSize();
        this.$store.dispatch('checkSession');
        
    },
    methods: {
        listenBrowserSize: function () {
            this.$store.commit('setWidth', window.innerWidth || document.body.clientWidth);
            this.$store.commit('setHeight', window.innerHeight || document.body.clientHeight);
        }
    },
    computed: {
        doNotHasSession: function () {
            return _.isNull(this.$store.getters.userId)
        }
    }
}
</script>

<style>

</style>