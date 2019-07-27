// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import fastClick from 'fastclick'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'styles/reset.css'
import 'styles/border.css'
import 'styles/iconfont.css'
import 'swiper/dist/css/swiper.css'
import axios from 'axios'
import qs from 'qs'
import $ from 'jquery'
import Vuex from 'vuex'
import './assets/js/date.js'
import './assets/styles/calendar.css'
// import ElementUI from 'element-ui'
// import store from 'store'
// Vue.use(ElementUI)
Vue.prototype.$http = axios
axios.defaults.withCredentials = true

Vue.config.productionTip = false
fastClick.attach(document.body)
Vue.use(VueAwesomeSwiper)
Vue.use(Vuex)

axios.interceptors.request.use(function (config) {
  if (config.method !== 'get') {
    config.data = qs.stringify(config.data)
  }
  config.headers['Content-Type'] = 'application/x-www-form-urlencoded'
  return config
}, function (error) {
  return Promise.reject(error)
})

router.beforeEach((to, from, next) => {
  if (to.meta.requireAuth) {
    axios.post('/home/Homepage/lanjie', {
    })
      .then((response) => {
        let data = response.data
        if (data.code < 0) {
          setTimeout(function () {
            console.log(data.message)
          }, 3000)
          console.log(data.message)
          alert('请登录')
          if (to.path === '/login') {
            next()
          } else {
            next('/login')
          }
        } else {
          next()
        }
        // console.log(response)
      })
      .catch(function (error) {
        console.log(error)
      })
  } else {
    next()
  }
})

import room_data from '../static/lib/room';

function getFilterArray (array) {
  const res = [];
  const json = {};
  for (let i = 0; i < array.length; i++){
    const _self = array[i];
    if(!json[_self]){
      res.push(_self);
      json[_self] = 1;
    }
  }
  return res;
}
const store = new Vuex.Store({
  state: {
    roomList: []
  },
  getters: {//计算属性
    costTypes: state => {
      const costTypes = state.roomList.map(item => item.costType);
      return getFilterArray(costTypes)
    },
    rtypes: state => {
      const rtypes = state.roomList.map(item => item.rtype);
      return getFilterArray(rtypes)
    }
  },
  mutations: {//操作计算
    setRoomList (state, data) {
      state.roomList = data;
    }

  },
  actions: {//动作触发 通过commit提交
    // 请求房间列表
    getRoomList (context) {
      // 真实环境通过 ajax 获取，这里用异步模拟
      setTimeout(() => {
        context.commit('setRoomList', room_data);
      }, 500);
    }
  }
});
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
