$( document ).ready(function() {
    console.log( "ready!" );


    document.getElementById('teste_gratis').onsubmit= function(e){

    	console.log('teste gratis');

    	e.preventDefault();

		$('body').append('<div id="backLoader" class="backLoader"><div class="loader"></div></div>');


		var nome = $("#nome").val();
		var email = $("#email").val();
		var ddd = $("#ddd").val();
		var telefone = $("#telefone").val();	
		var senha = $("#senha").val();
		var workspace = $("#workspace").val();

		var createTeste = {
			nome:nome,
			email:email,
			ddd:ddd,
			telefone:telefone,
			senha:senha,
			workspace:workspace
		}

		$.ajax({
            url:"../teste_gratuitamente.php",
            type:'post',
            data:createSignature
        }).done(function(idSignature){


        }).fail(function(){

        	$("#erroAssinatura").modal({
		        backdrop: 'static',
		        keyboard: false
		    });

            console.log('erro alterar id assinatura subscriber');
        });

	}
});