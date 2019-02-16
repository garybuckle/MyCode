

$(Document).ready(function() {
    console.log("Ready!");
    var regex =  /is/;
    var string = "garybuckle is here";
    
    var result = string.match(regex);
    
    console.log(result);

});


