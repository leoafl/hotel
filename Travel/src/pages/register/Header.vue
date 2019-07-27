<template>
  <div class="header">
      <router-link tag="div" to="/login"  class="header-abs" v-show="showAbs">
        <span class="iconfont header-abs-back">&#xe624;</span>
      </router-link>
  </div>
</template>

<script>
export default {
  name: 'RegisterHeader',
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
        background :grey
        text-align  center
        z-index :2
        .header-abs-back
            color #fff
            font-size .4rem
</style>
