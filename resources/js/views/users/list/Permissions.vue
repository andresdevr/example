<template>
    <vue-scroll :ops="scrollOptions"> 
        <b-table :data="processedPermissions" hoverable focusable>
            <b-table-column field="id" label="ID" width="40" numeric v-slot="props">
            {{ props.row.id }}
            </b-table-column>

            <b-table-column field="first_name" label="First Name" v-slot="props">
                {{ props.row.display }}
            </b-table-column>

            <b-table-column label="Estado" v-slot="props">
                <b-button type="is-success is-light" icon-left="lock-open" v-show="props.row.hasPermission" @click="togglePermission(props.row.id)">
                    Otorgado
                </b-button>
                <b-button type="is-danger is-light" icon-left="lock" v-show="!props.row.hasPermission" @click="togglePermission(props.row.id)">
                    Denegado
                </b-button>

            </b-table-column>

        </b-table>
    </vue-scroll>
</template>

<script>
export default {
    props: ['user'],
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
        permissions: function () {
            return this.$store.getters.permissions;
        },
        userPermissions: function () {
            return this.user.permissions;
        },
        processedPermissions: function () {
            return _.map(this.permissions, (permission) => {
                var index = _.findIndex(this.userPermissions, (userPermission) => {
                    return permission.id == userPermission.id;
                });
                permission.hasPermission = index < 0 ? false : true;
                return permission;
            });
        }
    },
    methods: {
        togglePermission: function (id) {
            this.$store.dispatch('togglePermission', { userId: this.user.id, permissionId: id });
        }
    }
}
</script>

<style>

</style>