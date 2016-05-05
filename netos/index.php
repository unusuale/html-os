<?php
// Initialization Code Core
$homeApp = '';
$materialLibrary = '';
$baseTheme = '';
$startScript = '';
$xxz = '';
if(isset($_COOKIE["homeScreen"])) {
$homeApp= $_COOKIE["homeScreen"];
} else
{	$homeApp="apps/homescreen/";}


if(isset($_COOKIE["materialLib"])) {
$materialLibrary= $_COOKIE["materialLib"];
} else
{	$materialLibrary="style/default/material.css";}


if(isset($_COOKIE["theming"])) {
$baseTheme= $_COOKIE["theming"];
} else
{	$baseTheme="style/default/def.css";}

if(isset($_COOKIE["startScript"])) {
$startScript= $_COOKIE["startScript"];
} else
{	$startScript="console.log('No Entries')";}


?>
<html>
<head>
<script src="framework.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> <!--I would like to make HTMLOS on mobile too-->
 <script src="windowmanager.service.js"></script>
 <script src="eventd.js"></script>
<script src="system/lib/jquery-1.6.2.min.js"></script>
<script src="system/lib/jquery-ui-1.11.4/jquery-ui.js"></script>
<link href="<?php echo $materialLibrary?>"
      rel="stylesheet">
<link href="<?php echo $baseTheme?>"
      rel="stylesheet">
<!--

TODO: Move to CSS file later and provide StyleSwitcher API

-->
<title>html-os rewritten hobbyOS</title>
<script>
function loader()
{
var marbobo = document.getElementById("requestFullscreen");
marbobo.webkitRequestFullscreen();

}
var timer;
var cleaner;
	function time_update()
{	
var d = new Date();
var n = d.toDateString();

	var inrt = timer.innerHTML;
	var tube1 = n;
	var fi =  (d.getHours()<10?'0':'') + d.getHours() + ":" + (d.getMinutes()<10?'0':'') + d.getMinutes();
 	timer.innerHTML = fi;

	
}
function stuff()
{
	setInterval(time_update,1000 * 10);
var d = new Date();
var n = d.toDateString();
	cleaner = document.getElementById("notifs-storage");
	timer = document.getElementById("time");
	var inrt = timer.innerHTML;
	var tube1 = n;
	var fi =  (d.getHours()<10?'0':'') + d.getHours() + ":" + (d.getMinutes()<10?'0':'') + d.getMinutes();
 	timer.innerHTML = fi;
	<?php echo $startScript?>;

}
</script>
</head>
<body onload="stuff()">
<button style="z-index:999;position:fixed;bottom:0;width:100%;height:42px;" onclick="loader()">Fullscreen</button>
<div id="requestFullscreen">
<div id="SystemWindows">
	<div id="systemui-commons">
		<span id="time"></span><button onclick="stHome()"><i class="material-icons">home</i></button><button onclick="toggleNotificationCenter()"><i class="material-icons">notifications</i></button>
	</div>
 
	<div id="floatify">

	</div>
	
	<span id="contain_notif">

	</span>
</div>


<div id="MainWindowsBinder">
 
</div>

<iframe id="HomeLayer" src="<?php echo $homeApp?>">

</iframe>
</div>

</body>
</html>
