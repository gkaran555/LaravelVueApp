<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <button class="btn btn-primary" @click.prevent="fetchIt">Populate database</button>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Ocupation</th>
                      </tr>
                    </thead>
                    <tbody v-for='employee in employees'>
                       <tr class="warning">
                        <td>{{employee.name}}</td>
                        <td>{{employee.body}}</td>
                       </tr>        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                employees:[]   
            }
        },
        methods:{
            fetchIt(){
                this.loading=true;
                axios.get('employees').then((response)=>{this.employees=response.data; this.loading=false});
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
