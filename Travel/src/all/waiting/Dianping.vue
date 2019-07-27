<template>
    <div class="dianping">
        <div class="top">
            <router-link to="/waiting">
                <div class="iconfont header-back">&#xe624;</div>
            </router-link>
            <span @click="qufabu" class="fabu">发布</span>
        </div>
        <div class="pingjia">
            <div class="choose-biaoqian">
                <span @click="xuanzhong1" class="biaoqian">{{biaoqian1}}</span>
                <span @click="xuanzhong2" class="biaoqian">{{biaoqian2}}</span>
                <span @click="xuanzhong3" class="biaoqian">{{biaoqian3}}</span>
                <span @click="xuanzhong4" class="biaoqian">{{biaoqian4}}</span>
                <span @click="xuanzhong5" class="biaoqian">{{biaoqian5}}</span>
            </div>
            <div class="say">
                <textarea v-model="all" class="saytext">{{all}}</textarea>
                <span @click="clear" class="clearall">清空</span>
            </div>
        </div>
        <div class="tupian">
            <span  class="iconfont upload">&#xe610;
                <input type="file" id="file1" accept="image/*" multiple>
            </span>
            <br>
            <div class="yulan">
                <img src="" alt="" class="tu1" id="view1">
                <img src="" alt="" class="tu1" id="view2">
                <img src="" alt="" class="tu1" id="view3">
            </div>
        </div>
        <div class="zjs">
            <div class="zj">
                总结你的满意程度吧
            </div>
            <div class="accepts">
                <div class="acccept" id="icon1" tabindex='1'>
                    <span class="iconfont tubiao tubiao1">&#xe613;</span>
                    <span @click="shifou(manyis[0])" class="content">{{manyis[0]}}</span>
                </div>
                <div class="acccept" id="icon2" tabindex='2'>
                    <span class="iconfont tubiao tubiao2">&#xe782;</span>
                    <span @click="shifou(manyis[1])" class="content">{{manyis[1]}}</span>
                </div>
                <div class="acccept"  id="icon3" tabindex='3'>
                    <span class="iconfont tubiao tubiao3">&#xe79c;</span>
                    <span @click="shifou(manyis[2])" class="content">{{manyis[2]}}</span>
                </div>
                <div class="acccept" id="icon4" tabindex='4'>
                    <span class="iconfont tubiao tubiao4">&#xe609;</span>
                    <span @click="shifou(manyis[3])" class="content">{{manyis[3]}}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "dianping",
        mounted () {
            //获取当前时间的函数
            var date = new Date();
            var seperator1 = "-";
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var strDate = date.getDate();
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (strDate >= 0 && strDate <= 9) {
                strDate = "0" + strDate;
            }
            this.riqi = year + seperator1 + month + seperator1 + strDate

            document.getElementById("file1").addEventListener('change', function(){
                var files = this.files;
                var file;
                var fileer;
                var filesan;
                if (files.length > 3) {
                    alert('最多可以选择三张图片')
                    files = []
                    return
                }else if (files && files.length) {
                    file = files[0];
                    fileer = files[1];
                    filesan = files[2];
                    if (/^image\/png$|jpeg$/.test(file.type)) {
                        document.getElementById('view1').src = URL.createObjectURL(file);
                        document.getElementById('view2').src = URL.createObjectURL(fileer);
                        document.getElementById('view3').src = URL.createObjectURL(filesan);
                    } else {
                        alert("Please choose an image file with jpg jpeg png.");
                    }
                } else {
                    alert("Please choose image file");
                }
            }, false);
        },
        data () {
            return {
                riqi: "",
                manyichengdu: "",
                manyi: "",
                manyis: ["差评","一般","满意","喜欢"],
                biaoqian1: '位置很好',
                biaoqian2: '服务好',
                biaoqian3: '干净整洁',
                biaoqian4: '价格划算',
                biaoqian5: '房间很大',
                all: '入住感觉如何？快来说说酒店的环境、服务、入住房间等情况吧',
                length: 0,
                photo: [],
                file1: '',
                fileer: '',
                filesan: ''
            }
        },
        methods: {
            xuanzhong1 () {
                this.all += this.biaoqian1
            },
            xuanzhong2 () {
                this.all += this.biaoqian2
            },
            xuanzhong3 () {
                this.all += this.biaoqian3
            },
            xuanzhong4 () {
                this.all += this.biaoqian4
            },
            xuanzhong5 () {
                this.all += this.biaoqian5
            },
            clear () {
                this.all = ''
            },
            qufabu () {
                //测试数据库的连接
                this.file1 = document.getElementById('view1').src
                this.fileer = document.getElementById('view2').src
                this.filesan = document.getElementById('view3').src
                axios.post('/home/homepage/dopinglun',{
                    imga: this.file1,
                    imgb: this.fileer,
                    imgc: this.filesan,
                    content: this.all,
                    manyi: this.manyichengdu,
                    riqi: this.riqi
                })
                    .then((response) => {
                        this.$router.push('/waiting')
                        //完成待评价->以评价
                        //未完成
                        this.bus.$on('qupj',function (msg) {
                            axios.post('/home/homepage/dopj',{
                                pjid: msg
                            })
                                .then((response) => {
                                    // console.log("hahahhahahahah")
                                    // console.log(msg)
                                    // console.log(response)
                                    // let data = response.data
                                    // this.gets = data.content
                                    // console.log(this.gets)
                                })
                                .catch((error) => {
                                    console.log(error)
                                })
                        })
                        // console.log(response)
                        // let data = response.data
                        // this.gets = data.content
                        // console.log(this.gets)
                    })
                    .catch((error) => {
                        console.log(error)
                    })

                //bus传值非父子组件之间
                // this.$router.push('/waiting')
                // this.file1 = document.getElementById('view1').src
                // this.fileer = document.getElementById('view2').src
                // this.filesan = document.getElementById('view3').src
                // this.photo[0] = this.file1
                // this.photo[1] = this.fileer
                // this.photo[2] = this.filesan
                // this.bus.$emit('fabuimg',this.photo)
                // this.bus.$emit('fabucontent',this.all)
            },
            shifou (msg) {
                this.manyichengdu = msg
                // //满意度的数据库连接
                // axios.post('http://localhost/zxh/wenjinhotel/service/index.php/api/index/dopinglun',{
                //     manyi: msg
                // })
                //     .then((response) => {
                //     })
                //     .catch((error) => {
                //     })

                //bus传值非父子组件之间
                // this.bus.$emit('fabumanyi',msg)
            }
        }
    }
