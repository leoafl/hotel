<template>
    <div v-show="list.length">
        <div class="price">
            <div id="checkinout">
                <div id="firstSelect"  style="width:100%;">
                    <div class="Date_lr" style="float:left;">
                        <P>入住</p>
                        <input
                                id="startDate"
                                type="text"
                                value=""
                                style="" readonly>
                    </div>
                    <div class="Date_lr" style="float:right;">
                        <p>离店</p>
                        <input id="endDate" type="text" value="" style="" readonly>
                    </div>
                    <span class="span21">共<span class="NumDate">1</span>晚</span>
                </div>
            </div>
            <div class="mask_calendar">
                <div class="calendar"></div>
            </div>
        </div>
        <div class="border-bottom">
        <ul class="price-filter">
            <li
                    :class="{on:item === filterCost }"
                    v-for="item in  costTypes"
                    @click="handlePriceClick(item)"
            >{{item}}</li>
        </ul>
        <ul class="price-filter">
            <li
                    :class="{on:item === filterType }"
                    v-for="item in rtypes"
                    @click="handleNameClick(item)"
            >{{item}}</li>
        </ul>
        </div>
        <Apartment
                v-for="item in filterPriceAndName"
                :info="item"
                :key="item.id"
        ></Apartment>
        <div class="product-not-found" v-show="!filterPriceAndName.length">暂无此类型房间</div>
    </div>
</template>

<script>
    import $ from 'jquery'
    import Apartment from "../../../components/apartment";
    export default {
        name: "List",
        components: {Apartment},
        data(){
            return{
                filterType:'',
                filterCost:'',
                order:'',
                NumDate:Number
            }
        },
        computed:{
            list () {
                return this.$store.state.roomList;
            },
            rtypes(){
                return this.$store.getters.rtypes;
            },
            costTypes(){
                return this.$store.getters.costTypes;
            },
            filterPriceAndName(){
                let list = [...this.list];
                if (this.filterType !== '') {
                    list = list.filter(item => item.rtype === this.filterType);
                }
                if (this.filterCost !== '') {
                    list = list.filter(item => item.costType === this.filterCost);
                }
                return list;
            }
        },
        mounted(){
            $(function () {
                $('#firstSelect').on('click', function () {
                    $('.mask_calendar').show();

                });
                $('.mask_calendar').on('click', function (e) {
                    if (e.target.className == "mask_calendar") {
                        $('.calendar').slideUp(200);
                        $('.mask_calendar').fadeOut(200);
                    }
                });
                $('#firstSelect').calendarSwitch({
                    selectors: {
                        sections: ".calendar"
                    },
                    index: 4,      //展示的月份个数
                    animateFunction: "slideToggle",        //动画效果
                    controlDay: true,//知否控制在daysnumber天之内，这个数值的设置前提是总显示天数大于90天
                    daysnumber: "90",     //控制天数
                    comeColor: "#2EB6A8",       //入住颜色
                    outColor: "#2EB6A8",      //离店颜色
                    comeoutColor: "#E0F4F2",        //入住和离店之间的颜色
                    callback: function () {//回调函数
                        $('.mask_calendar').fadeOut(200);
                        var startDate = $('#startDate').val();  //入住的天数
                        var endDate = $('#endDate').val();//离店的天数
                        var NumDate = $('.NumDate').text();    //共多少晚
                        console.log(startDate)
                        console.log(endDate)
                        console.log(NumDate)
                        window.NumDate=NumDate;
                        window.startDate=startDate;
                        window.endDate=endDate;
                     },
                    comfireBtn: '.comfire'//确定按钮的class或者id
                });
                var b = new Date();
                console.log(b)
                var ye = b.getFullYear();
                var mo = b.getMonth() + 1;
                mo = mo < 10 ? "0" + mo : mo;
                var da = b.getDate();
                da = da < 10 ? "0" + da : da;
                $('#startDate').val(ye + '-' + mo + '-' + da);
                b = new Date(b.getTime() + 24 * 3600 * 1000);
                var ye = b.getFullYear();
                var mo = b.getMonth() + 1;
                mo = mo < 10 ? "0" + mo : mo;
                var da = b.getDate();
                da = da < 10 ? "0" + da : da;
                $('#endDate').val(ye + '-' + mo + '-' + da);
            })
            this.$store.dispatch('getRoomList');
        }
     ,
        methods:{
            handlePriceClick(cost){
                if (this .filterCost ===cost) {
                    this.filterCost = '';
                } else {
                    this.filterCost =cost;
            }

         },
            handleNameClick(rtype){
                    if (this.filterType === rtype) {
                        this.filterType ='';
                    } else {
                        this.filterType = rtype;
            }
            }
        }
    }
</script>

<style lang="stylus" scoped>
    #checkinout
        height: 50px;
        line-height: 50px;
        position: relative;
        margin: 10px;
        padding: 2px 0;
        display: -webkit-box;
        display: flex;
        border: 1px solid #e5e5e5;
        border-radius: .02rem;
        background-color: #fff;
        #firstSelect p
            line-height:25px;
            color: #999;
            font-size:12px;
        .Date_lr
            width:45%;
            text-align:center;
            #startDate
                border:0;
                position: absolute;
                left: 0;
                margin: 0 auto;
                width: 50%;
                font-size: 16px;
                color: #73CAB7;
                text-align: center;
            #endDate
                border:0;
                position: absolute;
                right: 0;
                margin:auto 0;
                width:50%;
                font-size: 16px;
                color: #009688;
                text-align: center;
        .span21
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            font-size:14px;
            color: #666;
            border: 1px solid #e5e5e5;
            padding:2px 8px;
            line-height: 20px;
            border-radius: .2rem;
            background-color: #fff;

    .mask_calendar
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0,0,0,.4);
        display: none;
        z-index: 9999;
        .calendar
            height: 400px;
            position: fixed;
            bottom: 0;
            left: 0;

        .animated
            animation-duration: 1s;
            animation-fill-mode: both;

    @keyframes slideInDown {
        from {
            transform: translate3d(0, -100%, 0);
            visibility: visible;
        }

        to {
            transform: translate3d(0, 0, 0);
        }
    }
    .slideInDown {
        animation-name: slideInDown;
    }
    .price-filter{
        padding: .24rem 0;
        overflow: hidden;
    }

    .price-filter li{
        float: left;
        margin-right: .08rem;
        padding: .1rem .14rem;
        background: #f7f7f7;
        border-radius: .15rem;
        border: .01rem solid gainsboro;
    }
    .price-filter li.on{
        background: #009688;
        border: 1px solid #009688;
        color: #fff;
    }
    .apm-item{
        display flex
        align-items center
        padding .24rem 0
    }
    .img-box{
        padding-left .12rem
        position relative
        width 1.8rem
    }
    .img-box img{
        width 100%
        height 100%
    }
    .room-info{
        margin-left .12rem
        -webkit-box-flex: 1;
        flex: 1;
        overflow: hidden;
    }
    .room-info h2{
        text-indent 7px
        font-size: .36rem;
        color: #050202;
        overflow: hidden;
    }
    .room-info p{
        color #9f9f9f
        font-size .26rem
        line-height .26rem
        text-overflow: ellipsis;
    }
    .price-info{
        width 20%
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-self: stretch;
        padding: 0 .12rem;
        color: #009688;
        text-align: center;
        background: #f7f7f7;
    }
    .price-info p span{
        font-size .40rem
    }
    .price-info button{
        font-size .32rem
        color #009688
    }
    .product-not-found{
        text-align: center;
        padding: 32px;
        font-size 18px
    }
</style>