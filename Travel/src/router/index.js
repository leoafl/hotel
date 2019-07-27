import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/pages/home/Home'
import City from '@/pages/city/City'
import Login from '@/pages/login/Login'
import Register from '@/pages/register/Register'
import Service from '@/pages/service/Service'
import Detail from '@/pages/detail/Detail'
import Lose from '@/pages/lose/Lose'
import AdminLogin from '@/pages/login/AdminLogin'
import Person from '@/pages/person/Person'
import Revise from '@/pages/revise/Revise'
import Message from '@/pages/message/Message'
import Safe from '@/pages/safe/Safe'
import Relation from '@/pages/relation/Relation'
import System from '@/pages/system/System'
import Design from '@/pages/design/Design'
import Use from '@/pages/use/Use'
//客服
import Online from '@/pages/online/Online'
//预定
import search from '@/pages/search/Search'
//房间
import Room from '@/pages/room/Room'

//修改昵称
import xgniname from '@/pages/message/Xgniname'
//修改密码
import xgmima from '@/pages/safe/Xgmima'
//引入订单
import dingdan from '../all/dingdan/Dingdan.vue'
import daipj from '../all/dingdan/Daipj.vue'
import waiting from '../all/waiting/Waiting.vue'
import questions from '../all/waiting/Questions.vue'
import dianping from '../all/waiting/Dianping.vue'


Vue.use(Router)
export default new Router({
  routes: [{
    path: '/',
    name: 'Home',
    meta: {
      requireAuth: true
    },
    component: Home
  }, {
    path: '/city',
    name: 'City',
    meta: {
      requireAuth: true
    },
    component: City
  }, {
    path: '/login',
    name: 'Login',
    component: Login
  }, {
    path: '/register',
    name: 'Register',
    component: Register
  }, {
    path: '/service',
    name: 'Service',
    meta: {
      requireAuth: true
    },
    component: Service
  },
    {
      path: '/search',
      name: 'search',
      component: search
    },{
      path: '/room',
      name: 'room',
      component: Room
    },{
      path: '/apartment/:id',
      meta: {
        title: '房间详情'
      },
      component: (resolve) => require(['../pages/room/components/apartment'], resolve)
    },
    {
      path: '/apartment/:id/reserve',
      meta: {
        title: '房间详情'
      },
      component: (resolve) => require(['../pages/room/components/reserve'], resolve)
    },{
    path: '/detail/:id',
    name: 'Detail',
    meta: {
      requireAuth: true
    },
    component: Detail
  }, {
    path: '/lose',
    name: 'Lose',
    component: Lose
  }, {
    path: '/adminLogin',
    name: 'AdminLogin',
    component: AdminLogin
  },{
    path: '/person',
    name: 'Person',
    component: Person
  },{
    path: '/revise',
    name: 'Revise',
    component: Revise
  },{
    path: '/message',
    name: 'Message',
    component: Message
  },{
    path: '/safe',
    name: 'Safe',
    component: Safe
  },{
    path: '/relation',
    name: 'Relation',
    component: Relation
  },{
    path: '/system',
    name: 'System',
    component: System
  },{
    path: '/design',
    name: 'Design',
    component: Design
  },{
    path: '/use',
    name: 'Use',
    component: Use
  },{
    path: '/online',
    name: 'Online',
    component: Online
  },{
      path: '/xgniname',
      name: 'xgniname',
      component: xgniname
    },{
      path: '/xgmima',
      name: 'xgmima',
      component: xgmima
    },{
      path: '/dingdan',
      name: 'dingdan',
      component: dingdan
    },{
      path: '/daipj',
      name: 'daipj',
      component: daipj
    },{
      path: '/waiting',
      name: 'waiting',
      component: waiting
    },{
      path: '/questions',
      name: 'questions',
      component: questions
    },{
      path: '/dianping',
      name: 'dianping',
      component: dianping
    }
  //   {
  //   path: '/search',
  //   name: 'Search',
  //   component: Search
  // },{
  //   path: '/room',
  //   name: 'Room',
  //   component: Room
  // }
  ]
})
