import { session } from './modules/session';
import { validations } from './modules/validations';
import { users } from './modules/users';
import { permissions } from './modules/permissions';

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
        },
        media: state => {
            if (state.width >= 1280)
                return 'xl';
            if (state.width >= 1024)
                return 'lg';
            if (state.width >= 768)
                return 'md';
            if (state.width >= 640)
                return 'sm';
            return 'xs';
        }
    },
    modules: {
        validations,
        session,
        users,
        permissions
    },
    strict: process.env.NODE_ENV !== 'production'
};
