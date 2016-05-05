
<style type="text/css">

html body {
	margin-top: 50px !important;
	background:rgba(255,255,255,0.92);
	
}

#top_form {
	position: fixed;
	top:0;
	left:0;
	width: 100%;
	
	margin:0;
	background:transparent;
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	
	border-bottom:1px solid #151515;
	
	backdrop-filter:blur(10px);
	
	height:40px;
	line-height:20px;
}

#top_form input
{
	color:black;
	background:white;
	border:none;
}
#top_form input[name=url] {
	width: calc(100% - 104px);
	background-color:white;
	color:black;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	background: none repeat scroll 0% 0% #FFF;
}



</style>

<script src="//www.php-proxy.com/assets/url_form.js"></script>

<div id="top_form">

	<div style="width:100%; margin:0 auto;background:white;opacity:0.5">
 
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;"><br>
			<input type="button" value="HOME" onclick="window.location.href='index.php'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" value="GO">
		</form>
		
	</div>
	
</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>
