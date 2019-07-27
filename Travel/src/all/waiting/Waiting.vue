<template>
    <div class="waiting">
        <waitingheader></waitingheader>
        <div class="pingjialist">
              <div class="pingjia" v-for="item in gets" :key="item.id">
                  <div>
                      <img class="imgPhoto" :src="item.touxiang"/>
                      <span>{{item.name}}</span>
                      <i>说:{{item.manyi}}哦</i>
                      <span class="riqi">{{item.riqi}}</span>
                  </div>
                  <div class="content">
                      <p>{{item.content}}</p>
                      <div class="hotelimgs">
                          <!--<img  v-for="img,index in item.hotelimg" :key="index" :src="img" class="hotelimg">-->
                          <img v-show="item.hotelimg1" :src="item.hotelimg1" class="hotelimg">
                          <img v-show="item.hotelimg2" :src="item.hotelimg2" class="hotelimg">
                          <img v-show="item.hotelimg3" :src="item.hotelimg3" class="hotelimg">
                      </div>
                      <span v-show="item.dianzan" @click="change(item.id)" class="iconfont dianzan1">&#xe617;{{item.dianzanshu}}</span>
                      <span v-show="!item.dianzan" @click="change(item.id)" class="iconfont dianzan1">&#xe657;{{item.dianzanshu}}</span>
                  </div>
              </div>
        </div>
    </div>
</template>

