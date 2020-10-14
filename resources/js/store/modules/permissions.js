export const permissions = {
    namespaced: false,
    state: () => ({
        permissions: [],
        permissionsError: null
    }),
    mutations: {
        setPermissionsError(state, error) {
            state.permissionsError = error;
        },
        setPermissions(state, permissions) {
            state.permissions = permissions;
        }
    },
    actions: {
        async getPermissions({ commit }) {
            try {
                var promise = await axios.get(route('permissions.index'));
                commit('setPermissions', promise.data.data);
                return {
                    status: promise.status
                }
            } catch (error) {
                commit('setPermissionsError', error.response.data.message);
                return {
                    status: error.response.status,
                    error: error.response.data.message,
                    errors: error.response.data.errors
                };
            }
        },

    },
    getters: {
        permissions: state => {
            return state.permissions;
        }
    }
};

