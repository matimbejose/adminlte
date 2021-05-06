<template>
    <div>
        <table class="table">
            <thead>
                <th>Nome </th>
                <th>Celular </th>
                <th>Pronvincia </th>
                <th>Email</th>
                 </thead>
                 <tbody>
                <tr v-for="student in students" :key="student.name">
                    <td>{{ student.name }}</td>
                    <td>{{ student.phone}}</td>
                    <td>{{ student.province}}</td>
                    <td>{{ student.email}}</td>
                </tr>
    </tbody>
    </table>
    </div>
</template>
<script>
import axios from 'axios'
export default {
  name: 'customers',
  props: ['name'],
  data() {
      return {
        students: []
      }
  },
  methods: {
      getCustomers() {
        axios.get('http://127.0.0.1:8000/getcustomers')
            .then((response) => {
                console.log(response);
                this.students = response.data.students
            })
            .catch((error) => {
                console.log(error);
            })
      },
  },
  mounted() {
    this.getCustomers()
  }, created() {
  }, watch: {
     
  }
}
</script>

<style scoped>
</style>