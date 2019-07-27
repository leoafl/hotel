<template>
    <div>
        <service-header></service-header>
        <service-list></service-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
import ServiceHeader from './components/Header'
import ServiceList from './components/List'
// import ServicePower from './components/Power'
export default {
  name: 'Service',
  components: {
    ServiceHeader,
    ServiceList
    // ServicePower
  }
}
</script>
<style lang="stylus" scoped>
</style>
