<template>
    <b-menu-item :active="isActive" :expanded="item.children.length < 0" :icon="item.icon" :label="item.title" @click="goTo()">
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
    },
    computed: {
        routes: {
            get: function () {
                var matches = this.$route.matched;
                return _.map(matches, 'name');
            },
            set: function () {
            }
        },
        route: {
            get: function () {
                return this.item.route.name;
            },
            set: function (value) {
            }
        },
        isActive: function () {
            var index = _.findIndex(this.routes, (route) => {
                return this.route== route;
            });
            if (index < 0)
                return false;
            return true;
        },
    }

}
</script>

<style>

</style>