<template>
    <div>
        <section class="posts container">
	<article class="post">
        <div  class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 464 }'>
			<div v-for="photo in clan.photos.slice(0, 3)" :key="photo">
				<figure bind:class="grid-item grid-item--height2">
				<img class="img-responsive" :src="photo.url"></figure>		
			</div>		
			</div>

		<div class="content-post">
			<header class="container-flex space-between">
				<div class="date">
					<span class="c-gray-1">{{ clan.published_date }}</span>
				</div>
				<div class="post-category">
					<span class="category text-capitalize">{{ clan.user.name }}</span>
				</div>
			</header>
			<h1>{{ clan.titulo }}</h1>
			<div class="divider"></div>
			<h3>Descripcion:</h3>
			<p>{{ clan.descripcion }}</p>
			<div class="divider"></div>
			<h3>Requisitos:</h3>
			<p>{{ clan.requisitos }}</p>
			<div class="divider"></div>
			<h3>Edad minima:</h3>
			<p>{{ clan.edadminima }}</p>
			<h3>Edad maxima:</h3>
			<p>{{ clan.edadmaxima }}</p>
			<div class="divider"></div>
			<h3>Discord del clan:</h3>
			<p>{{ clan.discord }}</p>
			<h3>Whatsapp del clan:</h3>
			<p>{{ clan.whatsapp}}</p>
			<br>
			<div class="tags container-flex">
                <span class="tag c-gray-1 text-capitalize" v-for="juego in clan.juego" :key="juego">
					<a href="#">
					{{ juego.nombre}} </a>
                </span>
			</div><br>
			<div class="tags container-flex">
                <span class="tag c-gray-1 text-capitalize" v-for="pais in clan.pais" :key="pais">
					<a href="#">
					{{ pais.nombre}} </a>
                </span>
			</div>		
		</div>
	</article>
</section>
	
    </div>
</template>
<script>
export default {
    data(){
        return{
            clan: {}
        }
    },
    mounted(){
        axios.get('/api/clan/'+ this.$route.params.id)
        .then(res => {

			this.clan = res.data;
		})
		.catch(err=>{
			console.log(err);
		});
    }

}
</script>