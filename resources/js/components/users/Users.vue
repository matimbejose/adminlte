<template>
    <div class="container-fluid">
         <!-- Formulário para registar novos usuários -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Registar </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" action="#" @submit.prevent="saveUsers">
                            <div class="form-group">
                                <label for="name"> Nome Completo </label>
                                <input type="text" v-model="formData.name" class="form-control" id="name" placeholder="Digite o nome">
                            </div>
                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input type="email" v-model="formData.email" class="form-control" id="email" placeholder="Digite o email">
                            </div>
                         <div class="form-group">
                          <label for="password"> Senha </label>
                          <input type="password" v-model="formData.password" class="form-control" id="password" placeholder="Senha">
                         </div>
                         <button type="submit" class="btn btn-warning">Registar</button>
                        </form>
                    </div> 
                  </div>
                
            </div>
        </div>
        <div class="row justify-content-center">
        <!-- Tabela com a lista de usuários -->
        <div class="col-md-12">
            <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Lista Usuários</h3>
                <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body table-responsive p-0" style="height: 340px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email}}</td>
                    <td>
                        <button class="btn btn-primary btn-xs"><i class="fas fa-lock"></i></button>
                        <button class="btn btn-success btn-xs"><i class="fas fa-pen"></i></button>
                        <button @click="deleteUsers(user.id)" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                    </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
        </div>
         </div>   
        <footer class="main-footer-fluid">
           <strong>By Eng Matimbe Jose , Justino . MSC</strong>
        </footer>
    </div>
    
</template>

<script>
import axios from 'axios'

export default {
  name: 'users',
  props: ['id'],
  data() {
      return {
        users: [],
        formData: {
            id: '',
            name: '',
            email: '',
            password: ''
        },
        status: false
      }
  },
  methods: {
      getUsers() {
        axios.get('http://127.0.0.1:8000/getusers')
            .then((response) => {
                console.log(response);
                this.users = response.data.users
            })
            .catch((error) => {
                console.log(error);
            })
      },
      saveUsers() {
        axios.post('http://127.0.0.1:8000/users',this.formData)
            .then((response) => {
                console.log(response);
                this.status = response.data.success
                this.getUsers()
            })
            .catch((error) => {
                console.log(error);
            })
      },
      deleteUsers(id){
          axios.delete(`http://127.0.0.1:8000/users/${id}`)
          .then((response)=>{
              this.status = response.data.success
              this.getUsers()
          })
          .catch((error) => {
                console.log(error);
            })
      },


  },
  mounted() {
    this.getUsers()
  }, created() {

  }, watch: {

  }
}
</script>
