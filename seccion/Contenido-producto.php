<div style="clear:both;"></div> 
<div class=" grid" id='go'>
         
       
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
	 <div class="col-md-4 col-xs-12">
          <a href="/<? echo $contenido['slug']; ?>">
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header  " style="background-color: <? echo $conf['secundario']; ?>">
              <div class="widget-user-image">
                <img class="img-circle" src="/img/600_<? echo $contenido['foto']; ?>" alt="<? echo $contenido['titulo']; ?>" style="width:60px;height:60px;">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"    style="color:white" ><? echo $contenido['titulo']; ?></h3>
              <h5 class="widget-user-desc  " style="color:white"><? echo $contenido['subtitulo']; ?></h5>
            </div>
            <div class="box-footer " >
             <div style="height:100px; overflow:hidden;">
							 
							
							<? echo $contenido['descripcion']; ?>
							  </div>
							
							<p class="pull-right">
								<? if ($contenido['pvp']){ ?>
								<a href="/<? echo $contenido['slug']; ?>" class="btn btn-xs btn-success" style="background-color: <? echo $conf['secundario']; ?>"><? echo $contenido['pvp']; ?> &euro;</a>
								<? } else { echo "&nbsp;"; } ?>
							</p>
							
            </div>
						</a>
          </div>
		 
	</div>
	   
	 
			 
			
				
	
		<?
			}	 
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
	
	 




