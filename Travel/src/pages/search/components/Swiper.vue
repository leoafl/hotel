<template>
    <div class="swiper">
        <swiper :options="swiperOptions">
            <!-- slides -->
            <swiper-slide v-for="item of swiperList" :key="item.id">
                <img :src="item.imgUrl" class="swiper-img">
            </swiper-slide>
            <!-- Optional controls -->
            <div class="swiper-pagination"  slot="pagination"></div>
        </swiper>
    </div>
</template>

<script>
    export default {
        name: "SearchSwiper",
        data() {
            return {
                swiperOptions: {
                    pagination:'.swiper-pagination',
                    loop:true
                },
                swiperList:[{
                    id:'0001',
                    imgUrl:'https://userimg.qunarzz.com/imgs/201812/15/C._M0DCiiiFN-lYycCi480s.jpg'
                },{
                    id:'0002',
                    imgUrl:'https://himg1.qunarzz.com/imgs/201607/22/C._M0DCiyek_E2RiO-i1024.jpg'
                },{
                    id:'0003',
                    imgUrl:'https://himg1.qunarzz.com/imgs/201607/22/C._M0DCiyek_X2tIHLi1024.jpg'
                },{
                    id:'0004',
                    imgUrl:'https://himg1.qunarzz.com/imgs/201812/15/C._M0DCiigpvje0ItUi1024.jpg'
                }
                ]
            }
        }
    }
</script>

<style lang="stylus" scoped>
       .swiper>>>.swiper-pagination-bullet-active
           background :#fff !important
       .swiper
          height 0
          overflow hidden
          padding-bottom 60%
          .swiper-img
            width 100%
            height 230px
</style>