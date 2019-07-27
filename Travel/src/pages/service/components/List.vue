<template>
    <div class="list">
        <ul>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe643;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">会员特权</p>
                    <p class="item-desc">入住次数累计尊享礼品特权 首次即享优惠价 两次享金卡价+10元小吧免单 三次享钻卡价+20元小吧免单 网络预定客人 好评即赠精美礼品</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show($event)">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe61f;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}" >
                    <p class="item-title">会员等级</p>
                    <p class="item-desc">普通会员 金卡会员 钻石会员</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe650;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">会员及OTA退房时间</p>
                    <p class="item-desc">普卡会员（入住1次）退房时间为12:30 金卡会员（入住2次）退房时间为13:30 钻卡会员（入住3次）退房时间为14:30 OTA订单退房时间为12:00 自有渠道订单退房为14:30</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe605;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">百问百答（Q&A）</p>
                    <p class="item-desc">文津会员按次入住升级，入住自动成为美宿会员。三次即可享钻卡价，会员权益不清零不过期，累计次数还有惊喜礼品。 文津会员全国通用，入住次数系统会自动记录，包含钟点房、午夜房、全天房、长包房</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'ServiceList',
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
    content_show: function (e) {
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
    .item
        overflow:hidden
        display:flex
        .arrow-icon
            font-size:1.7rem
            width:1.7rem
            height:1.7rem
            padding:.1rem
        .icon-time
            font-size:1.3rem
            text-align:center
            line-height:1.7rem
        .item_info
            flex:1
            padding:0.5rem .1rem
            min-width:0
            .item-title
                line-height:.54rem
                font-size:.32rem
                ellipsis()
            .item-desc
                line-height:.4rem
                color:#ccc
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
