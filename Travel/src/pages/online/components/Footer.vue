<template>
    <div class="footer">
        <ul>
            <li>
                <router-link to="/">
                    <div class="footer-icon">
                        <div class="iconfont arrow-icon">&#xe64f;</div>
                        <div class="icon-name">首页</div>
                    </div>
                </router-link>
            </li>
            <li>
                <router-link to="/service">
                    <div class="footer-icon">
                        <div class="iconfont arrow-icon">&#xeb9d;</div>
                        <div class="icon-name">酒店服务</div>
                    </div>
                </router-link>
            </li>
            <li>
                <router-link to="/">
                    <div class="footer-icon">
                        <div class="iconfont arrow-icon">&#xe655;</div>
                        <div class="icon-name">我的订单</div>
                    </div>
                </router-link>
            </li>
            <li>
                <router-link to="/online">
                    <div class="footer-icon">
                        <div class="iconfont arrow-icon">&#xeb9d;</div>
                        <div class="icon-name">智能客服</div>
                    </div>
                </router-link>
            </li>
            <li>
                <router-link to="/person">
                    <div class="footer-icon">
                        <div class="iconfont arrow-icon">&#xe691;</div>
                        <div class="icon-name">我的</div>
                    </div>
                </router-link>
            </li>
        </ul>
    </div>
</template>
<script>

    export default {
        name: 'OnlineFooter'
    }
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
    .footer
        position: fixed
        left: 0
        bottom: 0
        width:100%
        z-index: 2
        display: flex
        line-height:$headerHeight
        background:$bgColor
        color:#fff
        ul
            width:100%
            height:.9rem
            display:inline
            white-space:nowrap
            li
                position :relative
                list-style: none
                display: inline-block
                width:20%
                float: left
                text-align:center
                .footer-icon
                    color:#fff
                    margin-top:-0.15rem
                    .icon-name
                        margin-top:-0.5rem
</style>
