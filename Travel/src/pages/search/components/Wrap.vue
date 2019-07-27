<template>
    <div class="wrap-heard">
        <ul class="wrap-group" style="-webkit-transform:translate3d(0px, 0, 0);transform:translate3d(0px, 0, 0);-webkit-transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;">
            <router-link tag="li" to="apartment/10" class="wrap-item">
                <img src="https://gw.alicdn.com/tfs/TB1p74WpVzqK1RjSZFvXXcB7VXa-120-120.png" class="wrap-item-img" alt="">
                <span>酒店套间</span>
            </router-link>
            <router-link tag="li" to="apartment/2" class="wrap-item">
                <img src="https://gw.alicdn.com/tfs/TB1iMODFeuSBuNjy1XcXXcYjFXa-120-120.png" class="wrap-item-img" alt="">
                <span>经济实惠</span>
            </router-link>
            <router-link tag="li" to="apartment/1" class="wrap-item">
                <img src="https://gw.alicdn.com/tfs/TB13w5EFh9YBuNjy0FfXXXIsVXa-120-120.png" class="wrap-item-img" alt="">
                <span>特价房间</span>
            </router-link>
            <router-link tag="li" to="apartment/7" class="wrap-item">
                <img src="https://gw.alicdn.com/tfs/TB14UWcFbGYBuNjy0FoXXciBFXa-120-120.png" class="wrap-item-img" alt="">
                <span>今日推荐</span>
            </router-link>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "Wrap"
    }
</script>

<style lang="stylus" scoped>
      .wrap-heard
          width 100%
          height 1.8rem
          background #009688
          .wrap-group
              background #fff
              padding-top 20px
              height: 74px;
              position: relative;
              display: flex;
          .wrap-item{
                width 25%
                text-align: center;
                position: relative;
                border-bottom 100%
            }
          .wrap-item span{
              display inline-block
              height 14px
              width 60px
              font-size 14px
          }
      .wrap-item-img {
          text-align: center;
          display inline-block
          width 40px
          height: 40px;
      }

</style>