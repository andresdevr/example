import { session } from './modules/session';
import { validations } from './modules/validations';
import { users } from './modules/users';

export const vuex = {
    state: {
        appName: 'ERP',
        width: 0,
        height: 0
    },
    mutations: {
        setWidth(state, width) {
            state.width = width;
        },
        setHeight(state, height) {
            state.height = height;
        }
    },
    getters: {
        appName: state => {
            return state.appName;
        },
        width: state => {
            return state.width;
        },
        height: state => {
            return state.height;
        }
    },
    modules: {
        validations,
        session,
        users
    },
    strict: process.env.NODE_ENV !== 'production'
};
