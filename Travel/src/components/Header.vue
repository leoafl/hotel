<template>
    <div class="dingdanheader">
        <div class="top">
            <span class="iconfont mydd">我的订单&#xe634;</span>
            <router-link to="/">
                <div class="iconfont header-back">&#xe624;</div>
            </router-link>
            <router-link to="/questions" tag="span" class="ddsearch">帮助</router-link>
            <!--<span class="ddsearch">订单查询</span>-->
            <!--<span @click="tosearch" class="ddsearch">订单查询</span>-->
        </div>
        <!--<div v-show="search" class="search">-->
            <!--<input v-model="searchid" autofocus="autofocus" class="search-input" placeholder="输入订单号进行查找">-->
        <!--</div>-->
        <div class="footer fixed">
            <ul>
                <router-link tag="li" to="/dingdan"><span class="fz">全部订单</span></router-link>
                <router-link tag="li" to="/daipj"><span class="fz">待评价订单</span></router-link>
                <router-link tag="li" to="/dingdan"><span class="fz">已完成订单</span></router-link>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "dingdanheader",
        data () {
            return {
                // searchid: ""
            }
        },
        methods: {
            // tosearch () {
            //     this.search = !this.search
            // }
        },
        watch: {
            // searchid () {
            //     this.bus.$emit('search',this.searchid)
            // }
        }
    }
</script>

<style lang="stylus" scoped>
    .top
        position relative
        overflow hidden
        height 43px
        line-height 43px
        background #36D5B9
        font-size 18px
        .mydd
            text-align center
            margin-left 170px
            font-size 18px
        .ddsearch
            text-align center
            margin-left 90px
        .header-back
            position absolute
            top 0
            left 0
            width 32px
            text-align center
            font-size 20px
    /*.search*/
        /*height 36px*/
        /*padding 0 5px*/
        /*background #36D5B9*/
        /*.search-input*/
            /*box-sizing border-box*/
            /*padding 0 5px*/
            /*width 100%*/
            /*height 31px*/
            /*line-height 31px*/
            /*text-align center*/
            /*border-radius 3px*/
            /*color #666*/
    .footer
        background #EEEEEE
        li a
            text-decoration none
        ul
            background #FFFFFF
            display flex
            list-style none
            font-size 16px
            padding 10px
        ul li
            text-align center
            flex 1
            /*.fz*/
                /*border 1px solid */
                /*border-radius 7px*/
                /*background wheat*/
</style>