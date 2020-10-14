<template>
    <vue-scroll :ops="scrollOptions"> 
        <b-table :data="data" :columns="columns" :selected.sync="selected" focusable>
        </b-table>
    </vue-scroll>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                selected: {},
                scrollOptions: {
                    vuescroll: {},
                    scrollPanel: {
                        maxHeight: 400
                    },
                    rail: {},
                    bar: {
                        background: '#8c67ef',
                        size: '3px'
                    }  
                }
            }
        },
        computed: {
            media: function () {

            },
            columns: function () {
                var columns = [
                    {
                        field: 'name',
                        label: 'Name',
                    },
                    {
                        field: 'email',
                        label: 'Email',
                        centered: true
                    }
                ]
                if (this.$store.getters.media == 'xl' || this.$store.getters.media == 'lg' || this.$store.getters.media == 'md')
                {
                    columns.unshift({
                        field: 'avatar',
                        label: 'Avatar'
                    });
                    columns.unshift({
                        field: 'id',
                        label: 'ID'
                    });
                }
                
                return columns;
            }
        },
        watch: {
            selected: function (value) {
                this.$emit('user-selected', value);
            }
        }

    }
</script>
