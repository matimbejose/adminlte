<template>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="card-title">Cadastrar Estudantes <small v-if="status">{{status}}</small></h3>
                <div class="card-tools">
                      <i class="fas fa-users"></i>
                </div>
            </div>

                <form action="#" @submit.prevent="save">
  <div class="mb-3">
    <label  class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" placeholder="imforme o nome do estudante" v-model="formData.name">
  </div>

   <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" id="email" placeholder="imforme a email do estudante" v-model="formData.email">
   </div>

   <div class="mb-3">
    <label class="form-label">celular</label>
    <input type="text" class="form-control" id="celular"  placeholder="imforme o celular do estudante" v-model="formData.celular">
  </div>

  <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"></i> Cadastrar</button>
  <a class="btn btn-primary" href="/estudantes" role="button"><i class="fas fa-list-ul"></i> Lista de Estudantes</a>
</form>
<footer class="main-footer-fluid">
<strong>By Eng Matimbe Jose , Justino . MSC</strong>
</footer>
</div>
</div>
</template>

<script>
import axios from 'axios'
export default {
    name:'create-estudantes',
    props: ['id'],
    data() {
      return {
        formData: {
          name: '',
          email: '',
          celular: ''
        },
        status: false 

      } 
    },

    methods: {
      save() {
        axios.post('http://127.0.0.1:8000/estudantes', this.formData)
        .then((response) => {
          this.status = response.data.sucess

        })
      }

    },

    mounted() {

    }
}
</script>
