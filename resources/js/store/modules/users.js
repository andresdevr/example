export const users = {
    namespaced: false,
    state: () => ({
        users: [],
        usersError: null
    }),
    mutations: {
        setUsersError(state, error) {
            state.usersError = error;
        },
        setUsers(state, users) {
            state.users = users;
        },
        addUser(state, user) {
            state.users.push(user);
        },
        updateUser(state, data) {
            var user = _.find(state.users, (user) => {
                return data.id == user.id;
            });
            Object.assign(user, data);
        }
    },
    actions: {
        async getUsers({ commit }) {
            try {
                var promise = await axios.get(route('users.index'));
                commit('setUsers', promise.data.data);
                return {
                    status: promise.status
                }
            } catch (error) {
                commit('setUsersError', error.response.data.message);
                return {
                    status: error.response.status,
                    error: error.response.data.message,
                    errors: error.response.data.errors
                };
            }
        },
        async createUser({ commit }, user) {
            try {
                var promise = await axios.post(route('users.store'), user);
                commit('addUser', promise.data.data);
                return {
                    status: promise.status
                }
            } catch (error) {
                commit('setUsersError', error.response.data.message);
                return {
                    status: error.response.status,
                    error: error.response.data.message,
                    errors: error.response.data.errors
                };
            }
        },
        async updateUser({ commit }, user) {
            try {
                var promise = await axios.put(route('users.update', { id: user.id }), user);
                commit('updateUser', promise.data.data);
                return {
                    status: promise.status
                }
            } catch (error) {
                commit('setUsersError', promise.data.data);
                return {
                    status: error.response.status,
                    error: error.response.data.message,
                    errors: error.response.data.errors
                };
            }
        }
    },
    getters: {
        users: state => {
            return state.users;
        }
    }
};

