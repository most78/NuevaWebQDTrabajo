<?php
	$full_name = $_SERVER[ 'PHP_SELF' ];
	$name_array = explode( '/', $full_name );
	$count = count( $name_array );
	$page_name = $name_array[$count-1];       
?>
<body>
<!-- <div class="animsition" style="animation-duration: 3000ms; opacity: 1;"> -->
	<header>
		<div class="wrapper">
			<figure itemscope itemtype="http://schema.org/Organization" >
				<a href="https://www.qdqmedia.com/" itemprop="url" title="La agencia de marketing online de las pymes">
					<img itemprop="logo" src="img/logo_qdqmedia_grupo_solocal.png" alt="La agencia de marketing online de las pymes: QDQ media" class="logotipoQDQmedia" />
				</a>
			</figure>
			<nav  itemscope itemtype='http://schema.org/SiteNavigationElement' role='navigation' class="main-nav">
				<div class="menu-toggle">
    				<span class="ion-close"></span>
  				</div>

				<ul class="fadeInRight">
					<li><a itemprop='url' class="animsition-link <?php echo ($page_name=='home.php')?'active':'';?>" href="http://172.20.130.123/qdqmedia/home.php"><span itemprop='name'>inicio</span></a></li>
					<li><a itemprop='url'  class="animsition-link <?php echo (($page_name=='conoce-Qdqmedia.php')||($page_name=='socios-QDQmedia.php')||($page_name=='historia-QDQmedia.php')||($page_name=='equipo-QDQmedia.php'))?'active':'';?>" href="http://172.20.130.123/qdqmedia/conoce-Qdqmedia.php"><span itemprop='name'>quíenes somos</span></a></li>
					<li><a itemprop='url'  class="animsition-link <?php echo ($page_name=='ofertas-qdqmedia.php')?'active':'';?>" href="http://172.20.130.123/qdqmedia/ofertas-qdqmedia.php"><span itemprop='name'>ofertas</span></a></li>
					<li><a itemprop='url'  class="animsition-link <?php echo ($page_name=='wordpress/index.php')?'active':'';?>" href="
http://172.20.130.123/qdqmedia/wordpress/"><span itemprop='name'>blog</span></a></li>
					<li><a itemprop='url'  class="animsition-link <?php echo ($page_name=='opiniones.php')?'active':'';?>" href="opiniones.php"><span itemprop='name'>opiniones</span></a></li>
					<li><a itemprop='url'  class="animsition-link <?php echo ($page_name=='contacto-qdqmedia.php')?'active':'';?>" href="http://172.20.130.123/qdqmedia/contacto-qdqmedia.php"><span itemprop='name'>contacto</span></a></li>
				</ul>
  			</nav>
		</div>
	</header>