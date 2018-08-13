<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/materialize.min.css">
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	


	 
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/servicios.css">
	<title><? echo $campo['title']; ?></title>
	<meta name="description" content="<? echo $campo['description']; ?>" />
	<link rel="image_src" href="/img/60_<? echo $conf['fabicon']; ?>" />
	<link rel="icon" type="image/png" href="/img/60_<? echo $conf['fabicon']; ?>" />
	<meta name="robots" content="<? echo $conf['robots']; ?>">
	<style>
		.container2 {
			max-width: 1280px;
			width: 100%;
		}

		@media only screen and (min-width: 601px) {
			.container2 {
				padding: 0 1.5rem;
				margin: 0 auto;
				width: 85%;
			}
		}

		@media only screen and (min-width: 993px) {
			.container2 {
				padding: 0 1.5rem;
				margin: 0 auto;
				width: 70%;
			}
		}
	</style>
</head>

<body style="background-color: <? echo $conf['backgroundcolor']; ?>;" id="inicio">



	<div style="z-index:100;position:absolute; top:25px;left:20px; opacity:1; ">
		<a href="/"><img src="/img/60_<? echo $conf['fabicon']; ?>" style="height:50px;"></a>
	</div>

	<div style="z-index:100;position:absolute; top:25px;left:80px; opacity:1; color:#ffc95c; font-size:2em; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5);font-family:'Montserrat',sans-serif;">
		<a href="/" style=" color:<? echo $conf['primario']; ?>;"><? echo $conf['nombre_pagina']; ?></a>
	</div>


	<?  
	if ($campo['tipo']=="entrada") { ?>
		<div id="index-banner" class="parallax-container z-depth-3" style="height:auto; ">
			<a name="inicio"></a>
			<div class="section no-pad-bot">
				<div class="container" style="min-width:80%">
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
					<div style=" font-family: 'Open Sans', sans-serif;text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);" class="font3em  white-text"><? echo $campo['subtitulo']; ?></div>

					<div style=" font-family: 'Open Sans', sans-serif;text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);" class="font2em  white-text"><? echo $campo['titulo']; ?></div>

					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>



					<div class="row">
						<div class="col s4 m4 l4 center">

						</div>


						<div class="col s4 m4 l4 center">
							<a href="#servicios" class="white-text">
								<center>
									<div class="redondo">
										<i class="fa fa-chevron-down white-text" aria-hidden="true"></i></div>
									<p class="truncate">Ver</p>
								</center>
							</a>
						</div>

						<div class="col s4 m4 l4 center">

						</div>
					</div>
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
					<div class="col s12">&nbsp;</div>
				</div>
			</div>
			<div class="parallax black"><img src="/img/<? echo urlencode($campo['foto']); ?>" style='opacity: 0.4'></div>
		</div>
		<? } else { ?>

				<div id="index-banner" class="parallax-container z-depth-3" style="height:100px; ">


					<div class="parallax black"><img src="/img/<? echo urlencode($campo['foto']); ?>" style='opacity: 0.3'></div>
				</div>
	<? } ?>


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
	

			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

			<style>
				.fuente {
					font-family: 'Montserrat', sans-serif;
				}
			</style>
			<div  class="hide-on-med-and-down" onclick="document.getElementById('menu').style.display = (document.getElementById('menu').style.display == 'none') ? 'inline' : 'none'"  style="z-index:105;cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
				&nbsp;
			</div>
 <div  class="hide-on-large-only" style="z-index:105; cursor:hand; cursor:pointer; position:absolute; top:25px;right:20px; opacity:0.5; height:50px; width:65px;">
		<a href="/menu"><span style="display: block; width: 100%; height: 100%">&nbsp;</span></A> 	
	</div>	
		

			<div class="row" onclick="document.getElementById('menu').style.display = 'none';">

				

			

				







			