<template>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="card-title">Cadastrar Estudantes </h3>
                <div class="card-tools">
                      <i class="fas fa-users"></i>
                </div>
            </div>

                <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" >
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" >
   </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">celular</label>
    <input type="text" class="form-control" id="exampleInputEmail1" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<footer class="main-footer-fluid">
<strong>By Eng Matimbe Jose , Justino . MSC</strong>
</footer>
</div>
</div>
</template>

<script>
export default {
    name:'create-estudantes',

}
</script>
