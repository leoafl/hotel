<template>
    <div class="list">
        <ul>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">非Wi-Fi环境下省流量模式</p>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>

            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">网络诊断</p>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>

            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">清空缓存</p>
                    <div class="iconfont icon-down">2M</div>
                </div>
            </li>

            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">消息提醒</p>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>

        </ul>
    </div>
</template>

<script>
export default {
  name: 'SystemList',
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
            color:$bgColor
        .item_info
            flex:1
            padding:0.5rem .1rem
            min-width:0
            .item-title
                margin-left:.3rem
                line-height:.54rem
                font-size:.38rem
                ellipsis()
            .item-desc
                line-height:.4rem
                color:black
                ellipsis()
            .icon-down
                width:.4rem
                margin-top:-.4rem
                margin-left:94%
        .item_show
            flex:1
            padding:0.5rem .1rem
            .item-title
                line-height:.54rem
                font-size:.32rem
            .item-desc
                line-height:.4rem
                color:#ccc
            .icon-down
                width:.4rem
                margin-top:-.4rem
                margin-left:94%
</style>
