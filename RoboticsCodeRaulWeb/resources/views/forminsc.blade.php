<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="utf-8">
    <title>Robotics Code Raul</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Logo -->
    <link href="/resources/img/favpng.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/resources/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/resources/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/resources/css/style.css" rel="stylesheet">

    <!-- Formulário de Inscrição Stylesheet -->
    <link href="/resources/css/form.css" rel="stylesheet">
    <link href="/resources/css/forminsc.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <img src="/resources/img/logo.png" alt="Logo" class="img-fluid">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/resources/views/index.blade.php" class="nav-item nav-link active">Página Inicial</a>
                        <a href="/resources/views/Concursos.blade.php" class="nav-item nav-link">Concursos</a>
                        <!--<a href="projetos.html" class="nav-item nav-link">Projetos</a>-->
                        <a href="/resources/views/galeria.blade.php" class="nav-item nav-link">Galeria</a>
                        <a href="/resources/views/sobrenos.blade.php" class="nav-item nav-link">Sobre Nós</a>
                        <a href="/resources/views/forminsc.blade.php" class="nav-item nav-link active">Formulário de
                            Inscrição</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
        </div>
    </div>
    <!-- Hero End -->


    <!-- Formulário de Inscrição Start -->
    <div class="container">
        <form method="post" action="">
            <h2 class="my-4">Dados Pessoais</h2>
            <div class="row mb-3">
                <div class="col-5">
                    <label for="nome" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="col-4">
                    <label for="nome" class="form-label">Apelido</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="col-3">
                    <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascimento" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-6">
                    <label for="telefone" class="form-label">Número de Telefone</label>
                    <input type="tel" class="form-control" id="telefone" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="numprocesso" class="form-label">Número de Processo Escolar</label>
                    <input type="text" class="form-control" id="numprocesso" required>
                </div>
                <div class="col-6">
                    <label for="datainsc" class="form-label">Data de Inscrição</label>
                    <input type="date" id="datainsc" name="datainsc" class="form-control" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="turma" class="form-label">Turma</label>
                    <select class="form-select" id="turma" required>
                        <option selected disabled>Escolha sua turma</option>
                        <option value="turma1">Turma 1</option>
                        <option value="turma2">Turma 2</option>
                        <option value="turma3">Turma 3</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="tshirt" class="form-label">Tamanho da T-shirt</label>
                    <select class="form-select" id="tshirt" required>
                        <option selected disabled>Escolha o tamanho da T-shirt</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-6">
                        <label>Alergias Alimentares</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="alergiasSim" name="alergias"
                                    value="sim">
                                <label class="form-check-label" for="alergiasSim">Sim</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="alergiasNao" name="alergias"
                                    value="nao" checked>
                                <label class="form-check-label" for="alergiasNao">Não</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="alergiasOutros" name="alergias"
                                    value="outros">
                                <label class="form-check-label" for="alergiasOutros">Outros</label>
                            </div>
                        </div>
                        <input type="text" class="form-control mt-2" id="alergiasOutrosDescricao"
                            placeholder="Descreva suas alergias alimentares" style="display: none;">
                    </div>
                    <div class="col-6">
                        <label>Tenho autorização de imagem?</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="autorizacaoSim"
                                    name="autorizacao" value="sim" required>
                                <label class="form-check-label" for="autorizacaoSim">Sim</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="autorizacaoNao"
                                    name="autorizacao" value="nao" required>
                                <label class="form-check-label" for="autorizacaoNao">Não</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="beneficio" class="form-label">Se selecionou "outros", por favor indique-as
                        aqui:</label>
                    <textarea class="form-control" id="beneficio" rows="3" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="FotodePerfil">Selecione uma foto</label>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="FotodePerfil">
                    </div>
                </div>
            </div>
            <!-- Formulário de Inscrição End -->
            <!--
            <div class="container-fluid bg-dark text-white-50 footer pt-5">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <a href="index.html" class="d-inline-block mb-3">
                                <h1>
                                    <img src="/resources/img/logo.png" alt="Logo" class="img-fluid"
                                        style="max-height: 100px;">
                                </h1>
                            </a>
                            <p class="mb-0">Robotics Code Raul: Incentivando a inovação e o aprendizado através da
                                tecnologia
                                e
                                da robótica.</p>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                            <h5 class="text-white mb-4">Entre em Contacto Conosco</h5>
                            <p><i class="fa fa-map-marker-alt me-3"></i>R. Dom João II 33, 2500-852 Caldas<span
                                    style="text-indent: 28px; display: inline-block;"> da Rainha</span></p>
                            <p><i class="fa fa-phone-alt me-3"></i>262 740 560</p>
                            <p><i class="fa fa-envelope me-3"></i>clube.robotica@aerp.pt</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href="https://linktr.ee/RoboticsCodeRaul/"
                                    target="_blank"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                            <h5 class="text-white mb-4">Páginas Populares</h5>
                            <a class="btn btn-link" href="">Formulário de Inscrição</a>
                            <a class="btn btn-link" href="">Sobre Nós</a>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                            <h5 class="text-white mb-4">Outros Links</h5>
                            <a class="btn btn-link" href="https://aerp.pt/" target="_blank">Portal da Escola</a>
                        </div>
                    </div>
                </div>
                <div class="container wow fadeIn" data-wow-delay="0.1s">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; Robotics Code Raul, Todos os direitos reservados.

                                Projetado por Tiago Almeida e Luís Fernandes. Distribuido por
                                <a class="border-bottom" href="https://aerp.pt" target="_blank">AERP</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="/resources/views/index.blade.php">Página Inicial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                    class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="/resources/lib/wow/wow.min.js"></script>
            <script src="/resources/lib/easing/easing.min.js"></script>
            <script src="/resources/lib/wow/wow.min.js"></script>
            <script src="/resources/lib/owlcarousel/owl.carousel.min.js""></script>

            <!-- Template Javascript -->
            <script src="/resources/js/main.js"></script>
            <script src="/resources/js/forminsc.js"></script>
            <script src="/resources/js/datainsc.js"></script>
</body>

</html>
