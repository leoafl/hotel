<template>
    <div class="header">
        账号关联
        <router-link to="/revise">
            <div class="iconfont header-back">&#xe624;</div>
        </router-link>
    </div>
</template>

<script>
export default {
  name: 'RelationHeader'
}
</script>

<style lang="stylus" scoped>
    @import "~styles/varibles.styl"
    .header
        position: relative
        overflow:hidden
        height:$headerHeight
        line-height:$headerHeight
        text-align:center
        color:#fff
        font-size:.32rem
        background :$bgColor
        .header-back
            position :absolute
            top:0
            left:0
            width: .64rem
            text-align:center
            font-size:.4rem
            color:#fff
</style>
