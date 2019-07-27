<template>
  <div class="banner">
    <img v-if="first" class='banner-img' src="http://localhost/untitled/Hotel/Public/images/c4.jpg">
    <img v-if="two" class='banner-img' src="http://localhost/untitled/Hotel/Public/images/hotel2.jpg">
    <img v-if="three" class='banner-img' src="http://localhost/untitled/Hotel/Public/img/tx4.jpg">
  </div>
</template>

<script>
export default {
  name: 'DetailBanner',
  data () {
    return {
      first: true,
      two: false,
      three: false
    }
  },
  methods: {
    getId () {
      this.id = this.$route.params.id
      console.log(this.id)
      if (this.id === '0001') {
      }
      if (this.id === '0002') {
        this.first = false
        this.two = true
        this.three = false
      }
      if (this.id === '0003') {
        this.first = false
        this.two = false
        this.three = true
      }
    }
  },
  created () {
    this.getId()
  }
}
</script>

<style lang="stylus" scoped>
  .banner
    overflow :hidden
    width: 100%
    height:0
    padding-bottom :54%
    background #eee
    .banner-img
      width:100%
</style>
