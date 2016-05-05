window.addEventListener("message", receiveMessage, false);
//window managing on HTMLOS, with times two the serving stuff.
function receiveMessage(event)
{

 	console.log('serving received, creating window:  ' + event.data,event); 	
	var xd = event.data;
	
	if (xd.substring(0, 12) == "[AppStarter]") {
		handleWindows(xd.replace("[AppStarter]", ""));
	}
}

function handleWindows(originalData)
{
	var obj = JSON.parse(originalData);
	console.log(obj);
	launchApp(obj.MODE, obj.PATH);

}
