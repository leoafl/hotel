<template>
    <div class="list">
        <ul>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe619;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">酒店预订的手机服务怎么收费</p>
                    <p class="item-desc">酒店预订搜索提供的服务费是不收取用户任何费用的，您可以放心使用。手机由于访问网路产生的GPRS流量费用
                    有运营商收取。使用各类上网包月套餐可有效节省费用。不同地区的流量资费存在一定差距，具体流量资费标准请向当地运营商查询。</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe619;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}" >
                    <p class="item-title">什么是GPRS、如何开通GPRS手机上网</p>
                    <p class="item-desc">GPRS是手机上网的一种接入方法。如果你的手机支持GPRS，你可以拨打10086，并按照语音提示来开通服务</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe619;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">酒店的网页版和手机版功能上有什么区别？</p>
                    <p class="item-desc">手机版涵盖网页版的所有核心功能，你可以随时随地查看和网页版相同的实时房间打折信息、状态、超值优惠、入住时刻</p>
                    <div class="iconfont icon-down" v-show="show"  @click="content_show">&#xe600;</div>
                    <div class="iconfont icon-down" v-show="hide" @click="content_hide">&#xe607;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon ">&#xe619;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">酒店直销的返现优惠如何领取&使用？</p>
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
  name: 'UseList',
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
    .item
        overflow:hidden
        display:flex
        .arrow-icon
            color:green
            margin-top:.6rem
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
                color:black
                ellipsis()
            .item-desc
                line-height:.4rem
                color:grey
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
            .icon-down
                width:.4rem
                margin-top:-.4rem
                margin-left:94%
</style>
