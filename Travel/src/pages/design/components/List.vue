<template>
    <div class="list">
        <div class="title">1</div>
        <ul>
            <li class="item border-bottom">
                <div class='iconfont input-img-content'>&#xe651;</div>
            </li>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">使用指南</p>
                    <router-link to="/use">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">酒店服务</p>
                    <router-link to="/service">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">客服电话：95117</p>
                    <router-link to="">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">举报邮箱：kongyan@qunar.com</p>
                    <router-link to="">
                    <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">协议声明</p>
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
  name: 'DesignList',
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
          margin-left:45%
          font-size:2rem
          color:$bgColor
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
                line-height:.54rem
                font-size:.33rem
                margin-left:.3rem
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
