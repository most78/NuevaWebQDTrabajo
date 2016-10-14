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
			<img src="http://localhost:8888/QDQmedia/img/logo_qdqmedia_grupo_solocal.png" alt="La agencia de marketing online de las pymes: QDQ media" class="logotipoQDQmedia">
			<nav class="main-nav">
				<div class="menu-toggle">
    				<div class="one"></div>
    				<div class="two"></div>
    				<div class="three"></div>
  				</div>
				<ul class="fadeInRight">
					<li><a class="<?php echo ($page_name=='home.php')?'active':'';?>" href="index.php">Home</a></li>
					<li><a class="<?php echo ($page_name=='about.php')?'active':'';?>" href="about.php">About</a></li>
					<li><a class="<?php echo ($page_name=='contact.php')?'active':'';?>" href="contact.php">Contact</a></li>
				</ul>
  			</nav>
		</div>
	</header>