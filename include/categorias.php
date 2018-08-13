<div class="col s12">&nbsp;</div>
<div class="col s12">&nbsp;</div>
<div class="col s12">&nbsp;</div>

<div class="col s12">
	<div class="font2em center bold">
		<? echo $campo['titulo']; ?>
	</div>
</div>

<div class="col s12">&nbsp;</div>
<div class="col s12">&nbsp;</div>
<div class="col s12">&nbsp;</div>

<div class="container2" style="min-width:90%;">
	<? 
$p=$_GET['p'];
if (!$p){$p=1;}
$items=20;
$limit=($p * $items) - $items;

if ($campo['id']){$SQLID="and superior='".$campo['id']."'";}
$SQLTIPO="(tipo='categoria' OR tipo='pagina' OR tipo='entrada' OR tipo='producto' ) ";				
if ($_GET['TIPO']){$SQLTIPO=" tipo='".$_GET['TIPO']."' ";}
				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' $SQLID  ORDER BY tipo, orden LIMIT $limit,$items; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
		$b++;
 ?>
		<div class="col s12 m6 l4">
			<div class="card " style="height:440px;overflow:hidden;-webkit-box-shadow: 0px 0px 0px 0px rgba(255,255,255,1);
-moz-box-shadow: 0px 0px 0px 0px rgba(255,255,255,1);
box-shadow: 0px 0px 0px 0px rgba(255,255,255,1);">


				<a href="/<? echo $contenido['slug']; ?>">


					<div class="card-image waves-effect waves-block waves-light grey  " style="height:190px;
							background: url(/img/300_<? echo urlencode($contenido['foto']); ?>)  no-repeat center center ;  background-size: 100% 100%;
						  -webkit-background-size: cover;
						  -moz-background-size: cover;
						  -o-background-size: cover;
						  background-size: cover;">




						<span class="black center " style="color: #ffffff;position:absolute;top:5px;right:5px; opacity:0.95; height:20px; width:50px;
	   border-radius: 4px 4px 4px 4px;
-moz-border-radius: 4px 4px 4px 4px;
-webkit-border-radius: 4px 4px 4px 4px;text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
border: 0px solid #a8a8b7;  "> + info </span>






						<span class="card-title  " style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);"><? echo $contenido['titulo']; ?></span>
					</div>
					<div class="card-content " style="cursor:pointer; cursor:hand;">

						<p class=""></p>

						<div class="block-with-text  grey-text" style="margin-top: 10px; font-family: 'Arial'; text-align: justify;">
							<? echo $contenido['description']; ?></div>


						<div class="col s12" style="margin-top:10px;position:absolute; bottom:0px; left:0px;">


							<div class="col s4 m4 l4 center">
								<a href="/<? echo $contacto['slug']; ?>#correo" class="white-text">
									<center>
										<div class="redondo"><i class="fa fa-mobile" aria-hidden="true"></i></div>

									</center>
								</a>
							</div>


							<div class="col s4 m4 l4 center">
								<a href="<? echo $contacto['slug']; ?>#telefono" class="white-text">
									<center>
										<div class="redondo"><i class="fa fa-map-o" aria-hidden="true"></i></div>

									</center>
								</a>
							</div>

							<div class="col s4 m4 l4 center">
								<a href="<? echo $contacto['slug']; ?>#formulario" class="white-text">
									<center>
										<div class="redondo"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
										<p>&nbsp;</p>
									</center>
								</a>
							</div>
						</div>

					</div>

			</div>
		</div>





<? } ?>



</div>
<div style="clear:both;">
	
	</div>

		<div class="col-xs-6">
			<? if ($p>1) { $menos=$p-1; ?>
				<a href="/<? echo $campo['tipo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?>/<? echo $menos; ?>" class=" pull-left enigma_blog_read_btn animated bounceInUp"><i class="fa fa-arrow-left"></i></i></a>
				<? } ?>
		</div>
		<div class="col-xs-6">
			<? if ($a==$items) {  $mas=$p+1; ?>
				<a href="/<? echo $campo['tipo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?>/<? echo $mas; ?>" class=" pull-right enigma_blog_read_btn animated bounceInUp"><i class="fa fa-arrow-right"></i></a>
				<? } ?>
		</div>


 
 