$(Document).ready(function() {
    var currentStep = 0;
$("#step1").hide();
$("#step2").hide();

$("#btnStep1").click(function() { 
    console.log("Button 1 Clicked");
$("#step1").show();
$("#step2").hide();
});

$("#btnStep2").click(function() { 
$("#step1").hide();
$("#step2").show();
});
    
});


