<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title><?php echo $title_for_layout; ?></title>

   	<?php
		echo $html->meta('icon');

		echo $html->css(ASSET_CSS . '/master');
		
		echo $html->css(ASSET_JS . '/lib/jquery.min');

		echo $scripts_for_layout;
	?>
 
</head>
<body>
    
    <?php echo $content_for_layout; ?>
    
    <?php echo $cakeDebug; ?>

</body>
</html>