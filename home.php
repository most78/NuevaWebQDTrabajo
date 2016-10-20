<?php include ("head.php"); ?>
<?php include("header.php"); ?>
	<section class="heroShot">
		<div class="wrapper">
			<div class="formBox">
				<form action="">
				<fieldset>
				<legend>
					Si quieres mas información o asesoriamiento<span> Llama gratis al <strong>900 100 314</strong></span> o rellena nuestro formulario y nosotros nos pondremos en contacto contigo
				</legend>
					<input type="text" name="firstname" placeholder="Nombre">
					<input type="tel" name="telephone" placeholder="Teléfono">
					<input type="mail" name="email" placeholder="Email">
					<input type="checkbox" name="conditionsOK" value="conditionsOK">
					<label>He leido y acepto la <a href=""> política de uso de datos</a></label>
					<input type="submit" name="Submit" class="formButton"/>
				</fieldset>
				</form>
			</div>
		</div>
		<div class="heroClaim">
		<div class="claimBox">
		<h2 class="mainClaim">Descubre qué atrae a tus clientes</h2>
		<p class="secondaryClaim">Haz que tu negocio<strong> crezca </strong>con una estrategía digital 360°</p>
		</div>
		</div>
	</section>
	<section class="productosBox">
		<div class="wrapper macBackground">
			<h1 class="tituloSeccionProducto">Descubre qué podemos hacer por tu negocio</h1>
			<p class="subTituloSeccionProducto">somos la mayor agencia de marketing online para los negocios</p>
			<div class="contenedorProducto">
				<div class="producto">
					<h3 class="tituloProducto">Diseñamos y gestionamos la web de tu negocio</h3>
					<p>Mas de 20.000 clientes confían en nosotros.
				   Nuestras páginas web están optimizadas para maximizar la conversión y el retorno de la inversión</p>
				</div>
				<div class="producto">
					<h3 class="tituloProducto">Garantizamos tu posicionamiento en los principales buscadores</h3>
					<p>95% de nuestras campañas están entre las primeras posiciones (SEO)</p>
				</div>
				<div class="producto">
					<h3 class="tituloProducto">Garantizamos tráfico a tu web por muy poca inversión</h3>
					<p>Gestionamos más de 18.000 campañas en Google AdWords y medios online</p>
				</div>
				<div class="producto">
					<h3 class="tituloProducto">Gestión integral y personalizada</h3>
					<p>Nos ocupamos de gestionar tu estratégia de marketing digital con un trato personalizado, para que tú te encargues de tu negocio. Somos más de 400 profesionales que te ayudamos a crecer</p>
				</div>
				<a href="" class="button">nuestros servicios</a>
			</div>
		</div>
	</section>
	<section class="blogSection">
		<div class="headerBlogSection">
			<h2 class="mainClaim">Tendencias de marketing online</h2>
			<p class="secondaryClaim">El blog de QDQMEDIA, activa internet</p>
		</div>
		<!--<ul>
			<li><a href="">Qdq media participa en la sexta edición de bizbarcelona</a></li>
			<li><a href="">Test A/B y mapas de calor: El camino hacia la nueva web evolutiva</a></li>
			<li><a href="">Cómo aumentar el nivel de satisfaccion del usuario</a></li>
			<li><a href="">QDQ media participa en la sexta edicion de Bizbarcelona</a></li>
		</ul>-->
		<ul class="lastPostContainer">
		<?php
  			$xml = new DomDocument();
  			$xml->load('https://www.qdqmedia.com/blog/feed/');
  			$raiz = $xml->documentElement;
  			$entradas = $raiz->getElementsByTagName('item');
  			for($i=0;$i<4;$i++){
    		$titulo = $entradas->item($i)->getElementsByTagName('title')->item(0)->nodeValue;
    		$vinculo = $entradas->item($i)->getElementsByTagName('link')->item(0)->nodeValue;
    		$fecha = $entradas->item($i)->getElementsByTagName('pubDate')->item(0)->nodeValue;
    		$fecha_unix = strtotime($fecha);
    		$fecha = strftime("%d/%m/%Y",$fecha_unix);
    		$post_content = $entradas->item($i)->getElementsByTagName('encoded')->item(0)->nodeValue;
    		$matches = [];
    		preg_match_all("/<img [^>]+>/", $post_content, $matches);
    		$img = $matches[0][0];
    		echo '<li class="lastPost"><a href="'.$vinculo.'"title="'.$titulo.'"><h3 class="lastPostTitle">'.$titulo.'</h3><figure>'.$img.'</figure></a></li>';
    	  }
		?>
		</ul>
	</section>
	<section class="nuestroEquipo">
		<div class="wrapper">
			<h2 class="mainClaim">¿Quieres formar parte de nuestro equipo?</h2>
			<p class="secondaryClaim">Envianos tu cv y valoraremos tu candidatura</p>
			<article>
				<p>QDQ media forma parte de SoLocal Group, lider europeo en publicidad digital local. Alrededor de 350 personas forman parte del equipo de QDQ media, repartidos por casi todas las ciudades del España, con oficinas en Madrid, Barcelona y Zaragoza.</p>
				<p>Somos un equipo que se caracteriza por los valores de solidaridad, complementariedad y complicidad, pero sobre todo, un equipo con un gran espiritu innovador y que se adapta rápidamente a los cambios que exige el ser una empresa de Internet.</p>
				<p>Si quieres formar parte de un Grupo líder que apuesta por la modernidad, la innovación y el desarrollo constante, ésta es tu oportunidad</p>
				<a href="" class="button">trabaja con nosotros</a>
			</article>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>