<template>
    <b-menu class="is-custom-mobile">
        <b-menu-list label="Menu">


            <template v-for="(item, index) in items">
                <sidebar-item :item="item" :key="index">
                </sidebar-item>
            </template>


        </b-menu-list>
    </b-menu>
</template>

<script>
import Items from './items';
export default {
    computed: {
        items: function () {
            return Items;
        }
    }
}
</script>

<style>

</style>