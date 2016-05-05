

	console.log("Window Manager 0.0 on Localhost, HTML-Based Started");


//---------------------------------------------------------------------



 
//Only the Home Application can run Apps at the moment.
//Multiple apps running? The last app will get 0x0 View :D

//splice TODO: Fuck, Use the Device Rotation so it will not get ugly by 50/50 sharing Portrait-style
//always loaded Splices Tables to determine Stuff.
var splice1 = "ready";
var splice2 = "ready";

//FullScreen Module
var full0;
//read only splice pre-layout.
var spliceCode = "<div class='splice1' id='#UUID_Owner'><iframe src='$int_1'></iframe></div><div class='splice2' id='#UUID_Owner_2'><iframe src='$int_2'></iframe></div>";
//dont worry about refreshing: Splices are ran as grouped by the Launcher. Captainhandosmedamnit.
 
function launchApp(mode, codepath)
{
var WindowBind = document.getElementById("MainWindowsBinder");
	var uuid = Math.random() * 1000;
	var wagMangAagawPwede;
	//SPLICES: Run on Splice1 ONLY.
	if (mode=="SPLICE_MODE") {
		var splicelocation;
		if (splice1 == "ready") {
			splicelocation=="1";
			var prepro;
			if (!(splice2 == "ready")){prepro = WindowBind.innerHTML;console.log("non-ready");}
			if (splice2 == "ready"){prepro = spliceCode;}
			repro = prepro.replace("#UUID_Owner", uuid);
			expro = repro.replace("$int_1", codepath);
			WindowBind.innerHTML = expro;
			splice1 = uuid;
console.log("SPLICE1 TAKING OVER: " + uuid);
			wagMangAagawPwede = 1;
			WindowBind.style.display = "block";
			WindowBind.style.width="100%";
			WindowBind.style.height="100%";
			
			return uuid;
			
			}

		if (splice2 == "ready" && !(wagMangAagawPwede == 1)) {
			splicelocation=="2";
			var prepro;
			if (!(splice1 == "ready")){ prepro = WindowBind.innerHTML;console.log("non-ready");}
			if (splice1 == "ready"){ prepro = spliceCode;}
 
			repro = prepro.replace("#UUID_Owner_2", uuid);
			expro = repro.replace("$int_2", codepath);
			WindowBind.innerHTML = expro;
			splice2 = uuid;
console.log("SPLICE2 TAKING OVER: " + uuid);
WindowBind.style.display = "block";
			WindowBind.style.width="100%";
			WindowBind.style.height="100%";

			return uuid;

			}
		
	}
	else //throw anyting in argument "mode" if not splice-mode lol, they cannot still splice on one app active btw, relax, splices are strictly made in home only.
	{
		WindowBind.innerHTML = "<iframe src='" + codepath + "'></iframe>";
		console.log("FULLSCREENMODE: " + uuid);
		WindowBind.style.display = "block";
			WindowBind.style.width="100%";
			WindowBind.style.height="100%";

		return uuid;
	}	
}

function clojure(uuid)
{
	if (splice1==uuid){splice1="ready";WindowBind.style.display = "none";
			WindowBind.style.width="0%";
			WindowBind.style.height="0%";

}
	if (splice2==uuid){splice2="ready";WindowBind.style.display = "none";
			WindowBind.style.width="0%";
			WindowBind.style.height="0%";}
WindowBind.style.display = "none";
				WindowBind.style.width="0%";
			WindowBind.style.height="0%";
}
