$(document).ready(function(){   

    $("#send").click(function()
    {       
     $.ajax({
         type: "POST",
         url: base_url + "chat/post_action", 
         data: {textbox: $("#textbox").val()},
         dataType: "text",  
         cache:false,
         success: 
              function(data){
                alert(data);  //as a debugging message.
              }

     return false;
 });
 });