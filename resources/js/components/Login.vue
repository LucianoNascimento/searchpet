<template>
    <div class="md:w-3/5 bg-login bg-center bg-blend-exclusion bg-no-repeat bg-cover md:m-auto">
        <div class="flex justify-center text-5xl font-sans pt-4">{{mensagem}}</div>
        <div class="flex justify-center items-center h-screen rounded-2xl">
            <div class="md:w-2/5 quadrado bg-gray-300 rounded-2xl p-4 py-8 md:-mt-32">

                <div class="flex justify-center">
                    <form class="w-full" @submit="login" action="" method="post" novalidate="true">
                        <div>
                            <label>Usuário</label>
                            <input type="text" id="usuario" name="email" class="w-full mb-2" v-model="email">
                            <span>{{email}}</span>
                        </div>
                        <div>
                            <label>Senha</label>
                            <input class="w-full mb-2" type="password" name="password" id="senha" v-model="password">
                            <span>{{password}}</span>
                        </div>
                        <a href="/cadastro">Fazer o Cadastro</a>
                        <div class="flex justify-end">
                            <button class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>

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
<script>
export default {
    data() {
        return {
            error: [],
            email : null,
            password: null,
        }
    },
    methods:{
        login:function (e){
            e.preventDefault();
            axios.post('/api/login',{
                email: this.email,
                password: this.password
            })
                .then(function (response){
                    if (response.status == 200){
                        window.location.href = 'https://searchpet.dev/logado';
                    }
                }).catch(function (error) {
                alert('deu errado');
            });


        }
    }
}
</script>
