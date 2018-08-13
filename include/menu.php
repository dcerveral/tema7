
  <!DOCTYPE html>
  <html>
    <head >
      <!--Import materialize.css-->
       <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/materialize.min.css">
		 <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	


 <title> Menú <? echo $conf['nombre_pagina']; ?></title>
<meta name="description" content="<? echo $conf['eslogan_largo']; ?>"/>
<link rel="image_src" href="/img/60_<? echo $conf['fabicon']; ?>"  />	
	<link rel="icon" type="image/png" href="/img/60_<? echo $conf['fabicon']; ?>"/>
	
</head>
	
    <body style="background-color: #f5f5f5;" >
		
		<div class="container row">
		
		
			<div class="col s12">&nbsp;</div>
			<div class=" col s12" onclick="history.back();"><i class="fa fa-times right grey-text"></i></div>
		
			<div class="col s12 center" ><a href='/' style='color: white;'> 
						<img id="logo" class=" responsive-img  "   class="z-depth-3"  src='/img/60_<? echo $conf['fabicon']; ?>'> 
						</A></div>
						
			
			
			
			<div class="col s12">&nbsp;</div>
			
			
			
			
			
			
			<div>		 
		 <div class="col s12" >&nbsp;</div>
		 
		 
		
		 
		 
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
	

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
.fuente {font-family: 'Montserrat', sans-serif;}
</style>			
			
			
			
			
		 
		</div>
		
		
 
	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
      <script src="/js/materialize.min.js"></script>
	   <script src="/js/init.js"></script>
 
 
 
    </body>
  </html> 


