<template>
    <div>
        <Message-header></Message-header>
        <Message-list></Message-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
    import MessageHeader from './components/Header'
    import MessageList from './components/List'
    // import ServicePower from './components/Power'
    export default {
        name: 'Message',
        components: {
            MessageHeader,
            MessageList
            // ServicePower
        }
    }
</script>
<style lang="stylus" scoped>
</style>
