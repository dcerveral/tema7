<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><? echo $seccion['titulo']; ?></h2>
						<p><? echo $seccion['subtitulo']; ?></p>
					</header>
			  
				<? 
 
 		

				
$consultas="SELECT * FROM contenido WHERE superior='".$seccion['id']."' AND subtipo='Foto' AND activo='1'  ; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
 ?>
												<div class="col-lg-3 col-md-2 col-sm-6  col-xs-6  pull-left "> 
					 
					
			 
						 <div style="width:100%;height:200px;overflow:hidden;display:table-cell;
 vertical-align:middle;text-align:center;background-color:#ffffff;border: 1px solid #eeeeee;padding:2px;">
               <a href="<? echo $contenido['url']; ?>">
							<img  style="width:100%; height:190px;" alt="<? echo $contenido['titulo']; ?>" src="/img/300_<? echo $contenido['foto']; ?>" onerror="this.src='/nofoto.png'">
               </a>
                          </div>
							
						</div>
					
						 
																
					<? }
				
			 
				
				?>					 
          
  </div>
</section>

<div style="clear:both;width:100%">
  <p>
    &nbsp;
  </p>
</div>