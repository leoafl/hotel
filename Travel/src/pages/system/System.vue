<template>
    <div>
        <System-header></System-header>
        <System-list></System-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
   import SystemHeader from './components/Header'
   import SystemList from './components/List'
    // import ServicePower from './components/Power'
    export default {
        name: 'System',
        components: {
            SystemHeader,
            SystemList
            // ServicePower
        }
    }
</script>
<style lang="stylus" scoped>
</style>
