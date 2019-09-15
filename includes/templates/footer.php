<footer>
			<div class="contenedor clearfix">
				<div class="footer-informacion">
					<h3>Sobre <span>gdlwebcamp</span></h3>
					<p>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web. No es simplemente la implementación del diseño convencional ya que se abarcan diferentes aspectos como el diseño gráfico web, diseño de interfaz y experiencia de usuario, como la navegabilidad, interactividad, usabilidad, arquitectura de la información; interacción de medios, entre los que podemos mencionar audio, texto, imagen, enlaces, video y la optimización de motores de búsqueda.</p>
				</div>
				
				<div class="ultimos-tweets">
					<h3>Ultimos <span>tweets</span></h3>
					<ul>
						<li>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web.</li>
						<li>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web.</li>
						<li>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web.</li>
					
					</ul>
					
				</div>
				
				<div class="manu">
					<h3>Redes <span>sociales</span></h3>
					<nav class="redes-sociales">
						<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</nav>
					
				</div>
			
			</div>
			 
			<p class="copyright">Todos los derechos Reservados GDLWEBCAMP 2017.</p>


			<!--Mailchimp colorbox -->
			<!-- Begin Mailchimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
				We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>

			<div style="display:none">
			<div id="mc_embed_signup">
			<form action="https://gmail.us3.list-manage.com/subscribe/post?u=2ac7eedf1d83bfe60aeaa01c7&amp;id=1e527a5d01" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
				<h2>Suscribete y no te pierdas nada de este evento</h2>
			<div class="indicates-required"><span class="asterisk">*</span> Es obligatorio</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Correo Electronico  <span class="asterisk">*</span>
			</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">Nombre </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Apellido </label>
				<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
			</div>
			<div class="mc-field-group size1of2">
				<label for="mce-BIRTHDAY-month">Cumpleaños </label>
				<div class="datefield">
					<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
					<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
					<span class="small-meta nowrap">( mm / dd )</span>
				</div>
			</div>	<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2ac7eedf1d83bfe60aeaa01c7_1e527a5d01" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Suscribete" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
			</div>

		
		
		</footer>
		

        <!-- Add your site or application content here -->
		
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>

		<!--Par aligerar las paginas de recursos que no necesitan -->
		<?php
			$archivo = basename($_SERVER['PHP_SELF']);
			$pagina = str_replace(".php", "", $archivo);
			if ($pagina == 'invitados' || $pagina == 'index'){
				echo '<script src="js/jquery.colorbox-min.js"></script>';
			}else if($pagina == 'conferencia'){
				echo '<script src="js/lightbox.js"></script>';
			}
		?>

		
		



		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQv3_FK0izdeB1n_4cuEb-APM5YXqw-w8&callback=initMap"
    async defer></script>

		

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
		<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us3.list-manage.com","uuid":"2ac7eedf1d83bfe60aeaa01c7","lid":"1e527a5d01","uniqueMethods":true}) })</script>

    </body>
</html>
