//JAVASCRIPT FRAMEWORK APIS 

//notification point0
var notivisible = false;
var notitimer;



function darkUI()
{
	var systemUI = document.getElementById("systemui-commons");
	systemUI.className = "darkUI";
	
}

function whiteUI()
{
	var systemUI = document.getElementById("systemui-commons");
	systemUI.className = " ";
	
}


function setStatusBarBG(color)
{
		var systemUI = document.getElementById("systemui-commons");
	systemUI.style.backgroundColor = color;
}

console.log("Framework 0.1 Started : /invoker/invoke/");
function getTime24H()
{	var d = new Date();
 
	return (d.getHours()<10?'0':'') + d.getHours() + ":" + (d.getMinutes()<10?'0':'') + d.getMinutes();
}

var notifications;
var nocode = '<div id="notifications"><br><br><center><button id="btn_today" onclick="ButtonToday()" class="active">Today</button><button id="btn_widgets" onclick="ButtonWidgets()" >Widgets</button><button onclick="ButtonQuickSettings()" id="btn_qs">QuickSettings</button><br><br></center><span id="inner"><button onclick="cl()" style="margin-left:4px;"> <i class="material-icons">clear_all</i> <span style="position:relative;top:-6px">CLEAR ALL</span></button><br><br><br><span id="notifs-storage"><center>Loading Notifications</center></span></span></div>';


var todaycode = '<button onclick="cl()" style="margin-left:4px;"> <i class="material-icons">clear_all</i> <span style="position:relative;top:-6px">CLEAR ALL</span></button><br><br><br><span id="notifs-storage"></span>';


var widgetscode;
var quicktilescode;

var buttonState = "today"
function colorSwitch() {
var fir = document.getElementById("btn_today");
var sec = document.getElementById("btn_widgets");
var thi = document.getElementById("btn_qs");
if (buttonState == "today") {fir.className="active";sec.className="";thi.className=""}
if (buttonState == "widgets") {fir.className="";sec.className="active";thi.className=""}
if (buttonState == "quicksettings") {fir.className="";sec.className="";thi.className="active"}
}
var notitimerstate = false;
function readNotifications()
{
 	var notification_reading_variable = document.getElementById("notifs-storage");
	notification_reading_variable.innerHTML = notifications;
}
function toggleNotificationTimer()
{
	console.log("TRIGGERED NotificationTimer");
		if (notitimerstate) // timer is enabled.
	{	notitimerstate = false;
	console.log("CLEAR.Timer");
		window.clearInterval(notitimer);

	}

	else 
	{
	notitimer = setInterval(function(){readNotifications()}, 2000);
	notitimerstate = true;
	console.log("SET.Timer");
	}	
}
function ButtonToday()
{
	xswitch = document.getElementById("inner");
	buttonState = "today";
toggleNotificationTimer()
	xswitch.innerHTML = todaycode;
colorSwitch();
}
function ButtonWidgets()
{
		xswitch = document.getElementById("inner");
	buttonState = "widgets";
notitimerstate = false;
		window.clearInterval(notitimer);
	xswitch.innerHTML = widgetscode;
colorSwitch();
}
function ButtonQuickSettings()
{
		xswitch = document.getElementById("inner");
	buttonState = "quicksettings";
notitimerstate = false;
		window.clearInterval(notitimer);
	xswitch.innerHTML = quicktilescode;
colorSwitch();
}

function cl(){notifications=""}
function toggleNotificationCenter()
{
	var contaxxxx = document.getElementById("contain_notif");
	if (notivisible)
	{
		contaxxxx.innerHTML = "";
		notivisible = false;
notitimerstate = false;
		window.clearInterval(notitimer);
	}
	else
	{
		contaxxxx.innerHTML = nocode;
		toggleNotificationTimer();
		notivisible = true;
	}
}
function stHome()
{
 whiteUI();
splice1 = "ready";
splice2 = "ready";
var WindowBind = document.getElementById("MainWindowsBinder");
			WindowBind.style.display = "none";
 
WindowBind.innerHTML = "";


}
/**
 * @param {string} title Notification Title
 * @param {string} content Content of Notification
 * @param {boolean} fu Enable Float Up Notifications
 */
var notifCode = '<div class="encap"><div id="time_float">#TIME</div><div id="title_float">#TITLE</div><div id="content_float">#CONTENT</div></div>';
function postNotification(title, content,fu)
{
	var FU = document.getElementById("floatify");
	var stageOne = notifCode.replace("#TITLE", title);
	var stageTwo = stageOne.replace("#CONTENT", content);
	var timePlace = stageTwo.replace("#TIME", getTime24H());
	notifications = timePlace + "<br>" + notifications
	if (fu) 
	{
		FU.innerHTML = timePlace;
		FU.style.display  = "block"
		setTimeout(function(){FU.style.display  = "none"}, 2016);
	}

}


//honestly i wasted my time for this, not discovering that there is such thing is parent funtion [CAPTAINHANDSOMEDAMNIT].
function startApp(mode,path)
{
	console.log('[framework ipc] AppStarter: starting MODE: ' + mode + ", PATH: " + path);
	var wn = JSON.stringify({MODE: mode, PATH: path});

	window.top.postMessage('[AppStarter]' +  wn, "*");
}

 

