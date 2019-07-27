<template>
<div>
<div class="title">热销推荐</div>
    <ul>
        <li class="item border-bottom" v-for="item of recommenList" :key="item.id">
            <img class="item-img" :src='item.imgUrl'/>
            <div class="item-info">
                <p class="item-title">{{item.title}}</p>
                <p class="item-desc">{{item.desc}}</p>
                <button class="item-button">查看详情</button>
            </div>
        </li>
    </ul>
</div>
</template>

<script>
    export default {
        name: 'PersonRecommen',
        data () {
            return{
                recommenList: [{
                    id: '0001',
                    imgUrl:'https://img1.qunarzz.com/des-mis/ad/1901/ed/3f2d5060e06ed0.jpg',
                    title:'节后全家出游季',
                    desc:'浪漫的季节，一起漫步浪漫的赭山公园'
                },{
                    id: '0002',
                    imgUrl:'https://img1.qunarzz.com/des-mis/ad/1902/3e/a8914898ad0c07.jpg',
                    title:'酒店省钱住法攻略',
                    desc:'用最少的钱，住五星级品质大酒店'
                },{
                    id: '0003',
                    imgUrl:'https://img1.qunarzz.com/des-mis/ad/1809/c5/3d500946bb6ba2.jpg',
                    title:'完美服务等你来享受',
                    desc:'精选酒店，温馨的房间，完美的服务'
                },
                ]
            }
        }
    }
</script>

<style lang="stylus" scoped>
    @import '~styles/mixins.styl'
    .title
     line-height:.8rem
     background:#eee
     text-indent:.2rem
    .item
     display:flex
     overflow:hidden
     height:1.9rem
     .item-img
      width:3rem
      height:1.7rem
      padding:.1rem
     .item-info
      flex:1
      padding:.1rem
      min-width:0
      .item-title
       line-height:.54rem
       font-size:.32rem
       ellipsis()
      .item-desc
       line-height:.4rem
       color:#ccc
       ellipsis()
      .item-button
       line-height:.44rem
       margin-top:.16rem
       background:#ff9300
       padding: 0 .2rem
       border-radius:.06rem
       color:#fff

</style>