<script>
    import dingdanheader from '../../components/Header.vue'
    import waitingheader from './components/Header.vue'
    import axios from 'axios'
    export default {
        name: "dingdan",
        components: {
            dingdanheader,
            waitingheader
        },
        data () {
            return {
                gets: [],
                dianzan: true
                // manyiba: "",
                // content: "",
                // photo1: "",
                // photo2: "",
                // photo3: "",
                // photos: [],
                // weidianzan: true,
                // yidianzan: false,
                // pingjias: [
                //     {
                //         id: 0,
                //         touxiang: 'https://tse1-mm.cn.bing.net/th?id=OIP.U73FHID5eXD60UTmkgM0-AHaLt&w=174&h=276&c=7&o=5&pid=1.7',
                //         manyi: "满意",
                //         name: "蛮吉",
                //         riqi: "2019-4-18",
                //         content: "环境开会卡号发快递就会发生记得发哈十九点撒旦发射点发射点犯得上发射点发",
                //         dianzanshu: "999+",
                //         dianzan: true,
                //         hotelimg: [
                //             'https://tse3-mm.cn.bing.net/th?id=OIP.RkYKIP9u7a6ran6D11bOQQHaGX&w=197&h=169&c=7&o=5&pid=1.7',
                //             'https://tse4-mm.cn.bing.net/th?id=OIP.xcLfCYhAmBJHCSQLT7I96gHaE7&w=300&h=199&c=7&o=5&pid=1.7']
                //     },{
                //         id: 1,
                //         touxiang: 'https://tse1-mm.cn.bing.net/th?id=OIP.770hwQQvcHddQo23wMZoxwHaKe&w=174&h=246&c=7&o=5&pid=1.7',
                //         manyi: "一般",
                //         name: "蛮大人",
                //         riqi: "2019-4-18",
                //         content: "人推泰瑞JFK尖峰时刻地方就是看到发送i哦i佛寺大佛寺大佛寺",
                //         dianzanshu: "999+",
                //         dianzan: false,
                //         hotelimg: [
                //             'https://tse2-mm.cn.bing.net/th?id=OIP.xtKRifE6PoFiva_l02u8DwHaFq&w=285&h=213&c=7&o=5&pid=1.7'
                //         ]
                //     },{
                //         id: 2,
                //         touxiang: 'https://tse4-mm.cn.bing.net/th?id=OIP.Pi6f3EocmI23gidQnqDbJgHaJs&w=174&h=228&c=7&o=5&pid=1.7',
                //         manyi: "喜欢",
                //         name: "齐衡三",
                //         riqi: "2019-4-18",
                //         content: "就是打发士大夫精神科大夫精神科大夫就是九分十九的疯狂世界东方",
                //         dianzanshu: "999+",
                //         dianzan: false,
                //         hotelimg: [
                //             'https://tse2-mm.cn.bing.net/th?id=OIP.cwgkffZTVpvjr4KOLTGv8AHaGW&w=269&h=220&c=7&o=5&pid=1.7',
                //             'https://tse2-mm.cn.bing.net/th?id=OIP.BE7n1ou6uiGC7SD5AqxXEQHaHT&w=202&h=200&c=7&o=5&pid=1.7',
                //             'https://tse4-mm.cn.bing.net/th?id=OIP.nEdABh3wJljdDkWKybniZAHaE7&w=300&h=195&c=7&o=5&pid=1.7']
                //     }]
            }
        },
        methods: {
            change (index) {
                console.log(index)
                this.gets[index].dianzan = !this.gets[index].dianzan
                // this.dianzan = !this.dianzan
                // this.pingjias[index].dianzan = !this.pingjias[index].dianzan
            }
            // addpingjia (photo) {
            //     var obj = new Object
            //     obj = {
            //         id: 3,
            //         touxiang: 'https://tse4-mm.cn.bing.net/th?id=OIP.K7sKhKB6SrJ668eejh6fngHaFw&w=174&h=136&c=7&o=5&pid=1.7',
            //         manyi: photo["manyi"],
            //         name: "海问香",
            //         riqi: "2019-4-18",
            //         content: photo["content"],
            //         dianzanshu: "999+",
            //         dianzan: false,
            //         hotelimg: photo
            //     }
            //     this.pingjias.push(obj)
            // }
        },
        mounted () {
            //链接数据库
            axios.post('/home/homepage/pinglun',{
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

            // this.photo3 = "eager"
            // //满意程度的传递
            // this.bus.$on('fabumanyi',function (msg) {
            //     localStorage.manyi = msg
            // })
            // this.manyiba = localStorage.manyi
            // this.photos["manyi"] = this.manyiba
            //
            // //评论内容的传递
            // this.bus.$on('fabucontent',function (content) {
            //     localStorage.content = content
            // })
            // this.content = localStorage.content
            // this.photos["content"] = this.content
            //
            // //照片的传递
            // this.bus.$on('fabuimg', function (msg) {
            //     localStorage.a = msg[0]//本地存储方法
            //     localStorage.b = msg[1]//本地存储方法
            //     localStorage.c = msg[2]//本地存储方法
            // })
            // if(localStorage.a === "http://localhost:8080/"){
            //     this.photo1 = ''
            // }else{
            //     this.photo1 = localStorage.a
            //     this.photos[0] = this.photo1
            // }
            // if(localStorage.b === "http://localhost:8080/"){
            //     this.photo2 = ''
            // }else{
            //     this.photo2 = localStorage.b
            //     this.photos[1] = this.photo2
            // }
            // if(localStorage.c === "http://localhost:8080/"){
            //     this.photo3 = ''
            // }else{
            //     this.photo3 = localStorage.c
            //     this.photos[2] = this.photo3
            // }
            // this.addpingjia(this.photos)
        }
    }
</script>

<style lang="stylus" scoped>
    .waiting
        background #EEEEEE
        width 100%
        _height 736px//自适应高度
        .pingjialist
            margin-top 9px
            .pingjia
                margin-left 10px
                margin-right 10px
                margin-bottom 15px
                background #FFFFFF
                border-radius 7px
                border 1px solid #f1f2f3
                .imgPhoto
                    width 40px
                    height 40px
                    border-radius 50%
                    border 1px dotted
                    /*border 1px dashed purple*/
                .riqi
                    float right
                    margin-top 13px
                    margin-right 10px
                .content
                    margin-top 8px
                    margin-left 10px
                    margin-right 10px
                    font-size 15px
                    line-height 1.2
                    .dianzan
                        font-size 13px
                    .dianzan1
                        margin-left 317px
                        font-size 13px
                    .hotelimgs
                        .hotelimg
                            padding 5px 1px
                            width 118px
                            height 125px
                            border 0.1px solid #EEEEEE
                            border-radius  7px
</style>