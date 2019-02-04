// Declare variables
var start = new Date().getTime();
var end = new Date().getTime();
var timeTaken = 0;
document.getElementById("timeTaken").innerHTML=timeTaken + " secs";

appearAfterDelay();




function makeShapeAppear() {
	randomShape();
	randShapePosition();
	setRandomColor();
	document.getElementById("shape").style.display="block";
	start=new Date().getTime();

}

function appearAfterDelay() {
	setTimeout(makeShapeAppear, Math.random() * 2000);


}


document.getElementById("shape").onclick = function() {
			document.getElementById("shape").style.display="none";
			end = new Date().getTime();
			timeTaken = (end - start)/1000;

			console.log("time taken = " + timeTaken);
			document.getElementById("timeTaken").innerHTML=timeTaken + " secs";
			appearAfterDelay();


}

function randShapePosition() {
	var top = Math.random() * 400;
	var right = Math.random() * 400;
	var bottom = Math.random() * 400;
	var left = Math.random() * 400;
	var randomSize = (Math.random() * 300) + 50;
	document.getElementById("shape").style.width = randomSize + "px";
	document.getElementById("shape").style.height = randomSize + "px";
	document.getElementById("shape").style.top = top +"px";
	document.getElementById("shape").style.right = right +"px";
	document.getElementById("shape").style.bottom = bottom +"px";
	document.getElementById("shape").style.left = left +"px";
}

function randomShape() {
	var rndN = Math.floor((Math.random() * 2) + 1)
	console.log (rndN);
	if (rndN == 1) {
		document.getElementById("shape").style.borderRadius = "50%";
	}

	else {
		document.getElementById("shape").style.borderRadius = "0px";

	}

}




function setRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  	document.getElementById("shape").style.backgroundColor = color;

}





