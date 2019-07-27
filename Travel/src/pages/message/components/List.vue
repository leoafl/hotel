<template>
    <div class="list">
        <div class="title">1</div>
        <ul>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">头像</p>
                </div>
                <div class="yulan" v-show="hide">
                    <img src="" alt="" class="tu1" id="view1">
                </div>
                <img class='input-img-content' :src='img'/>

                <div @click="xgimg" class="upload">
                    <!--<div class="iconfont iconxg">&#xe60c;</div>-->
                    <input type="file" id="file1" accept="image/*">
                </div>
            </li>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <span class="item-title">昵称：</span>
                    <span class="ziti">{{unickname}}</span>
                    <div @click="xgname1" class="icon-down">
                        <router-link to="/xgniname" tag="i" class="iconfont">&#xe60c;</router-link>
                    </div>
                </div>
            </li>
            <!--模态框-->
            <!--<el-dialog title="修改昵称" :visible.sync="xg">-->
            <!--</el-dialog>-->
            <!--<li v-show="xg">-->
            <!--<div class="xg">-->
            <!--<input class="xginput" type="text" v-model="newname" placeholder="请输入新昵称">-->
            <!--<button class="xgbtn" @click="xgname">确定</button>-->
            <!--</div>-->
            <!--</li>-->

            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <span class="item-title">手机：</span>
                    <span class="ziti">{{uphone}}</span>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <p class="item-title">居住地</p>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>
            <div class="title">1</div>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <span class="item-title">性别：</span>
                    <span class="ziti">{{usex}}</span>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>
            <li class="item border-bottom">
                <div v-bind:class="{item_info:isFirst,item_show:isShow}">
                    <span class="item-title">出生日期</span>
                    <div class="iconfont icon-down">&#xe60c;</div>
                </div>
            </li>
            <div class="title">1</div>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: 'MessageList',
        props: {
            list: Array
        },
        mounted () {
            axios.post('/home/homepage/getusermessage', {
            })
                .then((response) => {
                    console.log(response)
                    let data = response.data
                    this.gets = data.content
                    for(let i in this.gets){
                        this.imglength = this.gets[i].img.length
                        //img 获取头像路径
                        this.img = this.gets[i].img.substring(11,this.imglength)
                        //riqi 获取数据库中的日期前缀
                        this.riqi = this.gets[i].img.substring(0,11)
                        this.uname = this.gets[i].uname
                        this.userid = this.gets[i].uid
                        this.uphone = this.gets[i].uphone
                        this.usex = this.gets[i].usex
                        this.unickname = this.gets[i].unickname
                    }
                })
                .catch(function (error) {
                    console.log(error)
                })

            var this_ = this
            //获取修改图片的路径
            document.getElementById("file1").addEventListener('change', function(){
                var files = this.files;
                var file;
                if (files && files.length) {
                    file = files[0];
                    if (/^image\/png$|jpeg$/.test(file.type)) {
                        document.getElementById('view1').src = URL.createObjectURL(file);
                    } else {
                        alert("Please choose an image file with jpg jpeg png.");
                    }
                } else {
                    alert("Please choose image file");
                }

                //修改头像
                this_.imglujing = document.getElementById('view1').src
                if(this_.imglujing==="http://localhost:8080/"){
                }else{
                    this_.newtx = this_.riqi + this_.imglujing
                    axios.post('/home/homepage/xgtouxiang', {
                        newtx: this_.newtx,
                        userid: this_.userid
                    })
                        .then((response) => {
                            console.log(response)
                            axios.post('/home/homepage/getusermessage', {
                            })
                                .then((response) => {
                                    console.log(response)
                                    let data = response.data
                                    this_.gets = data.content
                                    for(let i in this_.gets){
                                        this_.imglength = this_.gets[i].img.length
                                        //img 获取头像路径
                                        this_.img = this_.gets[i].img.substring(11,this_.imglength)
                                        //riqi 获取数据库中的日期前缀
                                        this_.riqi = this_.gets[i].img.substring(0,11)
                                        this_.uname = this_.gets[i].uname
                                        this_.userid = this_.gets[i].uid
                                        this_.uphone = this_.gets[i].uphone
                                        this_.usex = this_.gets[i].usex
                                        this_.unickname = this_.gets[i].unickname
                                    }
                                })
                                .catch(function (error) {
                                    console.log(error)
                                })
                            // location.reload()
                        })
                        .catch(function (error) {
                            console.log(error)
                        })
                }
            }, false);
        },
        data () {
            return {
                unickname: "",
                newname: "",
                xg: false,
                unickname: "",
                upassword: "",
                uemail: "",
                userid: 0,
                newtx: "",
                hide: false,
                uname: "",
                uphone: "",
                usex: "",
                imglujing: "",
                riqi: "",
                img: '',
                imglength: 0,
                gets: [],
                isFirst: true,
                isShow: false,
                show: true,
                hide: false
            }
        },
        methods: {
            xgname1 () {
                this.xg = !this.xg
            },
            xgname () {
                // this.xg = !this.xg
                // axios.post('/home/homepage/xgname', {
                //     userid: this.userid,
                //     uname: this.newname
                // })
                //     .then((response) => {
                //         console.log(response)
                //         location.reload()
                //     })
                //     .catch(function (error) {
                //         console.log(error)
                //     })
            },
            xgimg() {
                // this.imglujing = document.getElementById('view1').src
                // if(this.imglujing==="http://localhost:8080/"){
                // }else{
                //     this.newtx = this.riqi + this.imglujing
                //     axios.post('/home/homepage/xgtouxiang', {
                //         newtx: this.newtx,
                //         userid: this.userid
                //     })
                //         .then((response) => {
                //             console.log(response)
                //             location.reload()
                //         })
                //         .catch(function (error) {
                //             console.log(error)
                //         })
                // }
            },
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
            }
        }
    }
