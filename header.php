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
					<img itemprop="logo" src="http://localhost:8888/QDQmedia/img/logo_qdqmedia_grupo_solocal.png" alt="La agencia de marketing online de las pymes: QDQ media" class="logotipoQDQmedia" />
				</a>
			</figure>
			<nav  itemscope itemtype='http://schema.org/SiteNavigationElement' role='navigation' class="main-nav">
				<div class="menu-toggle">
    				<a href="" class="ion-navicon"></a>
  				</div>
				<ul class="fadeInRight">
					<li><a itemprop='url' class="<?php echo ($page_name=='home.php')?'active':'';?>" href="index.php"><span itemprop='name'>Home</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='about.php')?'active':'';?>" href="about.php"><span itemprop='name'>About</span></a></li>
					<li><a itemprop='url'  class="<?php echo ($page_name=='contact.php')?'active':'';?>" href="contact.php"><span itemprop='name'>Contact</span></a></li>
				</ul>
  			</nav>
		</div>
	</header>