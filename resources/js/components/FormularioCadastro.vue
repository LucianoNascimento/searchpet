<template>
    <div class="flex justify-center">
        <form class="w-full" @submit="login" action="" method="post" novalidate="true">
            <label>Usuário</label>
            <input type="text" id="nome" class="w-full mb-2" v-model="nome">
            <div v-for="error in errors" :key="errors.nome">
                {{error.nome}}
            </div>
            <div>
                <label>Email</label>
                <input type="text" id="email" class="w-full mb-2" v-model="email">
            </div>
            <div>
                <label>Senha</label>
                <input class="w-full mb-2" type="password" id="senha" v-model="password">
            </div>
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
            errors : [],
            nome : null,
            email : null,
            password: null,
        }
    },
    methods:{
        login(e){
            e.preventDefault();
            axios.post('api/cadastro',{
                nome: this.nome,
                email: this.email,
                password: this.password,
            }).then(function(response) {
                if (response.status == 201){
                    alert('usuario cadastrado com sucesso')
                    location.href = '/login';
                }
            }).catch((error)=> {
                this.errors = [error.response.data]
            });

        }
    }
}
</script>

