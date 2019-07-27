<template>
    <div class="question">
        <waitingheader></waitingheader>
        <p class="ques">你可能会遇到以下问题：</p>
        <div class="wentis">
            <span class="wenti">办理入住</span>
            <span class="wenti">无房接待</span>
            <span class="wenti">取消退款</span>
            <span class="wenti">更改日期</span>
            <span class="wenti">未带证件</span>
        </div>
        <ul>
            <li class="item border-bottom" v-for="item in list" :key="item.id">
                <i class="iconfont" @click="change(item.id)" v-show="!item.showdesc">&#xe604;<span>{{item.title}}</span></i>
                <i class="iconfont" @click="change(item.id)" v-show="item.showdesc">&#xe608;<span>{{item.title}}</span></i>
                <p class="desc" v-show="item.showdesc">{{item.desc}}</p>
            </li>
        </ul>
    </div>
</template>

<script>
    import waitingheader from './components/Header.vue'
    export default {
        name: "questions",
        components: {
            waitingheader
        },
        data () {
            return {
                list: [
                    {
                        id: 0,
                        title: "积分有什么作用？会员积分兑换规则？",
                        desc: "会员积分由住房次数，住房价格决定，每住房一次，可获得相应的积分，积累更多的积分可换取相应的优惠，会员积分可兑换优惠券",
                        showdesc: false
                    },
                    {
                        id: 1,
                        title: "当住房体验不好时，该怎么解决？",
                        desc: "您可立刻联系酒店商家给与解决方案，还可联系客服小蜜哦",
                        showdesc: false
                    },
                    {
                        id: 2,
                        title: "怎么才知道预订房间有没有成功？",
                        desc: "当您预订后会出现预订成功页面，同时酒店会在一小时内发送短信通知是否成功预订",
                        showdesc: false
                    },
                    {
                        id: 3,
                        title: "该酒店有哪些房型，质量怎么样",
                        desc: "我们酒店有单人房，双人房，特价房，家庭房等多种房型，质量特别好哦，您可以在评价页面看到哦",
                        showdesc: false
                    },
                    {
                        id: 4,
                        title: "房间可以退定吗？如何退订房间",
                        desc: "在入住前可随时申请退订哦，在我的订单页面取消预订即可，成功后会发送短信通知。",
                        showdesc: false
                    },
                    {
                        id: 5,
                        title: "未带身份证怎么办？",
                        desc: "根据现行法律法规，入住酒店需要提供有效身份证明，可前往附近派出所开具证明办理入住，也可联系商家申请退款。",
                        showdesc: false
                    },
                    {
                        id: 6,
                        title: "怎么修改订单日期？",
                        desc: "在入住前向商家发起申请改签，处理结果已短信为主，请耐心等待。",
                        showdesc: false
                    },
                    {
                        id: 7,
                        title: "怎么对所住房间环境发表评价？",
                        desc: "点击个人中心查看我的订单，点击评价即可进行评价，可上传图片，点亮星星，发表评价。",
                        showdesc: false
                    }
                ]
            }
        },
        methods: {
            change (index) {
                this.list[index].showdesc = !this.list[index].showdesc
            }
        }
    }
</script>

<style lang="stylus" scoped>
    .question
        background #EEEEEE
        width 100%
        height 736px
        .ques
            display block
            padding 10px 5px
            font-size 18px
            letter-spacing 2px
            background #FFFFFF
        .wentis
            display flex
            background #FFFFFF
            .wenti
                flex 1
                text-align center
                border 1px solid
                border-radius 5px
                margin-left 5px
                margin-right 5px
                padding 5px 3px
                font-size 16px
                background wheat
        .item
            display block
            padding 10px 5px
            letter-spacing 1px
            font-size 18px
            background #FFFFFF
            .desc
                font-size 15px
                line-height 1.5
                background wheat
</style>