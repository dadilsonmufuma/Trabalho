<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AngoForma - Centro de formção online</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsividade CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Customização CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">

<style>
    body{ font: 14px sans-serif; }
    .wrapper{ width: 360px; padding: 20px; }
</style>
</head>
<body>

 <!-- Inicio do Menu Top -->
 <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
							<option>Angola</option>
					
						</select>
                    </div>
                    <div class="right-phone-box">
                        <p>Liga para Nós :- <a href="#"> +244 945 396 577</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                        
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Nossa Localização</a></li>
                            <li><a href="http://localhost:81/AngoForma/contact-us.php"><i class="fas fa-headset"></i> Contacta-nos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                    
                                    <i class="fab fa-opencart"></i> Off 50% de desconto! cadastra-se agora vagas limitadas.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do menu Top -->

    <!-- Incio Memu Top 2 -->
    <header class="main-header">
        <!-- Inicio de Navigação -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Inicio Header Navigação -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- Fim Header Navigação -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="http://localhost:81/AngoForma/index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost:81/AngoForma/about.php">Sobre Nós</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost:81/AngoForma/contact-us.php">Contacta-nos </a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!--  Atributo inicial de Navegação para pesquisa -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<li><a href="http://localhost:81/AngoForma/cadastro/login.php"><i class="fa fa-user s_color"></i> Minha conta</a></li>
						</li>
                    </ul>
                </div>
                <!-- fim atribuição Navigação  para pesquisa -->
            </div>
           
        </nav>
        <!-- Fim de Navigação -->
    </header>

  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cadastro de aluno
                            <a href="http://localhost:81/AngoForma/index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Telefone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Curso</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Cadastrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>