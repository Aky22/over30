<?php
	require_once("include/config.inc.php");
	require_once("include/functions.php");
	if(!isset($_COOKIE['lang']))
	{
		$language = DEFAULT_LANGUAGE;
	}
	else
	{
		$language = $_COOKIE['lang'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" type="text/css" href="js/lightbox.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.hover_caption.js" type="text/javascript"></script>
<script src="js/jquery.nicefileinput.min.js" type="text/javascript"></script>
<script src="js/lightbox.min.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.slider_img').hover_caption({
		caption_default: "<a href=\"versenyzok.php?id=1\"><img src=\"style/img/img_hover_button.png\" alt=\"button\" /></a><p>Kiss Zita</p><label>35 éves, vállalkozó</label><label>Hobbi: zene, sport, olvasás</label>"
	});
  });
</script>

</head>

<body>
<header>
	<div class="center">
		<div id="logo">
			<img src="style/img/logo.png" alt="logo" />
		</div>
		<div id="menu">
			<?php
				require_once('include/menu.php')
			?>
		</div>
	</div>
</header>