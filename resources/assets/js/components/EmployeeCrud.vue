<template>
    <div class="container">
    <div class="row text-center">
         <router-link to="/create" >
                  <a class="btn btn-primary">Create Employee</a> 
         </router-link>
    </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
             <div v-if="loading">Loading...</div>
                <div class="panel panel-default" v-for='employee in employees'>
                    <div @click="deleteIt(employee.id)" class="btn pull-right"><i class="fa fa-times"></i></div>
                    <div @click="editIt(employee.id)" class="btn pull-right"><i class="fa fa-pencil"></i></div>
                <form @submit.prevent="updateIt(employee.id)">
                    <div class="panel-heading">
                    <strong v-show="!showIt(employee.id)">{{employee.name}}</strong> 
                    <input style="width:200px" v-show="showIt(employee.id)" type="text" class="form-control" v-model="employeeEditData.name">
                    </div>

                    <div class="panel-body">
                        <span v-show="!showIt(employee.id)">{{employee.body}}</span>
                    <input v-show="showIt(employee.id)" type="text" class="form-control" v-model="employeeEditData.body">

                        
                    </div> 

                    <button class="btn btn-primary" type="submit" v-show="showIt(employee.id)">Ok</button>
                    <button class="btn btn-default" @click.prevent="editForm=false" v-show="showIt(employee.id)">Cancel</button>
                </form>
                   
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                employees:[],
                loading:false,
                editForm:"",
                employeeEditData:{name:'',body:''}
            }
        },
        methods:{
            editIt(employeeId){
                  this.employees.forEach((employee,i)=>{
                    if(employee.id==employeeId){
                        this.employeeEditData=employee;
                    }
                });

                return this.editForm=employeeId;
            },
            showIt(employeeId){
                if(this.editForm==employeeId){
                    return true;
                }
                return false;
            },
            updateIt(employeeId){
                axios.put('employees/'+employeeId,this.employeeEditData)
                .then(response=>{
                    console.log(response);
                    this.editForm=false;
                    this.employeeEditData="";
                    this.$router.push('/');
                })
                .catch(error=>{
                    console.log(error.response);
                })
            },
            deleteIt(employeeId){
                    let ok=confirm("are you sure?");
                    if(ok){
                        axios.delete('employees/'+employeeId).then(response=>{
                            console.log(response);
                                this.fetchIt();
                         });
                    }
            },
            fetchIt(){
                this.loading=true;
                axios.get('employees').then((response)=>{this.employees=response.data; this.loading=false});
            }
        },
        mounted() {
            this.fetchIt();
            
        }
    }
</script>


<style lang="sass" scoped>
    .text-center
         margin: 15px
    form 
       button
           margin-left: 15px
           margin-bottom: 10px



  

</style>