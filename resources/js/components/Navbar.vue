<template>
    <div class="bg-gray-700 bg-hero bg-blend-overlay bg-cover bg-top h-screen bg-no-repeat altura">
        <nav class="flex items-center justify-between flex-wrap p-6 bg-gray-500 bg-blend-overlay bg-opacity-25">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                <span class="font-semibold text-xl tracking-tight">Menu</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-white border-teal-400 hover:text-black hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow sm:flex sm:justify-end sm:w-auto sm:items-center">
                <div class="text-sm sm:justify-self-end sm:mr-3">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4">
                        Início
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4">
                        Mapa
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4">
                        Animais
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 mr-4">
                        Recomendações
                    </a>
                </div>
                <div>
                    <a href="/login" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:bg-gray-400 mt-4 lg:mt-0">Entrar</a>
                </div>
            </div>
        </nav>
        <div class="caixa-titulo border-t-4 border-r-4 border-b-4 border-yellow-600 pt-8 pb-8 mt-16 ml-4 md:ml-16 md:mt-32 md:ml-32">
            <h1 v-html="nome" class="pl-2 text-black md:text-white text-2xl uppercase md:text-4xl md:-ml-16">{{nome}}</h1>
        </div>

        <div class="md:flex md:flex-row md:mt-64">

            <div class="w-full md:w-1/3 p-16 flex flex-col items-center">
                <div><img src="http://placekitten.com/200/300"></div>
                <h2 class="text-2xl text-center uppercase text-yellow-600 py-4">Animais Achados e Perdidos</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi assumenda beatae cumque fugiat minima praesentium quia! Culpa dolores laboriosam obcaecati perferendis? Blanditiis officiis repudiandae veritatis? Ad dolor laudantium minima soluta.100</p>
                <div class="text-center">
                    <button class="rounded-3xl bg-yellow-600 uppercase py-2 px-4 text-white text-center mt-4">acesse animais achados</button>
                    <button class="rounded-3xl bg-yellow-600 uppercase py-2 px-4 text-white text-center mt-4">acesse animais perdidos</button>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-16 flex flex-col items-center">
                <div><img src="http://placekitten.com/200/300"></div>
                <h2 class="text-2xl text-center uppercase text-yellow-600 py-4">Mapa para a adoção</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi assumenda beatae cumque fugiat minima praesentium quia! Culpa dolores laboriosam obcaecati perferendis? Blanditiis officiis repudiandae veritatis? Ad dolor laudantium minima soluta.100</p>
                <a href="/mapa" class="rounded-3xl bg-yellow-600 uppercase py-2 px-8 text-white text-center mt-4">acesse</a>
            </div>

            <div class="w-full md:w-1/3 p-16 flex flex-col items-center">
                <div><img src="http://placekitten.com/200/300"></div>
                <h2 class="text-2xl text-center uppercase text-yellow-600 py-4">feira para a adoção</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi assumenda beatae cumque fugiat minima praesentium quia! Culpa dolores laboriosam obcaecati perferendis? Blanditiis officiis repudiandae veritatis? Ad dolor laudantium minima soluta.100</p>
                <a href="/cadastro-animais" class="rounded-3xl bg-yellow-600 uppercase py-2 px-8 text-white text-center mt-4">acesse</a>
            </div>

        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            nome: "Sistema para a adoção<br/> de animais com suporte<br/> de geoprocessamento"
        }
    },
}

</script>

<style scoped>
.caixa-titulo{
    max-width: 500px;
}
.altura{
    height: 272px;
    background-position: 50% 50%;
}
@media (min-width: 769px) {
    .altura{
        height: 650px;
        background-position: 50% 85%;
    }
}
</style>
