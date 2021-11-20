<template>
    <div class="flex justify-center">
        <form class="w-full" @submit="login" action="" method="post" novalidate="true">
            <div>
                <label>Usuário</label>
                <input type="text" id="usuario" class="w-full mb-2" v-model="usuario">
                <span>{{usuario}}</span>
            </div>
            <div>
                <label>Senha</label>
                <input class="w-full mb-2" type="password" id="senha" v-model="password">
                <span>{{password}}</span>
            </div>
            <div>
                <button class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Formulario.vue",

    data() {
        return {
            error: [],
            usuario : null,
            password: null,
        }
    },
    methods:{
        login:function (e){
            e.preventDefault();
            axios.post('https://searchpet.dev/api/login',{
                usuario: this.usuario,
                password: this.password
            })
            .then(response=>(console.log(response)))

        }
    }
}
</script>

