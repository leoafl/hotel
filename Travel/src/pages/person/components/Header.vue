<template>
    <div class="header">
        <div class="header-left">
            <router-link to="/revise">
            <span class="iconfont back-icon">&#xe60d;</span>
        </router-link>
        </div>
        <div class="header-input"><span class="iconfont back-icon">&#xe661;</span></div>
        <div class="header-right"><span class="iconfont back-icon">&#xe639;</span></div>
    </div>
</template>

<script>
    export default {
        name: 'PersonHeader'
    }
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
    .header
        position:fixed
        z-index:4
        width:100%
        display:flex
        height:.86rem
        background:$bgColor
        color:#fff
        .header-left
          margin-top:.19rem
          width:.64rem
          margin-left:.2rem
          .back-icon
            font-size:.5rem
            color:#fff
        .header-input
          flex:1
          height:.64rem
          line-height:.64rem
          margin-top:.12rem
          margin-left:.2rem
          border-radius:.1rem
          .back-icon
            font-size:.4rem
        .header-right
          margin-top:.19rem
          float:right
          text-align:center
          margin-right:.2rem
          .back-icon
            font-size:.5rem
</style>

