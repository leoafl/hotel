<template>
    <div class="header">
        <div v-show="showHint" class="hint_word">
            <span>{{errHint}}</span>
        </div>
        <div class="header-left">
            <div class="iconfont back-icon" @click="logout">&#xe624;</div>
        </div>
        <div class="header-input">
            <router-link to="/search">
                <span class="iconfont">&#xe6ac;</span>
                输入入住价格
            </router-link>
        </div>
        <router-link to="/city">
            <div class="header-right">
                {{this.city}}
                <span class="iconfont arrow-icon">&#xe60b;</span>
            </div>
        </router-link>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'HomeHeader',
        props: {
            city: String
        },
        data() {
            return {
                showHint: false,
                errHint: '密码错误'
            }
        },
        methods: {
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

        .header-input
            flex: 1
            /*width:200px*/
            margin-top: .12rem
            padding-left: .2rem
            height: .64rem
            line-height: .64rem
            margin-left: .2rem
            background: #fff
            border-radius: .1rem
            color: #ccc

        .header-right
            width: 1.24rem
            float: right
            text-align: center
            color: #fff

            .arrow-icon
                font-size: .24rem
                margin-left: -.04rem

        .hint_word
            text-align: center
            color: white
            font-size: .23rem
            background: rgba(7, 17, 27, 0.66)
            z-index: 4
            width: 1.75rem
            height: 1rem
            line-height: 1rem
            position: absolute
            border-radius: 6%
            margin-top: 50%
            margin-left: -.875rem
            left: 50%
</style>
