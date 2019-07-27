<template>
    <div class="list">
        <div class="title">1</div>
        <ul>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe73b;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">微信</p>
                    <router-link to="">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time1">&#xe65e;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">QQ</p>
                    <router-link to="">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time1">&#xe647;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">支付宝</p>
                    <router-link to="">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time3">&#xe786;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">淘宝</p>
                    <router-link to="">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <div class="title">1</div>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'RelationList',
  props: {
    list: Array
  },
  data () {
    return {
      isFirst: true,
      isShow: false,
      show: true,
      hide: false
    }
  },
  methods: {
    content_show: function () {
      this.isFirst = false
      this.isShow = true
      this.show = false
      this.hide = true
    },
    content_hide: function () {
      this.isFirst = true
      this.isShow = false
      this.show = true
      this.hide = false
    }
  }
}
</script>

<style lang="stylus" scoped>
    @import "~styles/varibles.styl"
    @import "~styles/mixins.styl"
    .list
        width:90%
        margin:auto
        margin-top:0.5rem
        border-radius:0.1rem
     .title
        line-height:.2rem
        background:#eee
        text-indent:.1rem
        color:#eee
     .item
        overflow:hidden
        display:flex
        .input-img-content
          float:left
          height:1.7rem
          border-radius:50%
        .icon-time
            margin-left:.3rem
            margin-top:.2rem
            height:1rem
            font-size:1rem
            text-align:center
            line-height:1rem
            color:green
        .icon-time1
             margin-left:.3rem
             margin-top:.2rem
             height:1rem
             font-size:1rem
             text-align:center
             line-height:1rem
             color:#00ccff
        .icon-time3
             margin-left:.3rem
             margin-top:.2rem
             height:1rem
             font-size:1rem
             text-aligin:center
             line-height:1rem
             color:#ff6633
        .item_info
            flex:1
            padding:0.5rem .1rem
            min-width:0
            .item-title
                line-height:.54rem
                font-size:.32rem
                ellipsis()
            .icon-down
                width:.4rem
                margin-top:-.4rem
                margin-left:94%




</style>
