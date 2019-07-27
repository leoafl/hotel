<template>
    <div class="wrapper">
        <swiper :options="swiperOption">
            <swiper-slide v-for="item of swiperList" :key="item.id">
                <img class="swiper-img" :src="item.imgUrl"/>
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
    </div>

</template>

<script>
    export default {
        name: 'PersonSwiper',
       data () {
            return {
                swiperOption: {
                    pagination:'.swiper-pagination',
                    loop:true
                },
                swiperList: [{
                    id: '0001',
                    imgUrl:'http://localhost/PHPstormProject/TP_hotel/Hotel/Public/images/AIIT7.jpg'
                },{
                    id: '0002',
                    imgUrl:'http://localhost/PHPstormProject/TP_hotel/Hotel/Public/images/AIIT17.jpg'
                }]
            }
        }
    }
</script>

<style lang="stylus" scoped>
  .wrapper >>> .swiper-pagination-bullet-active
    background:#fff
  .wrapper
   overflow:hidden
   width:100%
   height: 0
   margin-top:0.5rem
   padding-bottom:31.25%
   .swiper-img
     width:100%
     height:2rem
</style>
