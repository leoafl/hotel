<template>
    <div>
        <online-header></online-header>
        <online-container></online-container>
        <online-footer></online-footer>
    </div>
</template>

<script>
    import OnlineHeader from './components/Header'
    import OnlineContainer from './components/Container'
    import OnlineFooter from './components/Footer'
    // import axios from 'axios'
    export default {
        name: 'Online',
        components:{
            OnlineHeader,
            OnlineContainer,
            OnlineFooter
        },
        data(){
            return{

            }
        }
    }
</script>

<style>

    
</style>