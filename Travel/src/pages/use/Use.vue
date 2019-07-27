<template>
    <div>
        <Use-header></Use-header>
        <Use-list></Use-list>
        <!--<service-power></service-power>-->
    </div>
</template>
<script>
import UseHeader from './components/Header'
import UseList from './components/List'
// import ServicePower from './components/Power'
export default {
  name: 'Use',
  components: {
    UseHeader,
    UseList
    // ServicePower
  }
}
</script>
<style lang="stylus" scoped>
</style>
