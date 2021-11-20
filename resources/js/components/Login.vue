<template>
    <div class="max-w-screen-xl m-auto">
        <div class="flex justify-center text-5xl font-sans">{{mensagem}}</div>
        <div class="sm:flex justify-between flex-wrap items-center">
            <div class="sm:w-1/2">
                <img :src="imagem" alt="imagem" class="w-full"/>
            </div>
            <div class="sm:w-1/2 quadrado bg-gray-300 rounded-2xl p-4 h-72">
                <formulario/>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            mensagem: 'Search Pet',
            imagem: '/image/login_image.jpg',
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
