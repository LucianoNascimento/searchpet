<template>
    <div class="flex justify-center">
        <form class="w-full" @submit="buscaCep" action="" method="post" novalidate="true">
            <label>Cep</label>
            <input type="text" id="cep" class="w-full mb-2" v-model="cep">
            <div>
                <button class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cep : '',
        }
    },
    methods:{
        buscaCep(){
            axios.get('api/coordenadas',{
                cep: this.cep
            }).then((response)=>{
                console.log(response.data)
            })
        }
     }
    }
</script>

