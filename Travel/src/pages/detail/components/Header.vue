<template>
  <div class="header">
      <router-link tag="div" to="/"  class="header-abs" v-show="showAbs">
        <span class="iconfont header-abs-back">&#xe624;</span>
      </router-link>
  </div>
</template>

<script>
export default {
  name: 'DetailHeader',
  data () {
    return {
      showAbs: true
    }
  },
  computed: {},
  methods: {}
}
</script>

<style scoped lang="stylus">
 @import '~styles/varibles.styl';

    .header-abs
        position absolute
        left .2rem
        top .2rem
        width .8rem
        height .8rem
        line-height .8rem
        border-radius .4rem
        background rgba(0,0,0,.8)
        text-align  center
        .header-abs-back
            color #fff
            font-size .4rem
</style>
