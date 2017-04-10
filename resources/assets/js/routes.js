import VueRouter from 'vue-router';


let routes=[
{
	path:'/',
	component:require('./components/EmployeeCrud')
},
{
	path:'/about',
	component:require('./components/Table')
},
{
	path:'/vision',
	component:require('./components/List')
},
{
	path:'/create',
	component:require('./components/Form')
}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});