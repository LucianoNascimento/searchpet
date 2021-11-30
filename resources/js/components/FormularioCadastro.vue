<template>
    <div class="flex justify-center">
        <form class="w-full" @submit="login" action="" method="post" novalidate="true">
            <label>Usuário</label>
            <input type="text" id="nome" class="w-full mb-2" v-model="nome">
<!--            {{errors}}-->
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
    name: "FormularioCadastro.vue",

    data() {
        return {
            errors : null,
            nome : null,
            email : null,
            password: null,
        }
    },
    methods:{
        login:function (e){
            // this.errors = []
            if(!this.nome) {
                this.errors.push('O nome não pode ser vazio')
            }
            if(!this.email) {
                this.errors.push('O Email não pode ser vazio')
            }

            e.preventDefault();
            axios.post('api/cadastro',{
                nome: this.nome,
                email: this.email,
                password: this.password,
            }).then(function (response){
                if (response.status == 201){
                    alert('usuario cadastrado com sucesso')
                    window.location.href = '/login';
                }
            }).catch(function (error) {
                alert('deu errado');
            });

        }
    }
}
</script>

