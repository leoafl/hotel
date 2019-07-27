<template>
    <div>
        <Design-header></Design-header>
        <Design-list></Design-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
    import DesignHeader from './components/Header'
    import DesignList from './components/List'
    // import ServicePower from './components/Power'
    export default {
        name: 'Design',
        components: {
            DesignHeader,
            DesignList
            // ServicePower
        }
    }
</script>
<style lang="stylus" scoped>
</style>
