<template>
    <div>
        <dingdanheader></dingdanheader>
        <div class="bodys">
            <div class="dingdan" v-for="item in gets" :key="item.oid">
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
                        <span @click="pj(item.orid)"><router-link class="btnpj" to="/waiting" tag="button">评价它</router-link></span>
                    </div>
                </div>
            </div>
        </div>
        <dingdanfooter></dingdanfooter>
    </div>
</template>

<script>
    import dingdanheader from '../../components/Header.vue'
    import dingdanfooter from '../../pages/home/components/Footer.vue'
    import axios from 'axios'
    export default {
        components: {
            dingdanheader,
            dingdanfooter
        },
        name: "dingdanbody",
        data () {
            return {
                pjid: "",
                gets: [],
                date: '',
                // dingdans: [
                //     {
                //         id: "10001",
                //         name: "海问香",
                //         ruzhudate: "2019.04.13",
                //         lidiandate: "2019.04.13",
                //         leixing: "双人间",
                //         fjimg : "https://tse2-mm.cn.bing.net/th?id=OIP.xL8sV0-yFKmGbd4uDF66jwHaFN&w=297&h=209&c=7&o=5&pid=1.7"
                //     },{
                //         id: "10002",
                //         name: "蛮吉",
                //         ruzhudate: "2019.04.13",
                //         lidiandate: "2019.04.13",
                //         leixing: "单人间",
                //         fjimg : "https://tse2-mm.cn.bing.net/th?id=OIP.xL8sV0-yFKmGbd4uDF66jwHaFN&w=297&h=209&c=7&o=5&pid=1.7"
                //     },{
                //         id: "12003",
                //         name: "蛮大人",
                //         ruzhudate: "2019.04.13",
                //         lidiandate: "2019.04.13",
                //         leixing: "双人间",
                //         fjimg : "https://tse2-mm.cn.bing.net/th?id=OIP.xL8sV0-yFKmGbd4uDF66jwHaFN&w=297&h=209&c=7&o=5&pid=1.7"
                //     }
                // ]
            }
        },
        methods: {
            pj(msg) {
                this.pjid = msg
                this.bus.$emit('qupj',this.pjid)
            }
        },
        mounted () {
            axios.post('/home/homepage/yipj',{
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
        }
    }
</script>

<style lang="stylus" scoped>
    .bodys
        background #EEEEEE
        _height 736px
        min-height 736px
        padding 5px 5px
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
</style>