$(document).ready(function (){
	
function QueryProcessLogIn(){
                         var menuone=$("#usrname").val();                 
                          var menutwo=$("#psw").val();
                          

                         
                      var data = "YName="+menuone+"&PWord="+menutwo+"&action=go";
                      console.log("data:"+data);
                        $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: "./intface/dataproc/loginproc.php", 
                                data: data,
                                success: function(datajson) {
                                          
                                  if(datajson=="1"){

                                  	console.log("success");
                                  	 window.location.href = "./intface/mainPage.php?="+ (new Date()).getTime();

                                      
                                                          }
                                  }
                              });
    return false;
}

$("#signin_button").on("click", function(e) {
    e.preventDefault();

  console.log("click");
var usr1=$('#usrname').val();
var psw1=$('#psw').val();;
	if(usr1==""){
      $('#usrdiv').addClass("has-error");
      console.log("ok");
	}
	if(psw1==""){
      $('#passdiv').addClass("has-error");
      console.log("ok");
	}
	else{
		QueryProcessLogIn();
	}
});

































	});