<template>
    <div>
        <div class="header">
            <router-link tag="div" :to="'/apartment/'+id"  class="header-abs" >
                <span class="iconfont header-abs-back">&#xe624;</span>
                预订房间
            </router-link>
        </div>
        <div class="reserve-room">
                <h1 class="border-bottom">预订信息</h1>
               <div v-show="showHint"  class="hint_word">
                <span>{{errHint}}</span>
              </div>
                <ul class="reserve-room-content border-bottom">
                    <li>
                        <div class="reserve-lx">房间类型:</div>
                        <span>{{room.name}}</span>
                    </li>
                    <li>
                        <div class="reserve-lx">入住时间:</div>
                        <span>{{st}}</span>
                    </li>
                    <li>
                        <div class="reserve-lx">退房时间:</div>
                        <span>{{tf}}</span>
                    </li>
                    <li>
                        <div class="reserve-lx">总计费用:</div>
                        <span>{{costAll}}元</span>
                    </li>
                </ul>
            </div>
            <div class="reserve-man">
                <h1 class="border-bottom">个人信息填写</h1>
                <ul class="reserve-room-content border-bottom">
                    <li>
                        <div class="reserve-lx">入住人:</div>
                        <input class="reserve-lx-input" type="text" name="Oname" placeholder="请输入真实姓名" v-model="Oname" >
                    </li>
                    <li>
                        <div class="reserve-lx">手机号:</div>
                        <input class="reserve-lx-input" type="text" name="Oname" placeholder="请输入手机号" v-model="Ophone">
                    </li>
                    <li>
                        <div class="reserve-lx">性&nbsp;&nbsp;&nbsp;别:</div>
                        <input class="reserve-lx-radio" type="radio" name="Osex" value="男" title="男" checked="" v-model="Osex" >
                        <span>男</span>
                        <input class="reserve-lx-radio" type="radio" name="Osex" value="女" title="女" v-model="Osex">
                        <span>女</span>
                    </li>
                    <li>
                        <div class="reserve-lx">身份证:</div>
                        <input class="reserve-lx-input" type="text" name="Ocard" placeholder="请输入身份证" v-model="Ocard" >
                    </li>
                </ul>
            </div>
        <div class="room-footer">
            <router-link tag="div" to="/room" class="room-cost">
                重新选择
            </router-link>
            <div class="room-add-order" @click="reserve">
                立即预订
            </div>
        </div>
    </div>
</template>

<script>
    import room_data from '../../../../static/lib/room';
    import axios from 'axios'
    export default {
        name: "Reserve",
        data () {
            return {
                // 获取路由中的参数
                id: parseInt(this.$route.params.id),
                Ouid:'1',
                room:'',
                Oname:'',
                Ophone:'',
                Osex:'',
                Ocard:'',
                roomname:'',
                Ogtime:'',
                Oltime:'',
                Oprice:'',
                NumDate:Number,
                endDate:String,
                startDate:String,
                showHint: false,
                errHint: '预订失败'
            }
    },
        methods:{
            getProduct () {
                // 真实环境通过 ajax 获取，这里用异步模拟
                setTimeout(() => {
                    this.room = room_data.find(item => item.id === this.id);
                }, 500);
            },
                reserve () {
                    axios.post('/home/homepage/dobook', {
                        Ouid:this.Ouid,
                        Orid: this.id,
                        Ophone: this.Ophone,
                        Osex:this.Osex,
                        Oname:this.Oname,
                        Ogtime:this.st,
                        Oltime:this.tf,
                        Oprice:this.costAll,
                        Ocard:this.Ocard
                    })
                        .then((response) => {
                            let data = response.data
                            this.showHint = true
                            this.errHint = data.message
                            let _this = this
                            setTimeout(function () {
                                _this.showHint = false
                            }, 3000)
                            if (data.code < 0) {
                            } else {
                                setTimeout(function () {
                                        _this.$router.push({path: '/'})
                                },3000)

                            }
                        })
                        .catch(function (error) {
                            console.log(error)
                        })
                }
        },
        computed:{
            st(){
                var startDate;
                startDate=window.startDate
                return startDate;
            },
            tf(){
                var endDate;
                endDate=window.endDate
                return endDate
            },
            costAll () {
                var NumDate;
                if (window.NumDate===undefined){
                    NumDate=1;
                }else{
                    NumDate=window.NumDate
                }
                this.room = room_data.find(item => item.id === this.id);
                var cost= this.room.cost * NumDate
                return cost;
            }
        },
        mounted(){
            this.getProduct();
        }

    }
</script>

<style lang="stylus" scoped>
    .header-abs
        position: relative
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
        height: 0.86rem;
        line-height: 0.86rem;
        text-align: center;
        color: #fff;
        background: #009688;
        font-size: 0.32rem;
        .header-abs-back
            position: absolute;
            width: 0.64rem;
            top: 0;
            left: 0;
            text-align: center;
            font-size: 0.4rem;
            color: #fff;
    .reserve-room{
          height 4rem
          width 100%
    }
    .reserve-room h1{
         font-size 20px
         margin-top 10px
         margin-left 5px
    }
    .reserve-room-content{
        display inline-block
        margin-top 25px
        margin-left 40px
        padding-bottom 10px
        color: #333;
    }
    .reserve-room-content li{
        margin-bottom 15px
    }
    .reserve-room-content span{
        display inline-block
        font-size 18px
        color #999999
    }
    .reserve-lx{
        padding-top 5px
        font-size 18px
        display inline-block
        color #333333
    }
    .reserve-lx-input{
        display: inline-block
        height 27px
        border:1px solid #C9C9C9
        font-size: 16px
        vertical-align:center
        line-height 27px
        padding-left 10px
    }
    .reserve-lx-radio{
          height 20px
          width 20px
    }
    .reserve-man{
        margin-top 20px
        height 3.2rem
        width 100%
    }
    .reserve-man span{
        font-size 20px
        color #333333
    }
    .reserve-man h1{
        font-size 20px
        margin-top 10px
        margin-left 5px
    }
    .room-footer{
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        height: .94rem;
        display: flex;
        text-align: center;
    }
    .room-cost{
        flex: 1;
        font-size 24px
        text-align: center;
        height: 48px;
        width: 175px;
        line-height: 48px;
        color: #009688;
        background-color: #fff
    }
    .room-add-order{
        line-height: 48px;
        height: 48px;
        flex 1
        text-align: center;
        background: -webkit-gradient(linear, right top, left top, from(#009688), to(#009688));
        background: linear-gradient(270deg, #009688, #009688);
        color: #fff;
    }
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