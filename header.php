<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/fixed-header.js"></script>
<script src="js/hide_show_mainMenu.js"></script>

<?php
	$full_name = $_SERVER[ 'PHP_SELF' ];
	$name_array = explode( '/', $full_name );
	$count = count( $name_array );
	$page_name = $name_array[$count-1];       
?>
<body>
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
					<li><a itemprop='url' class="<?php echo ($page_name=='home.php')?'active':'';?>" href="index.php"><span itemprop='name'>inicio</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='quienes_somos.php')?'active':'';?>" href="quienes_somos.php"><span itemprop='name'>quíenes somos</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='ofertas.php')?'active':'';?>" href="ofertas.php"><span itemprop='name'>ofertas</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='blog.php')?'active':'';?>" href="blog.php"><span itemprop='name'>blog</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='opiniones.php')?'active':'';?>" href="opiniones.php"><span itemprop='name'>opiniones</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='contacto.php')?'active':'';?>" href="contacto.php"><span itemprop='name'>contacto</span></a></li>
				</ul>
  			</nav>
		</div>
	</header>