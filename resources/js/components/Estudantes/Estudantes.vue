<template>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="card-title">Lista de Estudantes <small v-if="status">{{ status }}</small></h3>
                <div class="card-tools">
                      <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="card-body table-responsive p-0" style="height: 340px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                     <!-- <th>id</th> -->
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Accoes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="estudante in estudantes" :key="estudante.id">
                    <!-- <td>{{ estudante.id }}</td> -->
                    <td>{{ estudante.name }}</td>
                    <td>{{ estudante.email }}</td>
                    <td>{{ estudante.celular }}</td>
                    <td>
                        <button class="btn btn-primary btn-xs"><i class="fas fa-eye"></i> Ver</button>
                        <a :href="`/estudantes/${estudante.id}/edit`" class="btn btn-success btn-xs"><i class="fas fa-pen"></i> Editar</a>
                        <button @click="deleteEstudantes(estudante.id)" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Apagar</button>
                    </td>
                    </tr>
                  </tbody>
                  <a class="btn btn-danger" href="/estudantes/create" role="button"> <i class="fas fa-file-export"></i> Cadastrar Estudante</a>
                </table>
            </div>
        <footer class="main-footer-fluid">
            <strong>By Eng Matimbe Jose , Justino . MSC</strong>
        </footer>
            </div>
        </div>        
</template>

<script>
import axios from 'axios'




export default {
    name: 'Estudantes',
    props: ['id'],
    components: {
         
    },

    data() {
        return {
            //vou comencar com o array vazio
            estudantes: [],
            formData: {
                id: '',
                name: '',
                phone: '',
                email: '',
            },
            status: false
        }
    },
    methods: {
        getEstudantes() {
            axios.get('http://127.0.0.1:8000/getestudantes')
            .then((response) => {
                console.log(response);
                this.estudantes = response.data.estudantes
            })
        .catch((error)=> {
            console.log(error);
        })
        },
        deleteEstudantes(id) {
            axios.delete(`http://127.0.0.1:8000/estudantes/${id}`)
            .then((response) =>{
                this.status = response.data.sucess
                this.getEstudantes()
            })
            .catch((error) => {
                console.log(error)

            })

        }
       
    },

    mounted() {
        this.getEstudantes()
      
        
    
    }, created() {

    }, watch: {
        
    }
}
</script>
