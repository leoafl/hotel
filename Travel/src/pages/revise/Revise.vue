<template>
    <div>
        <Revise-header></Revise-header>
        <Revise-list></Revise-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
    import ReviseHeader from './components/Header'
    import ReviseList from './components/List'
    // import ServicePower from './components/Power'
    export default {
        name: 'Revise',
        components: {
            ReviseHeader,
            ReviseList
            // ServicePower
        }
    }
</script>
<style lang="stylus" scoped>
</style>
