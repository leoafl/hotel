<template>
    <div class="bodys">
        <div class="search">
            <input class="search-input" v-model="ids" placeholder="输入订单号即可查找">
        </div>
        <div v-show="!ids" class="dingdan" v-for="item in gets" :key="item.oid">
            <div class="hotelimg body">
                <img class="img" :src="item.fjimg">
            </div>
            <div class="content body">
                <div class="dingdanhao">
                    <span>订单号：{{item.orid}}</span>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span>入住人：{{item.oname}}</span>
                </div>
                <div class="riqi">
                    <p>入住日期：{{item.ogtime}}</p>
                    <p>离店日期：{{item.oltime}}</p>
                </div>
                <div class="leixing">
                    <span>支付金额：{{item.oprice}}</span>
                    <button class="btnpj" @click="dodelete(item.orid)">删除它</button>
                </div>
            </div>
        </div>
        <div v-show="ids" class="dingdan" v-for="item in searchs" :key="item.oid">
            <div class="hotelimg body">
                <img class="img" :src="item.fjimg">
            </div>
            <div class="content body">
                <div class="dingdanhao">
                    <span>订单号：{{item.orid}}</span>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span>入住人：{{item.oname}}</span>
                </div>
                <div class="riqi">
                    <p>入住日期：{{item.ogtime}}</p>
                    <p>离店日期：{{item.oltime}}</p>
                </div>
                <div class="leixing">
                    <span>支付金额：{{item.oprice}}</span>
                    <button class="btnpj" @click="dodelete(item.orid)">删除它</button>
                </div>
            </div>
        </div>
        <div class="nos" v-show="ids">
            <div class="no border-bottom" v-show="nodata">并没有找到匹配项</div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "dingdanbody",
        data () {
          return {
              gets: [],
              ids: "",
              searchs: [],
              date: '',
          //     dingdans: [
          //         {
          //             id: "10001",
          //             name: "海问香",
          //             ruzhudate: "2019.04.13",
          //             lidiandate: "2019.04.13",
          //             leixing: "双人间",
          //             fjimg : "https://tse2-mm.cn.bing.net/th?id=OIP.xL8sV0-yFKmGbd4uDF66jwHaFN&w=297&h=209&c=7&o=5&pid=1.7"
          //         },{
          //             id: "10002",
          //             name: "蛮吉",
          //             ruzhudate: "2019.04.13",
          //             lidiandate: "2019.04.13",
          //             leixing: "单人间",
          //             fjimg : "https://tse2-mm.cn.bing.net/th?id=OIP.xL8sV0-yFKmGbd4uDF66jwHaFN&w=297&h=209&c=7&o=5&pid=1.7"
          //         },{
          //             id: "12003",
          //             name: "蛮大人",
          //             ruzhudate: "2019.04.13",
          //             lidiandate: "2019.04.13",
          //             leixing: "双人间",
          //             fjimg : "https://tse2-mm.cn.bing.net/th?id=OIP.xL8sV0-yFKmGbd4uDF66jwHaFN&w=297&h=209&c=7&o=5&pid=1.7"
          //         }
          //     ]
          }
        },
        mounted () {
            axios.post('/home/homepage/getdingdan',{
            })
                .then((response) => {
                    console.log(response)
                    let data = response.data
                    this.gets = data.content
                    // console.log(this.gets)
                })
                .catch((error) => {
                    console.log(error)
                })
            // this.bus.$on('search',function (msg) {
            //     localStorage.search = msg
            //     console.log(msg)
            // })
            // this.ids = localStorage.search

            //获取当前时间的函数
            // var date = new Date();
            // var seperator1 = "-";
            // var year = date.getFullYear();
            // var month = date.getMonth() + 1;
            // var strDate = date.getDate();
            // if (month >= 1 && month <= 9) {
            //     month = "0" + month;
            // }
            // if (strDate >= 0 && strDate <= 9) {
            //     strDate = "0" + strDate;
            // }
            // this.date = year + seperator1 + month + seperator1 + strDate
        },
        computed: {
            nodata() {
                return !this.searchs.length
            }
        },
        methods: {
            dodelete (msg) {
                console.log(msg)
                axios.post('/home/homepage/delete',{
                    delid: msg
                })
                    .then((response) => {
                        // console.log(response)
                        let data = response.data
                        this.gets = data.content
                        // console.log(this.gets)
                    })
                    .catch((error) => {
                        console.log(error)
                    })
            }
        },
        watch: {
            ids () {
                if(!this.ids){
                    this.searchs = []
                    return
                }
                const result = []
                for(let i in this.gets){
                    if(this.gets[i].orid.indexOf(this.ids) > -1){
                            result.push(this.gets[i])
                    }
                }
                this.searchs = result
            }
        }
    }
</script>

<style lang="stylus" scoped>
    .bodys
        background #EEEEEE
        _height 736px
        min-height 736px
        padding 5px 5px
        .search
            text-align center
            margin-bottom 5px
            .search-input
                border 1px solid #FFFFFF
                border-radius 10px
                width 404px
                height 30px
        .dingdan
            display flex
            border 1px solid #FFFFFF
            border-radius 10px
            background #FFFFFF
            padding 5px
            margin-bottom 10px
            .body
                flex 1
            .hotelimg
                display inline-block
                width 140px
                height 140px
                .img
                    border-radius 20px
                    padding 5px
                    width 130px
                    height 130px
            .content
                margin-left -100px
                display inline-block
                width 250px
                padding 5px
                line-height 2.3
                .btnpj
                    border 1px solid #FFFFFF
                    border-radius 9px
                    background wheat
                    font-size 16px
                    margin-left 66px
        .nos
            background #EEEEEE
            .no
                border 1px solid #FFFFFF
                border-radius 3px
                font-size 16px
                padding 3px 0px
                background #FFFFFF
                /*.btnpj*/
                    /*border 1px solid #FFFFFF*/
                    /*border-radius 9px*/
                    /*background wheat*/
                    /*font-size 16px*/
                    /*margin-left 66px*/
</style>