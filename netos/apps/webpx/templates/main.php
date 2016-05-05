<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
<title>PHP-Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}
blurlayer{position:fixed;left:0;top:0;width:100%;height:100%;	backdrop-filter:blur(25px);z-index:-1;}
#container {
	width:100%;
	margin:0 auto;
	margin-top:150px;
	
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
 
	background-color:white;
	
 -webkit-box-shadow: 0px 1px 5px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 5px 1px rgba(0,0,0,0.75);
box-shadow: 0px 1px 5px 1px rgba(0,0,0,0.75);
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 4px;
	padding:16px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
body
{
	background:rgba(255,255,255,0.5);

}
</style>

</head>

<body>
	<blurlayer>&nbsp;</blurlayer>
	<script>parent.darkUI();</script>

<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;">Web Browser BETA</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:calc(100% - 45px);" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
	Powered by <a href="//www.php-proxy.com/" target="_blank">PHP-Proxy</a> <?php echo $version; ?>
</div>


</body>
</html>
