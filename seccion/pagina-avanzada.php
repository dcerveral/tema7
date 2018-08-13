
				<?
									
									 $consultasec="SELECT * FROM contenido WHERE tipo='seccion' AND activo='1' AND superior='".$campo['id']."' ORDER BY orden ;"	;	
							 
								$sqlsec=mysqli_query($conex,$consultasec);
									while ($seccion=mysqli_fetch_array($sqlsec)){
										
										 
									include (''.$seccion ['subtipo'].'.php'); 
									  
									}
						?>
