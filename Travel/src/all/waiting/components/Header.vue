<template>
    <div>
        <div class="top">
            我的点评
            <router-link to="/daipj">
                <div class="iconfont header-back">&#xe624;</div>
            </router-link>
        </div>
        <div class="choose">
            <div class="double">
                <router-link tag="span" to="/waiting" class="dianping">点评</router-link>
                <router-link tag="span" to="/questions" class="dianping">问答</router-link>
                <span @click="dianping"><router-link tag="span" to="/dianping" class="qudianping">去评价</router-link></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "waitingheader",
        data () {
          return {
              pjid: ""
            }
        },
        mounted () {
        },
        methods: {
            dianping () {
                this.bus.$on('qupj',function (pjid) {
                    localStorage.pjid = pjid
                })
                this.pjid = localStorage.pjid
                this.bus.$emit('dopj',this.pjid)
            }
        }
    }
</script>

<style lang="stylus" scoped>
    .top
        position relative
        overflow hidden
        height 43px
        line-height 43px
        text-align center
        background #36D5B9
        font-size 20px
        .header-back
            position absolute
            top 0
            left 0
            width 32px
            text-align center
            font-size 20px
    .choose
        background #36D5B9
        font-size 18px
        height 35px
        .double
            margin-left 13px
            .dianping
                display inline-block
                margin-top 10px
            .qudianping
                margin-left 250px
</style>