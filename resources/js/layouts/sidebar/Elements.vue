<template>
    <b-menu class="is-custom-mobile">
        <b-menu-list label="Menu">


            <template v-for="(item, index) in items">
                <sidebar-item :item="item" :key="index">
                </sidebar-item>
            </template>


        </b-menu-list>
        <b-menu-list label="Acciones">


            <b-menu-item icon="user" label="Perfil"></b-menu-item>
            <b-menu-item icon="sign-out-alt" label="Cerrar sesión"></b-menu-item>

            
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