<template>
    <div class="search">
        <search-header></search-header>
        <search-swiper></search-swiper>
        <search-time></search-time>
        <search-price></search-price>
        <search-wrap></search-wrap>
    </div>
</template>

<script>
    import SearchHeader from './components/Header'
    import SearchSwiper from './components/Swiper'
    import SearchTime from './components/Time'
    import SearchPrice from './components/Price'
    import SearchWrap from './components/Wrap'
    export default {
        name: "Search",
        data(){
            return{

            }
        },
        components:{
            SearchHeader,
            SearchSwiper,
            SearchTime,
            SearchPrice,
            SearchWrap,
        }
    }
</script>

<style lang="stylus" scoped>
      .search
          height 667px
</style>