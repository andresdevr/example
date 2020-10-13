<template>
    <b-table
        :data="data"
        :columns="columns"
        :selected.sync="selected"
        focusable>
    </b-table>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                selected: {},
                columns: [
                    {
                        field: 'id',
                        label: 'ID',
                        width: '40',
                        numeric: true
                    },
                    {
                        field: 'avatar',
                        label: 'Avatar',
                    },
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
            }
        },
        watch: {
            selected: function (value) {
                this.$emit('user-selected', value);
            }
        }

    }
</script>
