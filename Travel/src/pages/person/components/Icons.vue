<template>
    <div class="icons">
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe67d;</span>
            </div>
            <p class="icon-desc">优惠券</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe614;</span>
            </div>
            <p class="icon-desc">拿去花</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe643;</span>
            </div>
            <p class="icon-desc">会员服务</p>
        </div>
        <div class="icon">
            <div class='icon-img'>
                <span class="iconfont back-icon">&#xe612;</span>
            </div>
            <p class="icon-desc">我的通知</p>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'PersonIcons',

    }
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
 .icons
    margin-top:2.2rem
    overflow:hidden
    height:0
    padding-top:3%
    padding-bottom:27%
    background:whitesmoke
    .icon
      position:relative
      overflow:hidden
      float:left
      width: 25%
      height:0
      padding-bottom:25%
      background:#fff
      .icon-img
       position:absolute
       top:0
       left:0
       right:0
       bottom:.44rem
       box-sizing:border-box
       padding:.1rem
       text-align:center
       margin-top:.44rem
       .back-icon
        font-size:.8rem
        color:orange
        display:block
        margin:0 auto
        height:100%
        margin-top:0.01rem
      .icon-desc
       position:absolute
       left:0
       right:0
       bottom:.3rem
       height:.44rem
       line-height:.44rem
       text-align:center
       color:$darkTextColor


</style>
