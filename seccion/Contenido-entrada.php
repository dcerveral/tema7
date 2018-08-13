<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><? echo $seccion['titulo']; ?></h2>
						<p><? echo $seccion['subtitulo']; ?></p>
					</header>
         <div class="testimonials">
       
		<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

if (!$_GET['p']){$_GET['p']=1;}
$hasta=$seccion['array3'];
$desde=($_GET['p'] * $hasta) - $hasta ;
 
 		$consultar="SELECT count(id) FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL)  ";
		$noticias = mysqli_query($conex, $consultar);
		$total = mysqli_fetch_array($noticias);
		$total_paginas = ceil($total[0]/ $hasta);
	 
	//REALIZAMOS LA CONSULTA DE ESTA PAGINA
	
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden, fecha DESC, act DESC LIMIT ".$desde.", ".$hasta.";; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;$b++;
 ?>
	 
	  
						<section>
							<div class="content">
                <a href="/<? echo $contenido['slug']; ?>" style="text-decoration: none;">
                <h4>
                  <? echo $contenido['titulo']; ?>
                </h4>
                <? if ($contenido['video']){ ?> 
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="https://img.youtube.com/vi/<? echo $contenido['video']; ?>/hqdefault.jpg" onerror="this.style.display='none'">
												
												<? }else{ ?>
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="/img/300_<? echo $contenido['foto']; ?>" onerror="this.style.display='none'">
											
											<? } ?>
								<div>
									<p><? echo truncate($contenido['descripcion'],50); ?></p>
								</div>
                </a>
												
								 
	 
              </div>
      </section>
         
			
				
	
		<?
			}	 
           ?>
           
          </div>
           
           <? 
		//PAGINACION
	$pagina=$_GET['p'];
	echo '<div class="col-xs-12   grid-item" 		>';
		if ($total_paginas > 1) {
   if ($pagina != 1)
      echo '<a href="/'.$campo['slug'].'/'.($pagina-1).'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left" style="margin:1px;"></i></a>';
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            //si muestro el índice de la página actual, no coloco enlace
            echo '<a href="/'.$campo['slug'].'/'.($pagina).'" class="btn btn-xs btn-info" style="margin:1px;">'.$pagina.'</a>';
         else
            //si el índice no corresponde con la página mostrada actualmente,
            //coloco el enlace para ir a esa página
					  echo '<a href="/'.$campo['slug'].'/'.($i).'" class="btn btn-xs btn-default" style="margin:1px; "> '.$i.'</a>';
				
            
      }
      if ($pagina != $total_paginas)
          echo '<a href="/'.$campo['slug'].'/'.($pagina+1).'" class="btn btn-xs btn-default" style="margin:1px;"><i class="fa fa-arrow-right"></i></a>';
}
		
		echo "</div>";
		
	
				
				if ($a==0){include ('buscar.php'); }
				
				?>						
						
						
					
	</div>
</section>
	
	 