</script>

<style lang="stylus" scoped>
    .dianping
        background #EEEEEE
        width 100%
        height 736px
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
            .fabu
                display inline-block
                margin-left 330px
        .zjs
            border 1px solid #EEEEEE
            border-radius 5px
            margin-top 15px
            margin-left 5px
            margin-right 5px
            background #FFFFFF
            .zj
                font-size 16px
                padding 5px 5px
                width 100%
                /*background #5FDAC7*/
            .accepts
                margin-top 10px
                display flex
                margin-bottom 8px
                #icon1:focus
                #icon2:focus
                #icon3:focus
                #icon4:focus
                    background #36D5B9
                .acccept
                    border 1px dotted
                    flex 1
                    margin-left 5px
                    margin-right 5px
                    text-align center
                    .tubiao
                        display block
                        font-size 40px
                    .content
                        font-size 16px
        .pingjia
            /*background #5FDAC7*/
            font-size 15px
            background #FFFFFF
            border 1px solid #EEEEEE
            border-radius 5px
            margin-top 5px
            margin-left 5px
            margin-right 5px
            .say
                .saytext
                    width 90%
                    margin-top 15px
                    margin-left 20px
                    height 180px
                    border 1px dashed
                    border-radius 10px
                .clearall
                    display inline-block
                    margin-left 365px
                    margin-top 5px
                .tishi
                    display inline-block
                    margin-left 250px
            .choose-biaoqian
                display flex
                .biaoqian
                    border 1px dotted
                    flex 1
                    margin-top 20px
                    margin-left 5px
                    margin-right 5px
                    text-align center
                    padding 5px 3px
        .tupian
            /*background #5FDAC7*/
            background #FFFFFF
            border 1px solid #EEEEEE
            border-radius 5px
            margin-top 15px
            margin-left 5px
            margin-right 5px
            .upload
                padding 4px 10px
                font-size 40px
                position: relative
                /*background #5FDAC7*/
                margin-left 5px
                #file1
                    position: absolute
                    overflow: hidden
                    right: 0
                    top: 0
                    opacity: 0
            .yulan
                display flex
                margin-right 5px
                .tu1
                    margin-left 5px
                    flex 1
                    display inline-block
                    width 135px
                    height 135px
</style>