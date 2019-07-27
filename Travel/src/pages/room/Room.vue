l<template>
    <div>
    <room-header></room-header>
    <room-list></room-list>
    </div>
</template>

<script>
    import axios from 'axios'
    import RoomHeader from './components/Header'
    import RoomList from './components/List'
    export default {
        name: "room",
        components:{
            RoomHeader,
            RoomList,
        },
        mounted(){
            this.getRoomInfo()
        },
        methods:{
            getRoomInfo(){
                axios.get('/static/lib/room.json')
                    .then(this.getRoomInfoSucc)
            },
            getRoomInfoSucc(res){
                res=res.data
                if(res.ret && res.data){
                   const data=res.data
                    this.roomList=data.roomList
                }
            }

        }
    }
</script>

<style lang="stylus" scoped>

</style>