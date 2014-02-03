$(document).ready(function(){
  
 $("button#submit").click(function(){ 
    
         if($("#ID").val() === "" || $("#P").val() === "")
             $("div#one").html("please enter both Id AND Password");
         else
             $.post($("#myform").attr("action"),
              $("#myform :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform").submit(function(){
                return false;
            });
           
                       
});
});

  
                $(document).ready(function(){
  
      $("button#s").click(function(){ 
    
         if($("#my_id").val() === "" || $("#myList").val() === "")
             $("div#one").html("please enter boh Id AND Password");
         else
             $.post($("#myform").attr("action"),
              $("#myform :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform").submit(function(){
                return false;
            });
            });
});



  