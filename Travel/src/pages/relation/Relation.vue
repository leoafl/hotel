<template>
    <div>
        <Relation-header></Relation-header>
        <Relation-list></Relation-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
    import RelationHeader from './components/Header'
    import RelationList from './components/List'
    // import ServicePower from './components/Power'
    export default {
        name: 'Relation',
        components: {
            RelationHeader,
            RelationList
            // ServicePower
        }
    }
</script>
<style lang="stylus" scoped>
</style>
