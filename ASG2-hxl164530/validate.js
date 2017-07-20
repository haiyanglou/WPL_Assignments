$(document).ready(function() {
	$("#s1, #s2, #s3, #s4, #s5, #s6, #s7, #s8, #s9").hide();

  
  $("#username").focus(function(){
    $("#username").css("background-color","#cc9");
    $("#s4").hide();
    $("#s5").hide();
    $( "#s1" ).insertAfter( "#username" );
    $("#s1").show();
  });
  $("#username").blur(function(){
  	if ($("#username").val()== ''){
  		$("#username").css("background-color","white");;
  		$("#s1").hide();
  	}

  	else if (n=/^[A-Za-z0-9]+$/.test($("#username").val())==false){
  		$("#username").css("background-color","#c99");;
  		$("#s1").hide();
  		$("#s4").hide();
  		$("#s5").insertAfter( "#username" );
  		$("#s5").show();
  	}

  	else{
  		$("#username").css("background-color","#9c9");
  		$("#s1").hide();
  		$("#s5").hide();
  		$("#s4").insertAfter( "#username" );
  		$("#s4").show();
    }
  });

  $("#password").focus(function(){
  	$("#password").css("background-color","#cc9");
    $("#s6").hide();
    $("#s8").hide();
    $( "#s2" ).insertAfter( "#password" );
    $("#s2").show();
  });
  $("#password").blur(function(){
  	if ($("#password").val()== ''){
  		$("#password").css("background-color","white");;
  		$("#s2").hide();
  	}

  	else if (($("#password").val().length < '8') ) {
  		$("#password").css("background-color","#c99");;
  		$("#s2").hide();
  		$("#s6").hide();
  		$("#s8").insertAfter( "#password" );
  		$("#s8").show();
  	}

  	else{
  		$("#password").css("background-color","#9c9");
  		$("#s2").hide();
  		$("#s8").hide();
  		$("#s6").insertAfter( "#password" );
  		$("#s6").show();
    }
  });

    $("#email").focus(function(){
    $("#email").css("background-color","#cc9");
    $("#s7").hide();
    $("#s9").hide();
    $( "#s3" ).insertAfter( "#email" );
    $("#s3").show();
  });
  $("#email").blur(function(){
  	if ($("#email").val()== ''){
  		$("#email").css("background-color","white");;
  		$("#s3").hide();
  	}

  	else if (n=/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/.test($("#email").val())==false){
  		$("#email").css("background-color","#c99");;
  		$("#s3").hide();
  		$("#s7").hide();
  		$("#s9").insertAfter( "#email" );
  		$("#s9").show();
  	}

  	else{
  		$("#email").css("background-color","#9c9");
  		$("#s3").hide();
  		$("#s9").hide();
  		$("#s7").insertAfter( "#email" );
  		$("#s7").show();
    }
  });
    
});
