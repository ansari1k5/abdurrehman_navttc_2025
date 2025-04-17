
let index = 0;
let messages = ["And I'm Web-Develper","And Web-Designer"];


setInterval(function(){
    $("#text1").text(messages[index]);
    index = (index + 1) % messages.length; // Loops back to start
    }, 2000); // 2000ms = 2 seconds

    $("#btn").click(function(){
        $("#text2").text("The Text ");
      });