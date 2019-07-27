<template>
        <div >
            <div class="header">
                <router-link tag="div" to="/room"  class="header-abs" >
                    <span class="iconfont header-abs-back">&#xe624;</span>
                    房间详情
                </router-link>
            </div>
            <div class="room">
                <div class="room-image">
                    <img :src="room.img">
                </div>
                <div class="room-info">
                    <h1 class="room-name border-bottom">{{ room.name }}</h1>
                    <div class="border-bottom">
                    <div class="room-type">
                        <div class="room-lx">类型</div>
                        <span>{{room.rtype}}</span>
                    </div>
                    <div class="room-type">
                        <div class="room-lx">早餐</div>
                        <span>{{room.food}}</span>
                     </div>
                    </div>
                <div class="room-msg">
                        <div class="room-nev">
                            <div class="room-cenent">房间简介</div>
                        </div>
                        <span class="room-cenent-x">{{ room.msg }}</span>

                    <div >
                        <div class="room-nev">
                            <div class="room-cenent">取消规则</div>
                            <span class="room-cenent-x">{{ room.cancel }}</span>
                        </div>
                    </div>
                </div>
                    <div class="room-footer">
                        <div class="room-cost">
                            ¥ {{costAll}}
                        </div>
                        <router-link tag="div" :to="'/apartment/'+id +'/reserve'" class="room-add-order">
                            立即预订
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    import room_data from '../../../../static/lib/room.js';
    export default {
        name: "apartment",
        data () {
            return {
                // 获取路由中的参数
                id: parseInt(this.$route.params.id),
                room:'',
                NumDate:Number
            }
    },
    methods: {
        getProduct () {
            // 真实环境通过 ajax 获取，这里用异步模拟
            setTimeout(() => {
                this.room = room_data.find(item => item.id === this.id);
            }, 500);
        }
    },
        computed:{
            roomList () {
                return this.$store.state.roomList;
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
    mounted () {
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

    .room-image{
        width 100%
    }
    .room-image img{
        height 250px
        width 100%
    }
    .room-info{
        margin-top: 15px
    }
    .room-type{
        display inline-block
        margin-top 10px
        margin-left 10px
        margin-bottom 10px
        color: #fff;
    }
    .room-lx{
        display inline-block
        color #fff
    }
    .room-type span{
        display inline-block
        color #999
    }
    .room-food{
        margin-left 20px
    }
    .room-name{
        color: #333;
        font-size 21px
    }
    .room-msg{
        margin-top 10px
    }
    .room-cenent{
        margin-top 10px
        height .64rem
        font-size .34rem
        overflow hidden
    }
    .room-cenent-x{
        color #999
        padding-left 10px
        font-size 15px
        margin-bottom 20px
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
</style>