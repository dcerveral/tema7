<!DOCTYPE html>
  <html>
    <head >
      <!--Import materialize.css-->
       <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/materialize.min.css">
		 <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/style.css">
		<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/contacto.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">
     
 
 <title><? echo $campo['titulo']; ?></title>
<meta name="description" content="<? echo $campo['descripcion']; ?>"/>
<link rel="image_src" href="/img/60_<? echo $conf['fabicon']; ?>"  />	
	<link rel="icon" type="image/png" href="/img/60_<? echo $conf['fabicon']; ?>"/>
	<meta name="robots" content="<? echo $conf['robots']; ?>">
</head>
	
 <body style="background-color: <? echo $conf['backgroundcolor']; ?>;" >
	 
	   

	<div  style="z-index:100;position:absolute; top:25px;left:20px; opacity:1; ">
		<a href="/"><img src="/img/50_<? echo $conf['fabicon']; ?>" style="height:50px;"></a>
	</div>
	
	<div  style="z-index:100;position:absolute; top:25px;left:80px; opacity:1; color:#ffc95c; font-size:2em; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5);font-family:'Montserrat',sans-serif;">
		<a href="/" style=" color:<? echo $conf['primario']; ?>"><? echo $conf['nombre_pagina']; ?></a>
	</div>
	
	
	
	
	
 
<div class="black" style="z-index:100;position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;
	   border-radius: 4px 4px 4px 4px;
-moz-border-radius: 4px 4px 4px 4px;
-webkit-border-radius: 4px 4px 4px 4px;
border: 0px solid #000000;background-color: black;">
		&nbsp; 	
	</div>
	
 
<div style="z-index:102;position:absolute; top:33px;right:45px;font-size:18px;">
			<i class="fas fa-bars white-text" aria-hidden="true"></i>
		</div>
		<div style="z-index:102;position:absolute; top:55px;right:40px;color: white; font-size:0.6em;">
			Men&uacute;
		</div>







		<div class="row white" id="menu" style="z-index:1000000;display:none; opacity:1;position:absolute; top:75px;right:20px;  width:650px;  max-width:100%; padding:10px; border: 1px solid #cccccc;
	border-radius: 4px 0px 4px 4px;
-moz-border-radius: 4px 0px 4px 4px;
-webkit-border-radius: 4px 0px 4px 4px;box-shadow: 0 8px 17px 0 rgba(255, 255, 255, 0.3), 0 6px 20px 0 rgba(255, 255, 255, 0.2);z-index:2" class="white">

			<div class="col s12">&nbsp;</div>

<?
 $consulta ="SELECT titulo,slug,tipo,array,array2,url FROM contenido WHERE  tipo='menu-principal' AND activo='1'    ORDER BY orden ";
				
		 
				
				$sql=mysqli_query($conex,$consulta);
				while ($menu=mysqli_fetch_array($sql)){
								
								if ($menu['array2']>99)
				{$icono=dechex ($menu['array2']);}
				else
				{$icono="0".$menu['array2'];}
					
					
					if ($menu['url']){$url=$menu['url'];}
					else {
						
						$con="select slug from contenido where id='".$menu['array']."' LIMIT 1";
						$sq=mysqli_query($conex,$con);
						$lug=mysqli_fetch_array($sq);
						$url=$lug[0];
					
					}
								?>
<div class="col s6 m4 l4  center" style="margin-bottom:20px"><a href="<? echo $url; ?>" onclick="document.getElementById('menu').style.display='none';" class="black-text">
			 <i class="fas" style="font-size:3em;color: <? echo $conf['primario']; ?>">&#xf<? echo $icono; ?>;</i>
			<div class="fuente"><? echo $menu['titulo']; ?></div></a>
			</div>

<? } ?>


		</div>
 
	</div>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
.fuente {font-family: 'Montserrat', sans-serif;}
</style>	
	 <div onclick="document.getElementById('menu').style.display = (document.getElementById('menu').style.display == 'none') ? 'inline' : 'none'" class="hide-on-med-and-down" style="z-index:105;cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
		&nbsp; 	
	</div>
	
	 <div  class="hide-on-large-only" style="z-index:105; cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
		<a href="/menu"><span style="display: block; width: 100%; height: 100%">&nbsp;</span></A> 	
	</div>	     
	  
