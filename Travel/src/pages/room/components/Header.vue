<template>
    <div class="header">
        <router-link tag="div" to="/search"  class="header-abs" >
            <span class="iconfont header-abs-back">&#xe624;</span>
            房间选择
        </router-link>
    </div>
</template>

<script>

    export default {
        name: "Header"
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

</style>