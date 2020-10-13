import Vue from 'vue';
import VueCookies from 'vue-cookies';
import { router } from '../../app';

Vue.use(VueCookies);

export const session = {
    namespaced: false,
    state: () => ({
        sessionError: null,
        id: null,
        name: null,
        email: null,
        avatar: null,
        permissions: null
    }),
    mutations: {
        cleanSessionError(state) {
            state.sessionError = null;
        },
        setSessionError(state, error) {
            state.sessionError = error;
        },
        setSession(state, user) {
            state.id = user.data.id;
            state.name = user.data.name;
            state.email = user.data.email;
            state.avatar = user.data.avatar;
            Vue.$cookies.set('session', {
                id: state.id,
                name: state.name,
                email: state.email,
                avatar: state.avatar
            }, '120MIN');

        },
        clearSession(state) {
            state.id = null;
            state.name = null;
            state.email = null;
            state.avatar = null;
            Vue.$cookies.remove('session');
            router.push({ name: 'login' });
        }
    },
    actions: {
        async login({ commit }, user) {
            commit('cleanSessionError');
            try {
                var promise = await axios.post(route('login'), user);
                commit('setSession', promise.data);
                return {
                    status: promise.status
                };
            }
            catch (error) {
                commit('setSessionError', error.response.data.message);
                return {
                    status: error.response.status,
                    error: error.response.data.message,
                    errors: error.response.data.errors
                };
            }
        },
        async logout({ commit }) {
            try {
                var promise = await axios.post(route('logout'));
                commit('clearSession');
                return {
                    status: promise.status
                };
            }
            catch (error) {
                commit('setSessionError', error.response.data.message);
                return {
                    status: error.response.status,
                    error: error.response.data.message,
                    errors: error.response.data.errors
                };
            }
        }
    },
    getters: {
        userId: state => {
            return state.id;
        },
        sessionError: state => {
            return state.sessionError;
        },
        username: state => {
            return state.name;
        },
        email: state => {
            return state.email;
        },
        avatar: state => {

        }
    }
};

