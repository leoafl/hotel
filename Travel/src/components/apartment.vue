<template>
    <div>
        <router-link :to="'/apartment/'+info.id">
        <div
                class="apm-item border-bottom"
                :key="info.id"
        >
            <div class="img-box" >
                <img :src="info.img" alt="">
            </div>
            <div class="room-info">
                <h2>{{info.name}}</h2>
                <p>{{info.msg}}</p>
            </div>
            <div class="price-info">
                <p>
                    <span>￥</span>
                    <span>{{info.cost}}</span>
                </p>
                <button>预订</button>
            </div>
        </div>
        </router-link>
    </div>
</template>

<script>
    export default {
        name: "apartment",
        props:{
            info:Object
        }
    }
</script>

<style lang="stylus" scoped>
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
          text-indent 10px
          font-size: .36rem;
          color: #050202;
          overflow: hidden;
      }
      .room-info p{
          color #999
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
          color: #73CAB7;
          text-align: center;
          background: #f7f7f7;
      }
      .price-info p span{
          font-size .40rem
      }
      .price-info button{
          font-size .32rem
          color #73CAB7
      }
</style>