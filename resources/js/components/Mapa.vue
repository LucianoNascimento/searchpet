<template>
    <div>
        <gmap-map :zoom= "14" :center="center" style="width:100%;  height: 600px;">
            <!--        <gmap-marker :lat= "-8.0566717", :lng="-34.8994452" ></gmap-marker>-->
            <gmap-info-window :position="position" class="gm-ui-hover-effect"
            >

                <span>fasdfsafdsfafd</span>
                <img src="https://placekitten.com/100/150">
            </gmap-info-window>
        </gmap-map>
    </div>
</template>

<script>
export default{
    data() {
        return {
            center: this.mapa(),
            position: this.marcadores(),
            coordenadas: [],
            hover:false
        }
    },
    mounted() {
        axios.get('/api/endereco').then((response)=>{this.coordenadas = response.data[0]})
    },
    methods:{
        mapa()
        {
            return {lat: -8.05428, lng: -34.8813}
        },
        marcadores()
        {
            return {lat: -8.0566717, lng: -34.8994452}
        }
    },
}
</script>

<style>
.gm-ui-hover-effect{
    opacity: 0
}
</style>
