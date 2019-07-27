<template>
    <div class="icont">
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe60e;</span>
            </div>
            <p class="icon-desc">我的收藏</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe663;</span>
            </div>
            <p class="icon-desc">我的浏览</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe646;</span>
            </div>
            <p class="icon-desc">我的点评</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe7b4;</span>
            </div>
            <p class="icon-desc">微信关注</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe66c;</span>
            </div>
            <p class="icon-desc">我的发票</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe644;</span>
            </div>
            <p class="icon-desc">常用旅客</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe613;</span>
            </div>
            <p class="icon-desc">自助服务</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe612;</span>
            </div>
            <p class="icon-desc">期待更多</p>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'PersonIcont',

    }
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
   .icont
    overflow:hidden
    height:0
    padding-bottom:50%
    .icon
     position:relative
     overflow:hidden
     float:left
     width: 25%
     padding-bottom:25%
     background:#fff
     .icon-img
      position:absolute
      top:0
      left:0
      right:0
      bottom:.44rem
      margin-top:.3rem
      box-sizing:border-box
      text-align:center
      .back-icon
       font-size:.8rem
       color:grey
       display:block
       margin:0 auto
       height:100%
       margin-top:.22rem
     .icon-desc
       position:absolute
       left:0
       right:0
       bottom:0
       height:.44rem
       line-height:.44rem
       text-align:center
       color:$darkTextColor

</style>