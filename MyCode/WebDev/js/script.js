document.getElementById('changeText').onclick = function() {
        console.log("Button clicked");
        var textEntered = "";
        textEntered = document.getElementById("userInput").value;
        console.log(textEntered);
        document.getElementById("theText").innerHTML=textEntered;
}


