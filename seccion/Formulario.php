<section class="wrapper" style="background-color: white; overflow:hidden" id="contacto">
				<div class="inner">
					<header class="special">
						<h2><? echo $seccion['titulo']; ?></h2>
					<p>
            <? echo $seccion['subtitulo']; ?>
            </p>
					</header>
    
		<div  style="padding-left:20px;padding-right:20px;">
			<form method="POST">
			 
			
			<?
if ($_POST['campo']){
 
	
	echo " 
<pre><strong>Su mensaje ha sido enviado correctamente.</strong></pre>
 ";
	
 
								foreach ($_POST['campo'] as &$valor) {
									
									$mensaje.=$valor."<br>";
								}
	
 // Varios destinatarios
 
$para = $conf['email'];

// título
$titulo = 'Mensaje desde formulario';

// mensaje
$mensaje = '
<html>
 
<body>
  <p>Estos son los datos enviados desde web:</p>
  '.$mensaje.'
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: ' . $conf['email'] . "\r\n";
$cabeceras .= 'From: ' . $para. "\r\n";


// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
     





}
 

 
					 
						$formulario= explode(';',$seccion['descripcion']); 
						$b=0;
						foreach ($formulario as &$valor) { 
								$b++;
								$input	= explode(',',$valor);
							echo "<div id='div".$b."'> ";
								$a=0;
								foreach ($input as &$contenido) {
									$a++;
									
									if ($a==1){
										if ($contenido)	{	
											 
									
										
										//	echo "<label id='label".$b."'>".$contenido."</label> ";
                      $boton=$contenido;
														}	
												
														
														}
									if ($a==2){
									  
										switch ($contenido) {
												case "input":
														echo "<input type='text' name='campo[]' id='select".$b."' placeholder='".$boton."' >";
														break;
												case "textarea":
														echo "<textarea name='campo[]' id='select".$b."' class='form-control' ></textarea>";
														break;
													case "submit":
														echo "<input id='select".$b."' type='submit' value='".$boton."' class='primary pull-right' >
                            <script>document.getElementById('label".$b."').style.display='none';</script><br>";
											 
												
												break;
												
												case "select":
												
														echo "<select name='campo[]' id='select".$b."' class='form-control' ><option>Seleccione una opción</option></select>";
														break;
											 
											}
										}
										if ($a==3){  
											if ($contenido=="true"){
												echo "<div class='pull-right' style='color:red; font-size:8px;'>* Obligatorio</div>";
												?>
			<script>document.getElementById("select<? echo $b; ?>").required= "required";</script>
												
												<?
											}
											
										
											echo "<p>";
										}
											if ($a==4){ 
												if ($contenido) { ?>
							<script>
												  
												 var select = document.getElementById("select<? echo $b; ?>");
								
							<?	$cont=explode('|',$contenido); 
								foreach ($cont as &$valor) {
     
 
								?>
								
								
												select.options[select.options.length] = new Option('<? echo $valor; ?>', '<? echo $valor; ?>');
  <? } ?>
												 
							</script>
												<?
											}
											}
								
									
								}
									echo "</div>";													 
						}
						?>
			
			<? //Averiguamos el slug de condiciones legales
				
				$consulta="Select slug FROM contenido WHERE id='".$conf['pagina_legal']."' LIMIT 1; ";
				$sql=mysqli_query($conex,$consulta);
				$slug=mysqli_fetch_array($sql);
				
				?>	
				
				<input type="checkbox" id="checkbox-alpha" name="checkbox">
												<label for="checkbox-alpha"> Acepto las <a href="/<? echo $slug[0]; ?>">
          condiciones legales</a></label>
       .
        
			</form> 
			
		</div>
			</div>
	</div></div>


</section>

<div style="clear:both;">
  
</div>