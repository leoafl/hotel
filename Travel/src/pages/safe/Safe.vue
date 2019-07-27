<template>
    <div>
        <Safe-header></Safe-header>
        <Safe-list></Safe-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
   import SafeHeader from './components/Header'
   import SafeList from './components/List'
    // import ServicePower from './components/Power'
    export default {
        name: 'Safe',
        components: {
            SafeHeader,
            SafeList
            // ServicePower
        }
    }
</script>
<style lang="stylus" scoped>
</style>
