<!DOCTYPE HTML>
<html>
<head>
<title>Barsystem - Sistema de gerenciamento de bar, pub, balada ou restaurante</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/devicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="js/teste_gratuitamente.js"></script>

</head>
<body>

   <div class="header-top">
       <div class="wrap"> 
	         <div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			 </div>
		     <div class="cssmenu">
			  <nav id="nav" role="navigation">
				<a href="#nav" title="Show navigation">Mostrar Navegação</a>
				<a href="#" title="Hide navigation">Esconder Navegação</a>
				<ul class="clearfix">
					<li><a href="#home" class="scroll">Inicio</a></li>
				    <li><a href="#about" class="scroll">Sobre</a></li>
					<li><a href="#portfolio" class="scroll">Clientes</a></li>
					<li><a href="#contact" class="scroll">Contato</a></li>
					<li><a href="#orcamento" class="scroll">Preço</a></li>
					<li class="active"><a href="#testeGratis" class="scroll" style="background:#0cb119">Teste Gratuitamente</a></li>
					<li><a href="#" target="_blanck">Pós-pago</a></li>					
					<div class="clear"></div>
				</ul>
			  </nav>
		     </div>
		    <div class="clear"></div>
	   </div>
	 </div>
     <div class="header-bottom" id="home">
    	 <div class="wmuSlider example1" style="height: 551px;">
			   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
				   		<h1 class="m_1">Bem vindo ao Barsystem</h1>
				   		<p class="m_2">Um novo jeito de administrar seu bar, balada ou restaurante.</p>
						<img src="images/banner.png" alt=""/>
					</div>
				 </article>

				 <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
				   		<h1 class="m_1">Todos ganham!</h1>
				   		<p class="m_2">Cliente chega até o estabelecimento, adquire o cartão, efetua uma recarga no caixa, faz o pedido nos bares e o valor do produto é descontado do saldo no cartão.</p>
						<img src="images/banner2.png" alt=""/>
					</div>
				 </article>

				  <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
				   		<h1 class="m_1">Perdeu o Cartão?</h1>
				   		<p class="m_2">O cartão é de exclusividade do cliente e pode retornar e utilizar os serviços do estabelecimento, assim ele tem um controle de gastos e evita filas. Caso perca o cartão, pode adquirir um novo e o saldo continua o mesmo.</p>
						<img src="images/banner3.png" alt=""/>
					</div>
				 </article>

				  <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
				   		<h1 class="m_1">Maior Controle</h1>
				   		<p class="m_2">O Estabelecimento tem excelência e simplicidade no atendimento, evita fraudes, tem maior controle de estoque, evita a perda de comandas e não tem filas na saída.</p>
						<img src="images/banner4.png" alt=""/>
					</div>
				 </article>


				 <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
				   		<h1 class="m_1">Gera Receita</h1>
				   		<p class="m_2">O próprio sistema se paga, pois gera receita de três formas diferentes, entre em contato conosco para saber mais a respeito.</p>
						<img src="images/banner5.png" alt=""/>
					</div>
				 </article>
				 
		         <a class="wmuSliderPrev">Anterior</a><a class="wmuSliderNext">Próximo</a>
		  </div>
		  <script src="js/jquery.wmuSlider.js"></script> 
			<script>
       		   $('.example1').wmuSlider();         
   			</script> 	
	 </div>
     <div class="content-top" id="about">
	 		<h2 class="m_3">Sem filas ou comandas de papel</h2>
	 		<p class="m_4"></p>
	 		<div class="box1">
				<div class="col_1_of_3 span_1_of_3">
					<img src="images/icon1.png" alt=""/>
				    <div class="desc">
						<h3>Simplicidade</h3>
						<p>Sem burocracia, design agradável e com muita segurança.</p>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<img src="images/icon2.png" alt=""/>
				    <div class="desc">
						<h3>Controle</h3>
						<p>Maior facilidade em fechamento, estoque, descontos e cortesia.</p>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<img src="images/icon3.png" alt=""/>
				    <div class="desc">
						<h3>Organização</h3>
						<p>Otimize seu estabelecimento, aumente seus lucros.</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
	 	</div>

	 	
	    <div class="middle-bottom" id="portfolio">
	 	  <div class="wrap">
	 		<h3 class="m_7">Clientes que já utilizam o barsystem.</h3>
	 	  	<p class="m_8"></p>
			   <ul id="flexiselDemo3">
				<li><img src="images/pic4.jpg" /><p><a href="#" target="_blanck">Bar da Brahma Mogi</a></p></li>
				<li><img src="images/pic5.jpg" /><p><a href="#" target="_blanck">Pindabar</a></p></li>
				<li><img src="images/pic6.jpg" /><p><a href="#" target="_blanck">Point do Vinho</a></p></li>
				<li><img src="images/pic7.jpg" /><p><a href="#" target="_blanck">Confraria Brasileira</a></p></li>
				<li><img src="images/pic8.jpg" /><p><a href="#" target="_blanck">Dom Bosco</a></p></li>
				<li><img src="images/pic9.jpg" /><p><a href="#" target="_blanck">The Club Mogi</a></p></li>
				<li><img src="images/evolution.jpg" /><p><a href="#" target="_blanck">Evolution</a></p></li>

			   </ul>
		   <script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel();
				$("#flexiselDemo2").flexisel({
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });
			
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
     </div>
	<!--/slider -->
    </div>

    <div class="content-top" id="orcamento" style="background-color:#fff !important">

    	<div class="container">
	 	
	 		<div class="card-deck mb-3 text-center" id="precosMensais">
          	
          	
            <div class="card mb-4 shadow-sm">


              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Mensal</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">R$ 79,90 <br/> <small class="text-muted">Por mês</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>10 usuários incluídos</li>
                  <li>Caixa, Bar e Administrativo</li>
                  <li>No cartão de crédito ou boleto</li>
                  <li><b>Teste 7 dias gratuitamente</b></li>
                </ul>
                
               
             </div>

            </div>

            

            <div class="card mb-4 shadow-sm">

	              <div class="card-header">
	                <h4 class="my-0 font-weight-normal">Semestral</h4>
	              </div>
	              <div class="card-body">
	                <h1 class="card-title pricing-card-title">R$ 456,00 <br/> <small class="text-muted">Por Semestre</small> </h1>
	                <ul class="list-unstyled mt-3 mb-4">
	                  <li>10 usuários incluídos</li>
	                  <li>Caixa, Bar e Administrativo</li>
	                  <li>No cartão de crédito ou boleto</li>
	                  <li><b>Teste 7 dias gratuitamente</b></li>
	                </ul>
	             
	               </div>

            </div>
            <div class="card mb-4 shadow-sm">


	              <div class="card-header">
	                <h4 class="my-0 font-weight-normal">Anual</h4>
	              </div>
	              <div class="card-body">
	                <h1 class="card-title pricing-card-title">R$ 864,00 <br/>  <small class="text-muted">Por Ano</small> </h1>
	                <ul class="list-unstyled mt-3 mb-4">
	                  <li>10 usuários incluídos</li>
	                  <li>Caixa, Bar e Administrativo</li>
	                  <li>No cartão de crédito ou boleto</li>
	                  <li><b>Teste 7 dias gratuitamente</b></li>
	                </ul>
	                 
	               </div>


            </div>
          </div>
		
		</div>
	</div>


    <div class="content-top" id="testeGratis" align="center">
	 	<h2 class="m_3">Teste Gratuitamente por 7 dias</h2>
	 	<p class="m_4">Preencha os dados abaixo para realizar o teste gratuitamente</p>
	 		
	 		
			<form method="post" action="senders/contatoPostSenders.php">

				<div class="form-group">
				    <label class="m4_label"><b>Seu Nome:</b></label>
				    <input type="text" class="form-control" style="width:400px;height:30px;" name="nome" id="nome" required>
				</div>

				<div class="form-group">
				    <label class="m4_label"><b>Telefone:</b></label>
				    <input type="text" class="form-control" maxlength="9" style="width:400px;height:30px;" name="telefone" id="telefone" required>
				</div>

				<div class="form-group">
				    <label class="m4_label"><b>Email:</b></label>
				    <input type="email" class="form-control" style="width:400px;height:30px;" name="email" id="email" required>
				</div>

				<p class="m_4"><input type="submit" style="width:400px;height:30px;" value="Enviar"></p>
					
			</form>		

			</div>
	 	</div>


	   <div class="footer" >
	 		<div class="footer-top">
	 			<div class="wrap" style="color:#FFF">
	 				<a href="mailto:contato@barsystem.com.br" style="text-decoration:none;color:#FFF;">contato@barsystem.com.br
	 				</h2>
	 				<p class="m_5"></a></p>
	 				 				
	 			</div>
	 		</div>
	 		<div class="footer-bottom" align="center">
	 		  <div class="wrap">
	     	  	<div class="copy">
				   <p>© 2014 - 2018 | Barsystem - Desenvolvido e mantido por <a href="http://www.rodolfomoreira.com/" style="color:#FFF" target="blanck">Rodolfo Moreira</a></p>
			    </div>
			    
			    <div class="clear"></div>
			  </div>
     	   </div>
     	   <div class="map" id="contact">
			 
		   </div>
	 	</div>
        <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
           <a href="#" id="toTop" style="display: block;">Up<span id="toTopHover" style="opacity: 1;"></span></a>
	      <script src="js/jquery.scrollTo.js"></script>
	  	<script>
			$(document).ready(function() {
				$('#nav').onePageNav({
					begin: function() {
					console.log('start')
					},
					end: function() {
					console.log('stop')
					}
				});
			});
	</script>
</body>
</html>

    	
    	
            