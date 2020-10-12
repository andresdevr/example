import { session } from './modules/session';
import { validations } from './modules/validations';

export const vuex = {
    state: {
        appName: 'ERP'
    },
    getters: {
        appName: state => {
            return state.appName;
        }
    },
    modules: {
        validations,
        session
    },
    strict: process.env.NODE_ENV !== 'production'
};
