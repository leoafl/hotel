<template>
    <div class="ucenter">
        <div class="ucenter-left">

        </div>
        <div class="ucenter-input">
            <div class="input-img">
                <img class='input-img-content' src='https://qcommons.qunar.com/headshot/headshotsById/305378628.png'/>
                <div class="input-font-content">
                    <p class='font1'>还没有取名字</p>
                    <p class='font2'>会员中心> 5会员积分></p>
                </div>
                <div class="input-font-icon">
                    <span class="iconfont back-icon">&#xe613;</span>
                    <p class='font'>签到</p>
                </div>

            </div>
            <div class="input-icon">
                <div class="icon">
                    <div class='icon-img'>
                        <span class="iconfont back-icon">&#xe611;</span>
                    </div>
                    <p class="icon-desc">全部订单</p>
                </div>
                <div class="icon">
                    <div class='icon-img'>
                        <span class="iconfont back-icon">&#xe644;</span>
                    </div>
                    <p class="icon-desc">个人账户</p>
                </div>
                <div class="icon">
                    <div class='icon-img'>
                        <span class="iconfont back-icon">&#xe608;</span>
                    </div>
                    <p class="icon-desc">待付款</p>
                </div>
                <div class="icon">
                    <div class='icon-img'>
                        <span class="iconfont back-icon">&#xe62d;</span>
                    </div>
                    <p class="icon-desc">待点评</p>
                </div>
                <div class="icon">
                    <div class='icon-img'>
                        <span class="iconfont back-icon">&#xe64c;</span>
                    </div>
                    <p class="icon-desc">退款单</p>
                </div>
            </div>
            <div class="line"></div>

        </div>
        <div class="ucenter-right"></div>
    </div>
</template>

<script>
    export default {
        name: 'PersonUcenter'
    }
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
    .ucenter
        display: flex
        height: 2rem
        background: $bgColor
        color: #fff

        .ucenter-left
            margin-top: .19rem
            width: .1rem
            margin-left: .2rem

            .back-icon
                font-size: .5rem

        .ucenter-input
            position: relative
            flex: 1
            background: #fff
            height: 4rem
            line-height: .64rem
            margin-top: .98rem
            margin-right: .2rem
            border-radius: .1rem

            .input-img
                width: 85%
                height: 1.4rem
                margin-left: 0.5rem
                margin-top: .2rem
                top: 0
                left: 0
                right: 0
                bottom: .44rem
                background: #fff

                .input-img-content
                    float: left
                    height: 100%
                    border-radius: 50%

                .input-font-content
                    float: left
                    background: #fff
                    width: 4.5rem
                    height: 1.4rem

                    .font1
                        padding-top: .1rem
                        margin-left: .4rem
                        font-size: .4rem
                        color: black

                    .font2
                        font-size: .1rem
                        color: grey
                        margin-left: .4rem

                .input-font-icon
                    position: absolute
                    right: 0
                    margin-top: .4rem
                    width: 1.5rem
                    height: .6rem
                    border-radius: .2rem
                    background: #FF8800

                    .back-icon
                        color: #FFDD55
                        float: left
                        margin-left: .2rem

                    .font
                        color: #FFDD55
                        margin-left: .7rem

            .input-icon
                width: 100%
                height: 1.3rem
                background: #fff
                margin-top: .3rem

                .icon
                    position: relative
                    overflow: hidden
                    float: left
                    width: 20%
                    padding-bottom: 15%
                    background: #fff

                    .icon-img
                        background: #fff
                        position: absolute
                        top: 0
                        left: 0
                        right: 0
                        box-sizing: border-box
                        text-align: center

                        .back-icon
                            font-size: .6rem
                            color: $bgColor
                            display: block
                            margin: 0 auto
                            height: 100%

                    .icon-desc
                        position: absolute
                        left: 0
                        right: 0
                        top: .64rem
                        line-height: .54rem
                        text-align: center
                        color: $darkTextColor

        .line
            line-height: 0
            border: .1rem solid #ddd
            text-align: center

        .font3
            padding-left: 0.8rem
            color: black

            .back-icon1
                font-size: .4rem
                color: orange
                display: block
                margin: 0 auto
                height: 100%
                float: left


        .ucenter-right
            margin-top: .19rem
            float: right
            text-align: center

            margin-right:.2rem
                .back-icon
                    font-size: .5rem

</style>
