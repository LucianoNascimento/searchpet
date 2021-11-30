<template>
    <div class="md:w-3/5 bg-login bg-center bg-blend-exclusion bg-no-repeat bg-cover md:m-auto">
        <div class="flex justify-center text-5xl font-sans pt-4">{{mensagem}}</div>
        <div class="flex justify-center items-center h-screen rounded-2xl">
            <div class="md:w-2/5 quadrado bg-gray-300 rounded-2xl p-4 py-8 md:-mt-32">
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
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}

</script>
<style scoped>
.bg-login{
    background-color: #463c3c;
}
</style>
