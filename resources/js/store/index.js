import Vue from 'vue';
import Vuex from 'vuex';
import auth from './modules/auth';
import ui from "./modules/ui";
import player from "./modules/player";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {},
    getters: {},
    mutations: {},
    actions: {},
    modules: {
        auth,
        ui,
        player
    }
});
