<template>
    <div>
        <sidebar>
            <router-view></router-view>
        </sidebar>
    </div>
</template>

<script>
import Sidebar from './sidebar/Sidebar';
export default {
    components: {
        Sidebar
    }
}
</script>

<style>

</style>