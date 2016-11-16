<?php global $HeaderTitle;  ?> 
<?php $HeaderTitle = "Blog";  ?>
<?php
    global $post;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="foto_cabecera">
	<div class="innerHeader backgroundImg" style="background: url(<?php echo $src[0]; ?> ) !important; background-size:cover!important;">
	    <div class="wrapper">
    	    <p class="mainClaim"><?php echo $HeaderTitle?></p>
            </div>
	</div>
</div> 