<div class="" onclick="document.getElementById('menu').style.display = 'none';" >
 
 <div id="index-banner" class="parallax-container z-depth-3" style="height:auto; ">
	<a name="inicio"></a>
    <div class="section no-pad-bot">
      <div class="container" style="min-width:80%">
        <div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
        <div style=" font-family: 'Open Sans', sans-serif;text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);" class="font3em  white-text">Contacta con <? echo $conf['nombre_pagina']; ?></div>
        
		<div style=" font-family: 'Open Sans', sans-serif;text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);" class="font2em  white-text">Puede ponerse en contacto con nosotros mediante:</div>
        
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		 
        
		
		<div class="row">
		<div class="col s4 m4 l4 center"><a href="#correo" class="white-text"><center> 
			<div class="redondo"><i class="fas fa-mobile-alt " aria-hidden="true"></i></div>
				<p class="truncate">Contacto</p>
			</center></a>
		</div>
		 
		
		<div class="col s4 m4 l4 center"><a  href="#telefono" class="white-text"><center>
			<div class="redondo"><i class="fa fa-map-o" aria-hidden="true"></i></div>
				<p class="truncate">Localizaci&oacute;n</p>
			</center></a>
		</div>
		
		<div class="col s4 m4 l4 center"><a  href="#formulario" class="white-text"><center>
			<div class="redondo"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
				<p class="truncate">Formulario</p>
			</center></a>
		</div>
		</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
      </div>
    </div>
    <div class="parallax black"><img src="/img/<? echo $conf['backgroundimg']; ?>"  style='opacity: 0.4'></div>
  </div>

    
    
	<div class="col s12 white row">
		<a name="correo"></a>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
		<div class="container">
		
			<div class="col s12 m2 l2">
				
				<i class="fa fa-mobile   " style="font-size:4em;color:<? echo $conf['primario']; ?>;"></i>
			
			</div>
		
			<div class="col s12 m10 l10">
				 <span  class="font2em  " style="color:<? echo $conf['primario']; ?>">Datos de contacto</span>
				 <p style="font-size:1.2em">
				 <div class='col s12 l12'>
				 
				 <b><? echo $conf['nombre']; ?></b><p>
				 
				<b>Horario:</B><br> <? echo $conf['horario']; ?><p>
				</div>
				
				<div class='col s12 l6'>
				<i class="fas fa-map-marker"></i><? echo $conf['geolocalizacion']; ?> 
				</div>
				
				<div class='col s12 l6'>
				<i class="fas fa-phone"></i> <? echo $conf['phone']; ?> <br>
	 
				 
				 
				 </p>
			</div>
		
		</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
	</div>
	
	<div class="col s12 grey lighten-4 row">
		<a name="telefono"></a>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
		 
		 
		 
		 <div class=" container">
			<div class="col s12 m2 l2 ">
				
				<i class="fa fa fa-map-o t " style="font-size:4em;color:<? echo $conf['primario']; ?>;"></i>
			
			</div>
		
			<div class="col s12 m10 l10 ">
				 <span  class="font2em " style="color:<? echo $conf['primario']; ?>;">Localizaci&oacute;n</span>
				 
					 	
						<div class="embed-container">
							<iframe class="embed-responsive-item" scrolling="no"
											src="https://maps.google.com/maps?q=<? echo $conf['nombre']; ?>&amp;num=1&amp;t=m&amp;ie=UTF8&amp;z=14&amp;output=embed" frameborder="0" ></iframe>
				</div>
						
					 
				 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;
}
.embed-container iframe { position: absolute; top:0; left: 0; width: 100%; height: 100%;
}</style>
				 
			</div>
			<div class="col s12">&nbsp;</div>
			<div class="col s12">&nbsp;</div>
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
				
				<i class="fa fa fa-envelope-o   " style="font-size:4em;color:<? echo $conf['primario']; ?>;"></i>
			
			</div>
			
			
			
	
	
			
			
			
					<div class="col s12 m10 l10">
				 <span  class="font2em " style="color:<? echo $conf['primario']; ?>;">Formulario</span>
						
						
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
			
			
			
			<form action="#formulario" method="POST">
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
					<input type="submit" class="btn " style="background-color:<? echo $conf['primario']; ?>;" value="Enviar">
				</div>
				
				</form>
			</div>
		
				</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		<div class="col s12">&nbsp;</div>
		
	</div></div>
	<!-- pie -->    
 
	<div class="col s12 grey darken-4"><div class="col s12">&nbsp;</div>
            <div class="container white-text">
				<a href="//esepress.com" class="white-text">&copy; <? echo date('Y'); ?> esepress.com	</a>
				<div class="right">
				  	
	<? if ($legal['slug']){ ?>
					<a href="<? echo $legal['slug']; ?>">
				<i class="fa fa-gavel " style="color:white" aria-hidden="true"></i>
			</a> &nbsp; &nbsp;
					<? } ?>
				
						<? if ($conf['facebook']){ ?>
							<a href="<? echo $conf['facebook']; ?>" target="social">
				<i class="fa fa-facebook-official " style="color:white" aria-hidden="true"></i>
			</a> &nbsp; &nbsp;
							<? } ?>
								<? if ($conf['instagram']){ ?>
									<a href="<? echo $conf['instagram']; ?>" target="social">
				<i class="fa fa-instagram" aria-hidden="true" style="color:white"></i>
			</a>&nbsp; &nbsp;
									<? } ?>
										<? if ($conf['twitter']){ ?>
											<a href="<? echo $conf['twitter']; ?>" target="social">
				<i class="fa fa-twitter" aria-hidden="true" style="color:white"></i>
			</a>
											<? } ?>
				 </div>
				 
            </div><div class="col s12">&nbsp;</div>
          </div>




<a href="#inicio" class="btn-floating btn-large waves-effect waves-light " style="background-color:<? echo $conf['primario']; ?>;  position:fixed; bottom:40px; right:10px;"><i class="fa fa-chevron-up" ></i></a>
    
	
	 

	<script type="text/javascript" src="/cms/<? echo $conf['tema']; ?>/js/jquery-2.1.1.min.js"></script>
      <script src="/cms/<? echo $conf['tema']; ?>/js/materialize.min.js"></script>
	   <script src="/cms/<? echo $conf['tema']; ?>/js/init.js"></script>
 <script>
	 
	 
  $(document).ready(function(){
      $('.parallax').parallax();
    });
        
	
	$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});
	
</script>



    </body>
  </html> 





