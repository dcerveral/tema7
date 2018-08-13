

 
	<div class="col s12 grey lighten-4 row">
		<a name="servicios"></a>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
		<div class="container">
		
			<div class="col s12 m2 l2">
				
				<img class="responsive-img" style="margin-top:10px" src="/img/300_<? echo urlencode($campo['foto']); ?>" alt="<? echo $campo['titulo']; ?>" >
			
			</div>
		
			<div class="col s12 m10 l10">
				 <span  class="font2em " style=" color: <? echo $conf['primario']; ?>"><? echo $campo['titulo']; ?></span>
				 <p style="font-size:1.2em">
				 <span style="line-height: 1.5;"><? echo $campo['subtitulo']; ?></span>
				 
				<div><span style="line-height: 1.5;"><? echo $campo['descripcion']; ?><br></div>				 
		
		</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
	</div>
			
	
	
	
	
	
	<div class="col s12 white">
		<a name="formulario"></a>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
		<div class="container">
		
			<div class="col  s12 m2 l2">
				
				<i class="fa fa fa-envelope-o  " style="font-size:4em; color: <? echo $conf['primario']; ?>"></i>
			
			</div>
					<div class="col s12 m10 l10">
				 <span  class="font2em" style=" color: <? echo $conf['primario']; ?>">Formulario</span>
						
		<? if ($_POST['email']){
	echo '<div class="col-lg-10  col-md-12  col-sm-12  col-xs-12 alert alert-success" style="color:red">';
	echo 'Su mensaje ha sido enviado correctamente.';
	echo '</div>';
	$para  = $_POST['email'] . ', '; // atención a la coma
	$para .= $conf['email'] ;

// título
$titulo = 'Formulario de contacto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Formulario de contacto</title>
</head>
<body>
  <p>Su mensaje ha sido enviado correctamente. Datos enviados</p>
  <table>
    
   
       <tr><td>Nombre</td><td>'.$_POST['nombre'].'</td>  </tr>
			 <tr><td>Correo</td><td>'.$_POST['email'].'</td>  </tr>
			 <tr><td>Mensaje</td><td>'.$_POST['mensaje'].'</td>  </tr>
   
   
  </table>
</body>
</html>
';
 
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: ' . $_POST['email'] . "\r\n";
$cabeceras .= 'From: ' . $conf['email'] . "\r\n";
 

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
}
	?>		
				 <p style="font-size:1.2em">Rellene el siguiente formulario y nos pondremos en contacto:</p>
			
			
			
			<form action="/contacto#formulario" method="POST">
				<div class="input-field col s12 ">
				  <i class="fa fa-user prefix" aria-hidden="true"></i>
				  <input id="nombre" type="text" class="validate" name="nombre"  required>
				  <label for="nombre">Nombre</label>
				</div>
				
				<div class="input-field col s12 l6">
				  <i class="fa fa-mobile prefix" aria-hidden="true"></i>
				  <input id="tel" type="tel" class="validate" name="tel"  required>
				  <label for="tel">Telefono</label>
				</div>

				<div class="input-field col s12 l6">
				  <i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
				  <input id="email" type="email" class="validate" value="" name="email"  required>
				  <label for="email">Mail</label>
				</div>

								
				
				
				
				
				<div class="input-field col s12">
				  <i class="fa fa-comments-o prefix"></i>
				  <textarea id="msg" class="materialize-textarea" name="msg" required></textarea>
				  <label for="msg">Mensaje</label>
				</div>
			
				<div class="col s12 center">
					<input type="submit" class="btn " style=" background-color: <? echo $conf['primario']; ?>" value="Enviar">
				</div>
				
				</form>
			</div>
		
				</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
	</div></div>

		 
		 
		 	
		 
	 

 