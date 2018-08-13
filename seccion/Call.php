<section id="cta" class="wrapper">
				<div class="inner">
					<h2><? echo $seccion['titulo']; ?></h2>
					<p><? echo $seccion['descripcion']; ?></p>
				</div>
			</section>

<style>
#cta {
 
  background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(/img/<? echo $seccion['foto']; ?>);}
</style>