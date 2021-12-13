<template>
    <div class="flex justify-center">
        <form enctype="multipart/form-data" class="w-full" @submit="cadastroAnimais" action="" method="post" novalidate="true">
            <div>
                <label>Nome</label>
                <input class="w-full mb-2" type="text" id="endereco" v-model="nome_animal">
            </div>
            <div>
                <label>Sexo</label>
                <input class="w-full mb-2" type="tex" id="sexo_animal" v-model="sexo_animal">
            </div>

            <div>
                <label>Cor</label>
                <input class="w-full mb-2" type="text" id="cor_do_animal" v-model="cor_do_animal">
            </div>
            <div>
                <label>Porte</label>
                <input class="w-full mb-2" type="text" id="porte_animal" v-model="porte_animal">
            </div>
            <div>
                <label>Imagem</label>
                <input type="file" class="w-full mb-2" name="filename" @change="envioImagemAnimal($event)">
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
            nome_animal: null,
            sexo_animal: null,
            cor_do_animal: null,
            porte_animal: null,
            imagem_animal: null,
        }
    },
    methods:{
        envioImagemAnimal(event){
            this.imagem_animal = event.target.files[0]
        },
        cadastroAnimais(e){
            e.preventDefault();
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }
            let form =  new FormData()
            form.append('nome_animal' , this.nome_animal)
            form.append('sexo_animal' , this.sexo_animal)
            form.append('cor_do_animal' , this.cor_do_animal)
            form.append('porte_animal' ,this.porte_animal)
            form.append('imagem_animal' , this.imagem_animal)
            axios.post('api/animais', form , config).then(function(response) {
                if (response.status == 201){
                    alert('Animal cadastrado com sucesso')
                    location.href = '/login';
                }
            }).catch((error)=> {
                this.errors = [error.response.data]
            });

        }
    }
}
</script>

