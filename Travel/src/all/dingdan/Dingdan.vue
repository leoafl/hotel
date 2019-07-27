<template>
    <div>
        <dingdanheader></dingdanheader>
        <dingdanbody></dingdanbody>
        <dingdanfooter></dingdanfooter>
    </div>
</template>

<script>
    import dingdanheader from '../../components/Header.vue'
    import dingdanbody from './components/Body.vue'
    import dingdanfooter from '../../pages/home/components/Footer.vue'
    export default {
        name: "dingdan",
        components: {
            dingdanheader,
            dingdanbody,
            dingdanfooter
        }
    }
</script>

<style lang="stylus" scoped>

</style>