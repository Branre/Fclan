<template>
	<section>
		<section >


        <section v-for="clan in clans" class="posts container">
		<article  class="post">
            
				
		
		<div class="content-post">
			
			<div  class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 464 }'>
			<div v-for="photo in clan.photos.slice(0, 3)">
				<figure bind:class="grid-item grid-item--height2">
				<img class="img-responsive" :src="photo.url"></figure>		
			</div>		
		</div>
			<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">{{ clan.published_dat }}</span>
					</div>
					<div class="post-category">
						<span class="category text-capitalize">{{clan.user.name}}</span>
					</div>
				</header>
				<h1 v-text="clan.titulo"></h1>
				<div class="divider"></div>
				<!-- <p>$clan->descripcion</p>-->
				<p v-text="clan.descripcion"></p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<router-link href="#" class="text-uppercase c-green">Ver mas</router-link>
					</div>						
				</footer>
				<br>
				<div class="tags container-flex">
					<span class="tag c-gray-1 text-capitalize" v-for="juego in clan.juego">
					<a href="#">
					{{ juego.nombre}} </a></span>
				</div><br>
				<div class="tags container-flex">
					<span class="tag c-gray-1 text-capitalize" v-for="pais in clan.pais">
					<a href="#">
					{{ pais.nombre}} </a></span>
				</div>		
			</div>
		</article>
	</section>
			</section>
</section>
</template>
<script>
export default {
	data(){
		return{
			clans:[]
		}
	},
	mounted(){
		axios.get('/api/clans')
		.then(res => {
			this.clans = res.data.data;
		})
		.catch(err=>{
			console.log(err);
		});
	}
}
</script>
<style>
  .example-slide {
    align-items: center;
    background-color: #666;
    color: #999;
    display: flex;
    font-size: 1.5rem;
    justify-content: center;
    min-height: 10rem;
  }
</style>
<!--
				<figure v-for="photo in clan.photos.slice(0, 4)"  class="grid-item grid-item--height2">
				<img :src="photo.url" class="img-responsive" alt=""></figure>			-->