$(document).ready(function() {

	SendForm();
	/* init Send Fonction */
	function SendForm(){
		$("#contact-form").submit(function(){
	         $("#loader-msg").show();
	          $.ajax({
	                    type: "POST",
	                    url: "send-mil920.php",
	                    data:"nom="+$("#nom").val()+"&prenom="+$("#prenom").val()+"&tel="+$("#tel").val()+"&email="+$("#email").val()+"&message="+$("#message").val()+"&submitted="+$("#submitted").val(),
	                    success: function(msg){
	                      if(msg == "send") 
	                      {
	                      	$("#success").show();
	                        $("#loader-msg").hide();
	                      }
	                      else 
	                      {
	                      	$("#error").show();
	                        $("#loader-msg").hide();
	                      }
	                 }
	           });
	           return false; // j'empèche le navigateur de soumettre lui-même le formulaire
	     });
	 }/* end init Send Fonction */
});