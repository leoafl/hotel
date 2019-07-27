<template>
    <div class="price">
         <div class="price-content">
            <input
                    ref="inputHTML"
                    @click="showCustomPopupClick"
                    class="price-content-input"
                    type="text"
                    value="请输入价格/房型"
            >
            <span class="iconfont price-content-icon"
                  @click="handleColerBtnClick"
            >&#xe60c;</span>
         </div >
         <CustomPopup class="price-tan" ref="CustomPopupRef">
            <div slot="PoperContent" class="PoperContentView">
                <div class="ServiceNoteTitle">
                    <span>价格</span>
                   <ul class="price-p">
                       <li
                           :class="{on:item === filterCost}"
                           v-for="item in prices"
                           @click="handlePriceClick(item)"
                       >{{item}}</li>
                   </ul>
                </div>
                <div style="width: 100%;  height:140px; margin-top:30px;" class="ServiceNoteTitle">
                    <span>类型</span>
                    <ul class="price-p">
                        <li
                           :class="{on:items === filterType }"
                           @click="handleNameClick(items)"
                           v-for="items in typess"
                        >{{items}}</li>
                    </ul>
                </div>
                <div class="price-footer">
                    <div class="price-footer-left"
                         @click="closerButton"
                    >重置</div>
                    <div class="price-footer-right"
                         @click="handleBtnClick()"
                    >确定</div>
                </div>
            </div>
         </CustomPopup>
        <router-link to="/room">
            <div
                    class="btn-search"
            >查询房间</div>
        </router-link>

    </div>
</template>

<script>
    import CustomPopup from '../../../components/CustomPopup/index'
    const cityOptions = [];
    export default {
        name: "Price",
        components: {
            CustomPopup
        },
        data() {
            return {
                prices:['100以下','100-300','300-500','500以上'],
                typess:['单人间','双人房','大床房','套房'],
                filterCost:'',
                filterType:'',
                showCustomPopup:true
            }
        },
        methods: {
            showCustomPopupClick() {
                this.$refs.CustomPopupRef.showCustom();
            },
            handleColerBtnClick() {
                this.$refs.inputHTML.value='请输入价格/房型';
            },
            closerButton() {
                this.filterType = '';
                this.filterCost = '';
            },
            handlePriceClick(cost) {
                this.cost=cost
                if (this.filterCost === this.cost) {
                    this.filterCost = '';
                } else {
                    this.filterCost = this.cost;
                }
            },
            handleNameClick(rtype) {
                this.rtype=rtype
                if (this.filterType ===  this.rtype) {
                    this.filterType ='';
                } else {
                    this.filterType =  this.rtype;

                }
            },
            handleBtnClick(){
                if(this.cost!==''&&this.rtype!==''){
                    this.$refs.inputHTML.value=this.rtype+'/'+ this.cost;
                }else{
                    this.$refs.inputHTML.value='请输入价格/房型'
                }
                this.$refs.CustomPopupRef.maskClick();
        }
        }
    }
</script>

<style lang="stylus" scoped>
    .price
        margin-top 10px
        width 100%
        height 2.8rem
        .price-content
            margin-left .20rem
            width 93.8%
            height 1rem
            border solid 1px #F2F3F4
            text-align center
            top 0
            left 0
            right 0
            bottom 0
            .price-content-input
                font-family iconfont
                margin-top .12rem
                line-height .60rem
                width 80%
                height 70%
                color: #ccc;
                display inline-block
                font-size .33rem
            .price-content-icon
                font-size .48rem
                position: absolute;
                right: 12px;
                color #555555
                top: 50%;
                margin-top .5rem
    .PoperContentView {
        height: 8rem;
        color #999
        background: #fff;
        font-size .36rem
    }
    .ServiceNoteTitle {
        width 100%
        border-color solid 1px red
        height: 1.8rem;
        text-indent .2rem
        line-height: 1rem;
    }
    .ServiceNoteTitle span{
        display block
    }
    .price-p li{
        text-indent initial
        line-height 30px
        width 60px
        height 30px
        text-align center
        font-size 14px
        float: left;
        margin: .1rem
        padding: .1rem .14rem;
        background: #f7f7f7;
        border-radius: .15rem;
        border: .01rem solid gainsboro;
    }
    .price-p li.on{
        background: #009688;
        border: 1px solid #009688;
        color: #fff;
    }

    .closerButton {
        position: absolute;
        right: .1rem;
    }
    .price-footer{
        width 100%
        margin-top .24rem
        height .48rem
        display: flex;
        font-size: 15px;
    }
    .price-footer-left{
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        text-align: center;
        height: 48px;
        width 175px
        line-height: 48px;
        color: #009688;
        background-color: #fff;
    }
    .price-footer-right{
        line-height: 48px;
        height: 48px;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        text-align: center;
        flex: 1;
        background: linear-gradient(270deg,#009688,#009688);
        color: #333;
    }
    .btn-search{
        margin-top: 20px;
        margin-left 15px
        text-align: center;
        color: #fff;
        border-radius: 4px;
        background: -webkit-linear-gradient(right,#009688,#009688);
        height: 44px;
        width 90%
        line-height: 44px;
        font-size: 18px;
        box-shadow: 0 2px 4px #009688;
    }
</style>