</script>

<style lang="stylus" scoped>
    @import "~styles/varibles.styl"
    @import "~styles/mixins.styl"
    .list
        width:90%
        margin:auto
        margin-top:0.5rem
        border-radius:0.1rem
    .upload
        padding 4px 10px
        font-size 15px
        position relative
        /*background red*/
        #file1
            position: absolute
            z-index 0
            overflow: hidden
            right: 0
            top: 0
            opacity: 0
    /*.iconxg*/
    /*background #a1d9f2*/
    /*margin-top 30px*/
    /*font-size 17px*/
    /*.xg*/
    /*background #f1f2f3*/
    /*width 372.59px*/
    /*height 100px*/
    /*text-align center*/
    /*padding 10px 0px*/
    /*.xginput*/
    /*width 350px*/
    /*height 70px*/
    /*.xgbtn*/
    /*background wheat*/
    /*margin-top 5px*/
    /*font-size 16px*/
    .title
        line-height:.2rem
        background:#eee
        text-indent:.1rem
        color:#eee
    .item
        overflow:hidden
        display:flex
        .input-img-content
            float:left
            height 80px
            width 80px
            border-radius 50%
        .icon-time
            margin-left:.3rem
            margin-top:.2rem
            height:1rem
            font-size:1rem
            text-align:center
            line-height:1rem
            color:$bgColor
        .item_info
            flex:1
            padding:0.5rem .1rem
            min-width:0
            .item-title
                margin-left:.3rem
                line-height:.54rem
                font-size:.38rem
                ellipsis()
            .ziti
                font-size 19px
            .item-desc
                line-height:.4rem
                color:black
                ellipsis()
            .icon-down
                width:.4rem
                margin-top:-.4rem
                margin-left:94%
        .item_show
            flex:1
            padding:0.5rem .1rem
            .item-title
                line-height:.54rem
                font-size:.32rem
            .item-desc
                line-height:.4rem
                color:#ccc
            .icon-down
                width:.4rem
                margin-top:-.4rem
                margin-left:94%
</style>
