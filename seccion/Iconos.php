<section class="wrapper">
  <div class="inner">
    <header class="special">
      <h2>
        <? echo $seccion['titulo']; ?>
      </h2>
      <p>
        <? echo $seccion['descripcion']; ?>
      </p>
    </header>
    <div class="highlights">

      <?  $consulta="SELECT * FROM contenido WHERE subtipo='Icono y Texto' AND activo='1' AND superior='".$seccion['id']."' ORDER BY orden";
		$sqlicono=mysqli_query($conex,$consulta);
		 
		while ($icono=mysqli_fetch_array($sqlicono)){
		
		 
		?>


        <div class=" col-md-<? echo $icono['col']; ?>">

          
            <section>
							<div class="content">
								<header>
                  <i class="icon fa label">&#xf<? echo dechex ($icono['array']); ?>;</i>
								 
									<h3><? echo $icono['titulo']; ?></h3>
								</header>
								<p><? echo $icono['subtitulo']; ?></p>
							</div>
						</section>
          
          
            

          </div>
 

        <? } ?>
    </div>
  </div>
</section>