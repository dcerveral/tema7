	<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1><? echo $seccion['titulo']; ?></h1>
					<p><? echo $seccion['subtitulo']; ?></p>
          	<? if ($seccion['url']){ ?>
						<a class="button" href="<? echo $seccion['url']; ?>" role="button"><? echo $seccion['enlace']; ?></a>
						<? } ?>
				</div>
				<!--video autoplay loop muted playsinline src="images/banner.mp4"></video-->
			</section>

<style>
#banner {  background-image: url("img/<? echo $seccion['foto']; ?>");}
</style>