<template>
    <div>
        <person-header></person-header>
        <person-ucenter></person-ucenter>
        <person-icons></person-icons>
        <person-icont></person-icont>
        <person-recommen></person-recommen>
        <person-swiper></person-swiper>
        <person-footer1></person-footer1>


    </div>
</template>

<script>

import PersonHeader from './components/Header'
import PersonUcenter from './components/Ucenter'
import PersonIcons from './components/Icons'
import PersonIcont from './components/Icont'
import PersonRecommen from './components/Recommen'
import PersonSwiper from './components/Swiper'
import PersonFooter1 from './components/Footer1'

import axios from 'axios'
export default {
  name: 'Person',
  components:{
      PersonHeader,
      PersonUcenter,
      PersonIcons,
      PersonIcont,
      PersonRecommen,
      PersonSwiper,
      PersonFooter1
  },
    methods: {
        getPersonInfo() {
            axios.get('/api/index.json')
                .then(this.getPersonInfoSucc)
        },
        getPersonInfoSucc (res) {
            // console.log(res)
        }
    },
    mounted () {
      this.getPersonInfo()


    }
}
</script>

<style lang="stylus" scoped>

</style>
