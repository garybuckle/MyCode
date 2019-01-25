/*
document.getElementById('changeText').onclick = function() {
        console.log("Button clicked");
        var textEntered = "";
        textEntered = document.getElementById("userInput").value;
        console.log(textEntered);
        document.getElementById("theText").innerHTML=textEntered;
}
*/


/*
var myArray = new Array();

myArray[0]= "Squash";
myArray[1] = "Running";
console.log("Contents of myArray  = " + myArray);


console.log(myArray);


var tweets = ["Hello", "Coffee"];
tweets.push("Work","more work");

console.log("Contents of tweets  is    " + tweets);

tweets.splice(0,2);

console.log("Contents of tweets after splice is    " + tweets);

tweets.splice(0, 2, "Tea");

console.log("Contents of tweets after splicing and adding  is    " + tweets);
*/






document.getElementById("checkMagicWord").onclick = function() {

 	console.log("Button Clicked");

	var guess = document.getElementById("magicWord").value;
	var magicWord = "Gazza";


	console.log(guess);

	if  (guess == magicWord) {
	console.log("Correct");
}

else {
	console.log("incorrect")
}


}


