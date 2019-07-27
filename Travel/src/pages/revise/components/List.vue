<template>
    <div class="list">
        <div class="title">1</div>
        <ul>
            <li class="item border-bottom">
                <img class='input-img-content' src='https://qcommons.qunar.com/headshot/headshotsById/305378628.png'/>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">还没有取名字</p>
                    <p class="item-desc">手机号：18255649029</p>
                    <router-link to="/message">
                        <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe653;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">账户安全</p>
                    <router-link to="/safe">
                        <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe646;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">账号关联</p>
                    <router-link to="/relation">
                        <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe644;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">实名认证</p>
                    <router-link to="">
                        <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe662;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">系统设置</p>
                    <router-link to="/system">
                        <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <div class="iconfont arrow-icon icon-time">&#xe651;</div>
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">关于酒店详情</p>
                    <router-link to="/design">
                        <div class="iconfont icon-down">&#xe60c;</div>
                    </router-link>
                </div>
            </li>
            <li class="item border-bottom">
                <!--<div class="iconfont arrow-icon icon-time">&#xe651;</div>-->
                <!--<div v-bind:class="{item_info:isFirst,item_show:isShow}">-->
                <!--<p class="item-title">关于酒店详情</p>-->
                <!--<router-link to="/design">-->
                <!--<div class="iconfont icon-down">&#xe60c;</div>-->
                <!--</router-link>-->
                <!--</div>-->
                <button class="login-out" @click="logout">退出登录</button>
            </li>
            <!--<div class="title">1</div>-->
        </ul>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: 'ReviseList',
        props: {
            list: Array
        },
        data() {
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
            },
            //退出
            logout() {
                axios.post('/home/Login/logout', {})
                    .then((response) => {
                        let data = response.data
                        this.showHint = true
                        this.errHint = data.message
                        let _this = this
                        if (data.code < 0) {
                        } else {
                            setTimeout(function () {
                                _this.showHint = false
                                _this.$router.push({path: '/login'})
                            }, 1000)
                        }
                        console.log(response)
                    })
                    .catch(function (error) {
                        console.log(error)
                    })
            }
        }
    }
</script>

<style lang="stylus" scoped>
    @import "~styles/varibles.styl"
    @import "~styles/mixins.styl"
    .list
        width: 90%
        margin: auto
        margin-top: 0.5rem
        border-radius: 0.1rem

    .title
        line-height: .2rem
        background: #eee
        text-indent: .1rem
        color: #eee

    .item
        overflow: hidden
        display: flex

        .input-img-content
            float: left
            height: 1.7rem
            border-radius: 50%

        .icon-time
            margin-left: .3rem
            margin-top: .2rem
            height: 1rem
            font-size: 1rem
            text-align: center
            line-height: 1rem
            color: $bgColor

        .item_info
            flex: 1
            padding: 0.5rem .1rem
            min-width: 0

            .item-title
                line-height: .54rem
                font-size: .32rem
                ellipsis()

            .item-desc
                line-height: .4rem
                color: black
                ellipsis()

            .icon-down
                width: .4rem
                margin-top: -.4rem
                margin-left: 94%

        .item_show
            flex: 1
            padding: 0.5rem .1rem

            .item-title
                line-height: .54rem
                font-size: .32rem

            .item-desc
                line-height: .4rem
                color: #ccc

            .icon-down
                width: .4rem
                margin-top: -.4rem
                margin-left: 94%

        .login-out
            width: 10rem
            height: 1rem
            margin-top .8rem
            color: #fff
            background: #009688
</style>
