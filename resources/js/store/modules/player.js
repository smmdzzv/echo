import {shuffle} from "../../util/array";

const state = {
    originalPlaylist: [],
    playlist: [],
    activeSong: null,
    repeatState: 'none'
};
const getters = {
    PLAYLIST: state => {
        return state.playlist;
    },
    ACTIVE_SONG: state => {
        return state.activeSong;
    },
    REPEAT_STATE: state => {
        return state.repeatState;
    }
};
const mutations = {
    SET_ACTIVE_SONG: (state, payload) => {
        state.activeSong = payload;
    },
    UPDATE_PLAYLIST: (state, payload) => {
        state.playlist = payload;
    },
    SHUFFLE: (state, _) => {
        state.originalPlaylist = state.playlist.slice();
        state.playlist = shuffle(state.playlist.slice());
    },
    RESTORE_ORDER: (state, _) => {
        state.playlist = state.originalPlaylist.slice();
        state.originalPlaylist = [];
    },
    SET_REPEAT_STATE: (state, payload) => {
        state.repeatState = payload;
    },
    PLAY_NEXT: (state, _) => {
        let index = state.playlist.map(song => song.id).indexOf(state.activeSong.id) + 1;
        if (index < state.playlist.length)
            state.activeSong = state.playlist[index];
        else state.activeSong = state.playlist[0];
    },
    PLAY_PREV: (state, _) => {
        let index = state.playlist.map(song => song.id).indexOf(state.activeSong.id) - 1;
        if (index >= 0)
            state.activeSong = state.playlist[index];
        else state.activeSong = state.playlist[state.playlist.length - 1];
    }
};
const actions = {};

export default {
    state,
    getters,
    mutations,
    actions
};
