<template>
    <div>
        <div v-if="first" class="list" id="first">
            <ul>
                <li class="all border-bottom">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe651;</div>
                        <div class="list-item">客房免费升级</div>
                    </div>
                </li>
                <li class="all border-bottom ">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe9d7;</div>
                        <div class="item-title">权益介绍</div>
                    </div>
                    <div class="item-desc">钻卡会员不满意预订房型，每月可享一次免费升级礼遇。视酒店房态情况而定。</div>
                </li>
                <li class="all border-bottom">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe604;</div>
                        <div class="item-title">使用指南</div>
                    </div>
                    <div class="item-desc">
                        成为VIP会员后，您将有机会享受客房免费升级服务
                    </div>
                </li>
            </ul>
        </div>
        <div v-if="two" class="list" id="two">
            <ul>
                <li class="all border-bottom">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe651;</div>
                        <div class="list-item">会员连住 住10免1</div>
                    </div>
                </li>
                <li class="all border-bottom ">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe9d7;</div>
                        <div class="item-title">权益介绍</div>
                    </div>
                    <div class="item-desc">钻卡会员连续住10间免1间房费。 5000积分免费兑换酒店最高级房型。</div>
                </li>
                <li class="all border-bottom">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe604;</div>
                        <div class="item-title">使用指南</div>
                    </div>
                    <div class="item-desc">
                        成为钻石会员后，您将有机会享受住10送1服务
                    </div>
                </li>
            </ul>
        </div>
        <div v-if="three" class="list" id="three">
            <ul>
                <li class="all border-bottom">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe651;</div>
                        <div class="list-item">生日节日礼券大放送</div>
                    </div>
                </li>
                <li class="all border-bottom ">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe9d7;</div>
                        <div class="item-title">权益介绍</div>
                    </div>
                    <div class="item-desc">金卡、钻卡会员节假日和生日入住酒店，即送电子现金券。更有福利大抽奖。</div>
                </li>
                <li class="all border-bottom">
                    <div class="item-header">
                        <div class="iconfont icon">&#xe604;</div>
                        <div class="item-title">使用指南</div>
                    </div>
                    <div class="item-desc">
                        成为金卡、钻石会员后，您在节假日或者生日时入住酒店，我们会准备好礼品
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
  name: 'DetailList',
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

<style scoped lang="stylus">
 @import '~styles/varibles.styl'
    .list
        overflow :hidden
        height:0
        margin: 0 rem auto
        padding-bottom:150%
        border :.05rem solid $bgColor
        font-family:songti
        .all
            .item-header
                display :table
                .icon
                    display :table-cell
                    color :#25a4bb
                    font-size:0.7rem
                    padding:0.2rem
                .list-item
                    font-size:.5rem
                    margin-top:.3rem
                .item-title
                    font-size:.4rem
            .item-desc
                margin-left:-2rem
                margin: 0 auto
                font-size:.4rem
                text-indent :.8rem
                padding:.3rem
                line-height :0.8rem
</style>
