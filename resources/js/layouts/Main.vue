<template>
    <div>
                <navbar></navbar>

        <sidebar>

            <template slot="main">
                <router-view></router-view>
            </template>

        </sidebar>
    </div>
</template>

<script>
import Sidebar from './sidebar/Sidebar';
import Navbar from './navbar/Navbar';
export default {
    components: {
        Sidebar,
        Navbar
    }
}
</script>

<style>

</style>