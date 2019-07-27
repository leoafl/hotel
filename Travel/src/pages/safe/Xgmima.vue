<template>
    <div class="xgniname">
        <div class="header">
            修改密码
            <router-link to="/safe">
                <div class="iconfont header-back">&#xe624;</div>
            </router-link>
        </div>
        <div class="xg">
            <input class="xginput" type="text" v-model="newmima" placeholder="请输入新密码">
            <button class="xgbtn" @click="xgmima">确定</button>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "xgniname",
        data () {
            return {
                newmima: ""
            }
        },
        methods: {
            xgmima () {
                axios.post('/home/homepage/xgmima', {
                    umima: this.newmima
                })
                    .then((response) => {
                        console.log(response)
                        // location.reload()
                        this.$router.push('/safe')
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
    .header
        position: relative
        overflow:hidden
        height:$headerHeight
        line-height:$headerHeight
        text-align:center
        color:#fff
        font-size:.32rem
        background :$bgColor
        .header-back
            position :absolute
            top:0
            left:0
            width: .64rem
            text-align:center
            font-size:.4rem
            color:#fff
    .xg
        background #f1f2f3
        width 414px
        height 100px
        text-align center
        padding 10px 0px
        .xginput
            width 380px
            height 70px
        .xgbtn
            background wheat
            margin-top 5px
            font-size 19px
            padding 2px 7px
</style>