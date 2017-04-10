<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
               
                <form @submit.prevent="addEmployee">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Name of Employee" v-model="employeesData.name">
                        <span class="text-danger">{{errors.name?errors.name[0]:""}}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Occupation</label>
                        <input type="text" class="form-control" id="" placeholder="Occupation" v-model="employeesData.body">
                        <span class="text-danger">{{errors.body?errors.body[0]:""}}</span>

                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        http: {
            root: '/root',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        data(){
            return {
            employeesData:{ 
                name:'',
                body:''
            },

            errors:{}

            }
           
        },
        methods:{
            addEmployee(){
                axios.post('employees',this.employeesData)
                .then(response=>{
                    this.employeesData="";
                    this.errors="";
                    this.$router.push('/');
                })
                .catch(error=>{
                    this.errors=error.response.data;
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
