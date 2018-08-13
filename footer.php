</div>

<!-- pie -->

<div class="col s12">&nbsp;</div>
<div class="col s12">&nbsp;</div>
<div class="col s12 grey darken-4">
	<div class="col s12">&nbsp;</div>
	<div class="container white-text">
		&copy;
		<? echo date('Y'); ?> <span class="hide-on-small-only"> <? echo $conf['nombre_pagina']; ?> |  </span> <a href='https://www.esepress.com' style="padding:10px 0px 10px 0px;" class='white-text'>Esepress.com</A>

			<div class="right">
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
	<div class="col s12">&nbsp;</div>
</div>


<a href="#inicio" class="btn-floating btn-large waves-effect waves-light " style="background-color:<? echo $conf['primario']; ?>;  position:fixed; bottom:40px; right:10px;"><i class="fa fa-chevron-up" ></i></a>
  

<script type="text/javascript" src="/cms/<? echo $conf['tema']; ?>/js/jquery-2.1.1.min.js"></script>
<script src="/cms/<? echo $conf['tema']; ?>/js/materialize.min.js"></script>
<script src="/cms/<? echo $conf['tema']; ?>/js/init.js"></script>
<script>
	$(document).ready(function() {
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