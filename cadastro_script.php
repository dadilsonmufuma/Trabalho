<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

	<title>Tudo sobre o Samsung Galaxy S23 Ultra</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<link	rel="stylesheet" href="_css/cabecalho.css">
	<link	rel="stylesheet" href="_css/fotos.css">
	<link	rel="stylesheet" href="_css/contacto.css">
</head>

<body>
	

			<header	class="cabecalho">
				<!--	Conteúdo	do	header	
				<a	href="index.html"><img	src="img/logo1.png" title="Ir	para	a	página	inicial	da	Musicdot" alt=
				"Musicdot">-->
		
				<img	class="cabecalho__logo" src="_imagens/logos23.jpg" title="Ir	para	a	página	inicial	da	Samsung" alt="Samsung">
				</a>
											
											<nav>
												<ul	class="cabecalho__menu">
													<li	class="cabecalho__item-menu"> <a	href="index.html">	Início	</a> </li>
													<li	class="cabecalho__item-menu"> <a	href="#espe">	Especificações	</a> </li>
													<li	class="cabecalho__item-menu"> <a	href="#mult">	Multimídia	</a> </li>
													<li	class="cabecalho__item-menu"> <a	href="#cont">	Contato	</a> </li>
												  </ul>
									</nav>


		</nav>
		</header>


			<h2 id="cont">PRE-CADASTRO</h2>
		
            <div class ="container"> 
		<div class="row"> 

		<?php 
    include "conexao.php";
        
        $nome = $_POST['nome'];
       
        $email = $_POST['email'];

   

   $sql = "INSERT INTO `cliente`( `nome`, `email`,) VALUES
    ('$nome','$email')";

  

        ?>
        
	   </div>
	    </div>
		
		</article>
		</section>
		

		<footer id="rodape">
		<p>Copyright &copy; INFGEST 2023 - by Grupo II <br/>
		 
		<a href="https://ugs.ed.ao/" target="_blank">FACULDADE ENGENHARIA<a/> </p>
		</footer>
	</div>	
</body>
</html>