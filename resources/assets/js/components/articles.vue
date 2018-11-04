<template>
<div class="row">
	

	<div class="col-sm" v-for="pedido in pedidos">
		<div class="card text-center" style="width: 18rem;" >
			<img class="card-img-top mx-auto d-block" 
			src="images/" style=" height=500px; width=400px;background-color: #EFEFEF; margin:8px;" alt="">
				<div class="card-body">
				<h5 class="card-tittle">{{pedido.name}}</h5>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
						
						<a href="/pedido/" class="btn btn-primary"> Ver mas...</a>
	
				</div>
		</div>
	</div>

	
</div>
</template>
<script >
	export default{
		data(){
			return{
				pedidos:[
				{id:1,name:"asdasd"},
				{id:1,name:"fgff"},
				{id:1,name:"vvvvvd"}

				]
			}
		},
		mounted(){
			axios.get('http://localhost:8000/pedido').then(response=>(this.pedidos=response.data))
		}
	}
</script>