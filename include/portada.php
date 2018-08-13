<!DOCTYPE html>

<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

	<title>
		<? echo $campo['titulo']; ?>
	</title>
	<meta name="description" content="<? echo $campo['descripcion']; ?>">






	<!-- CSS  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



	<link rel="shortcut icon" href="/img/60_<? echo $conf['fabicon']; ?>">
	<style>
		<? include ('./'.$conf['tema'].'/css.php');
		?>
	</style>
<meta name="robots" content="<? echo $conf['robots']; ?>">
</head>

<body style="background-size:  cover; background-color: #424251;; 
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;   
						  
   background-image: url( '/img/<? echo $campo['foto']; ?>') ; height:100%; max-height:100%; overflow:auto;">

	<!--MENU-->
	<div style="z-index:100;">





		<div class="black" style="z-index:100;position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;
	   border-radius: 4px 4px 4px 4px;
-moz-border-radius: 4px 4px 4px 4px;
-webkit-border-radius: 4px 4px 4px 4px;
border: 0px solid #000000;background-color: black;">
			&nbsp;
		</div>

 <div  class="hide-on-large-only" style="z-index:105; cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
		<a href="/menu"><span style="display: block; width: 100%; height: 100%">&nbsp;</span></A> 	
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

		<!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<style>
			.fuente {
				font-family: 'Montserrat', sans-serif;
			}
		</style>
		<div onclick="document.getElementById('menu').style.display = (document.getElementById('menu').style.display == 'none') ? 'inline' : 'none'" class="hide-on-med-and-down" style="z-index:105;cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
			&nbsp;
		</div>

		<!--div  class="hide-on-large-only" style="z-index:105; cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
		<a href="/menu"><span style="display: block; width: 100%; height: 100%">&nbsp;</span></A> 	
	</div--></div>

	<div onclick="document.getElementById('menu').style.display = 'none';" style="width:100%;height:100%">







		<div style="width:100%;min-height:100%;border:0px;padding:0px;position:absolute;top:65px;background-color:transparent;">


		</div>
		<div id="mostrar">



			<style>
				* {
					font-family: 'Montserrat', sans-serif;
				}
			</style>
			<div class='container' style=";  position: absolute;
    left: 50%;    
    top: 50%;    max-height: 100%;  max-width: 100%;  min-width:50%;;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%); 
	">
				<div class="row">
					<div class='col s12 m12 l6 offset-l3'>

						<div style='  text-align:center; padding:20px;'>
							<center>
								<div><a href='/' style='color: white;'>
			<img id="logo" class="responsive-img" src='/img/100_<? echo $conf['fabicon']; ?>'>
			</A></div>
								<div style='font-size: 1.7em;  font-weight:BOLD;  color:#ffffff'>
									<? echo $conf['nombre_pagina']; ?>
								</div>

								<div class='truncate' style='font-size: 1em;  font-weight:BOLD;  color:#ffffff'>
									<? echo $conf['eslogan_corto']; ?>
								</div>
								<br>
								<div class="nav-wrapper" style='z-index:100'>

								</div>
							</center>
							<div class="row">
 
		 

								<? 		 $consulta ="SELECT titulo,slug,tipo,array,array2,url FROM contenido WHERE  tipo='menu-principal' AND activo='1' AND url!='/'    ORDER BY orden";
				
		 
				
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

									<div class='col s6 m4 l4  ' >
										<a href="<? echo $url; ?>">
										<div class='icono '><i class="fas">&#xf<? echo $icono; ?>;</i></div>
										<div class="col s12  white-text">
											<? echo $menu['titulo']; ?>
										</div>
										</a>
									</div>
								

									<?	} 	?>





							</div>

						</div>




					</div>
				</div>
			</div>
		</div>


		<style>
			.boton-portada {
				background-color: #000000;
				opacity: 0.9;
				;
				font-weight: bold;
				color: #FFFFFF;
				float: left;
				width: 100%;
				border: solid 1px #555555;
				height: 100px;
				cursor: pointer;
				cursor: hand;
				font-family: sans-serif;
				font-size: 14px;
				text-overflow: ellipsis;
				white-space: nowrap;
				overflow: hidden;
			}

			.boton-portada:Hover {
				background-color: #FFFFFF;
				color: #FD5200;
				opacity: 0.8;
				border: 0px solid #C7DAEF;
			}

			.icono {
				width: 80px;
				height: 70px;
				background-color: <? echo $conf['primario'];?>;
				color: white;
				margin: auto auto;
				margin-top: 20px;
				margin-bottom: 10px;
				background: <? echo $conf['primario'];?>;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				font-weight: bold;
				font-family: Tahoma, Geneva, sans-serif;
				font-size: 2em;
				padding: 10px;
			}
		</style>
	</div>



	<div class="boxn  " style='z-index: 10; font-size: 0.8em; position: fixed; bottom:0px; left:0px; width:100%; margin:0px; border:0px; text-align:center'>

		&copy;
		<? echo date('Y'); ?> <span class="hide-on-small-only"> <? echo $conf['nombre_pagina']; ?> |  </span> <a href='https://www.esepress.com' style="padding:10px 0px 10px 0px;" class='white-text'>Esepress.com</A>
			<div style="float: right">

				<? if ($contacto['id']){ ?>
					<a href="<? echo $contacto['slug']; ?>">
				<i class="fa fa-phone " style="color:white" aria-hidden="true"></i>
			</a> &nbsp; &nbsp;
					<? } ?>

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
	</div>

	</div>



	</div>


	<!--  Scripts-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>




</body>

</html>