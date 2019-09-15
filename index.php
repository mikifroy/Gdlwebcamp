<?php include_once 'includes/templates/header.php'; ?>
		
		
		<section class="seccion-contenedor">
			<h2>La mejor conferencia de diseño web en español</h2>
			
			<p>
				El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web. No es simplemente la implementación del diseño convencional ya que se abarcan diferentes aspectos como el diseño gráfico web, diseño de interfaz y experiencia de usuario, como la navegabilidad, interactividad, usabilidad, arquitectura de la información. 
			</p>
		</section><!--seccion-->
		
		<section class="programa">
			<div class="contenedor-video">
				<video autoplay loop poster="bg-talleres.jpg">
					<source src="video/video.mp4" type="video/mp4">
					<source src="video/video.webm" type="video/webm">
					<source src="video/video.ogv" type="video/ogg">
				
				</video>
			</div><!--contenedor-video-->
		
		
		
			<div class="contenido-programa">
				<div class="contenedor">
				<div class="programa-evento">
					<h2>Programa del evento</h2>
					<nav class="menu-programa">
						<a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
						<a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
						<a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>

					</nav>

						<div id="talleres" class="info-curso ocultar clearfix">
							<div class="detalle-evento">
								<h3>HTML5, CSS3 Y JavaScript</h3>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>16:00 Hrs</p>
								<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
								<p><i class="fa fa-user" aria-hidden="true"></i>Froylán Miguel Díaz Quintano</p>
							</div>
							
							<div class="detalle-evento">
								<h3>Responsive Web Design</h3>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>20:00 Hrs</p>
								<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
								<p><i class="fa fa-user" aria-hidden="true"></i>Froylán Miguel Díaz Quintano</p>
							</div>
							
							<a href="#" class="button float-rigth">Ver todos</a>
						
						</div><!--#conferencia-->
						<div id="conferencias" class="info-curso ocultar clearfix">
							<div class="detalle-evento">
								<h3>Como ser freelancer</h3>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 Hrs</p>
								<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
								<p><i class="fa fa-user" aria-hidden="true"></i>Andres Manuel López</p>
							</div>
							
							<div class="detalle-evento">
								<h3>Tecnologias del futuro</h3>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 Hrs</p>
								<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
								<p><i class="fa fa-user" aria-hidden="true"></i>Enrique Peña</p>
							</div>
							<a href="#" class="button float-rigth">Ver todos</a>

						</div><!--#seminarios-->
						<div id="seminarios" class="info-curso ocultar clearfix">
							<div class="detalle-evento">
								<h3>Diseño UI/UX para mobiles</h3>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>17:00 Hrs</p>
								<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
								<p><i class="fa fa-user" aria-hidden="true"></i>Dr. Miguel Diaz</p>
							</div>
							
							<div class="detalle-evento">
								<h3>Aprende a programar en una mañana</h3>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 Hrs</p>
								<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
								<p><i class="fa fa-user" aria-hidden="true"></i>Froylán Miguel Díaz Quintano</p>
							</div>
							<a href="#" class="button float-rigth">Ver todos</a>
					</div><!--programa evento-->
				
				</div><!--contenedor-->
			</div><!--contenido programa-->
		</section><!--programa-->
		
		
		
		<?php include_once 'includes/templates/invitados.php'; ?>
		
		
		<div class="contador parallax">
			<div class="contenedor">
				<ul class="resumen-evento clearfix">
					<li><p class="numero"></p>Invitados</li>
					<li><p class="numero"></p>Talleres</li>
					<li><p class="numero"></p>Dia</li>
					<li><p class="numero"></p>Conferencias</li>
				</ul>
			</div>
		</div>
		
		
		<section class="precios seccion">
			<h2>Precios</h2>
			<div class="contenedor">
				<ul class="lista-precios clearfix">
					<li>
						<div class="tabla-precio">
							<h3>Pase por dia</h3>
							<p class="numero">$30</p>
							<ul>
								<li>Bocadillos gratis</li>
								<li>Todas lasconferencias</li>
								<li>Todos los talleres</li>
							</ul>
							<a href="registro.php" class="button hollow">Comprar</a>
						</div>
					</li>
					
					<li>
						<div class="tabla-precio">
							<h3>Todos los dias</h3>
							<p class="numero">$50</p>
							<ul>
								<li>Bocadillos gratis</li>
								<li>Todas lasconferencias</li>
								<li>Todos los talleres</li>
							</ul>
							<a href="registro.php" class="button">Comprar</a>
						</div>
					</li>
					
					<li>
						<div class="tabla-precio">
							<h3>Pase por 2 dias</h3>
							<p class="numero">$45</p>
							<ul>
								<li>Bocadillos gratis</li>
								<li>Todas lasconferencias</li>
								<li>Todos los talleres</li>
							</ul>
							<a href="registro.php" class="button hollow">Comprar</a>
						</div>
					</li>
				
				</ul>
			
			</div>
		</section>
		
		
		<div id="mapa" class="mapa"></div>   
		
		
		<section class="seccion">
			<h2>Testimoniales</h2>
			<div class="testimoniales contenedor clearfix">
				<div class="testimonial">
					<blockquote>
						<p>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web.  </p>

						<footer class="info-testimonial clearfix">
							<img src="img/testimonial.jpg" alt="imagen testimonial">
							<cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>

						</footer>
					</blockquote>
				</div><!--testimonial-->

				<div class="testimonial">
					<blockquote>
						<p>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web.  </p>

						<footer class="info-testimonial clearfix">
							<img src="img/testimonial.jpg" alt="imagen testimonial">
							<cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>

						</footer>
					</blockquote>
				</div><!--testimonial-->

				<div class="testimonial">
					<blockquote>
						<p>El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web.  </p>

						<footer class="info-testimonial clearfix">
							<img src="img/testimonial.jpg" alt="imagen testimonial">
							<cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>

						</footer>
					</blockquote>
				</div><!--testimonial-->
			</div>
		</section>
		
		
		<div class="newslatter parallax">
			<div class="contenido contenedor">
				<p>registrate al newslatter</p>
				<h3>gdlwebcamp</h3>
				<a href="#mc_embed_signup" class="boton_newsletter button trasparente">Registro</a>
			</div><!--contendio-->
		</div><!--newsletter-->
		
		<section class="seccion contenedor">
			<h2>Faltan</h2>
			<div class="cuenta-regresiva">
				<ul class="clearfix">
					<li><p id="dias" class="numero"></p> dias</li>
					<li><p id="horas" class="numero"></p> horas</li>
					<li><p id="minutos" class="numero"></p> minutos</li>
					<li><p id="segundos" class="numero"></p> segundos</li>
				</ul>
			
			</div>
		
		</section>
		
		<?php include_once 'includes/templates/footer.php'; ?>		
		