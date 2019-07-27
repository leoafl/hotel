<template>
    <div class="header">
        <div class="header-left">
            <router-link to="./">
                <div class="iconfont back-icon">&#xe624;</div>
            </router-link>
        </div>
        <div class="header-right">文津酒店智能客服</div>
    </div>
</template>

<script>

    export default {
        name: 'OnlineHeader',
        props: {
            city: String
        }
    }
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
    .header
        position: fixed
        left: 0
        top: 0
        width: 100%
        z-index: 2
        display: flex
        line-height: $headerHeight
        background: $bgColor
        color: #fff

        .header-left
            width: .64rem
            float: left

            .back-icon
                text-align: center
                font-size: .4rem
                color: #fff
        .header-right
            /*text-align:center*/
            margin:0 auto
            font-size:.4rem
            color:#fff
</style>
