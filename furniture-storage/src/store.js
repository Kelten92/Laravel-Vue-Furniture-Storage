import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    isLoggedIn: !!localStorage.getItem('token'),
    user: 'guest'
  },
  mutations: {
    loginUser (state) {
      state.isLoggedIn = true
    },
    logoutUser (state) {
      state.isLoggedIn = false
    },
    setUser (state, user_data){
      state.user = user_data
    },
    clearUser(state){
      state.user = 'gest'
    }
  },
  actions: {

  },
  getters:{
    isLoggedIn: (state) => state.isLoggedIn,
    user: (state) => state.user,
  }
})
