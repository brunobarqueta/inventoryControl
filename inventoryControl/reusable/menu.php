<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projeto</title>
    <link rel='shortcut icon' href="imagens/icon.gif" />
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap Responsive -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Standart CSS -->
    <link rel="stylesheet" type="text/css" href="css/standart.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="jquery/jquery-3.3.1.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
        <a class="navbar-brand" href="#">
          <img src="images/menu.png" width="30" height="30" class="d-inline-block align-top" alt="">
           &nbsp&nbsp Controle de Estoque &nbsp&nbsp |
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link <?php echo ($page == 'home')? 'active' : ''?>" href="home.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link <?php echo ($page == 'adm')? 'active' : ''?>" href="admList.php">Administradores</a>
          <a class="nav-item nav-link  <?php echo ($page == 'products')? 'active' : ''?>" href="listagem.php">Produtos</a>
          <a class="nav-item nav-link <?php ($page == 'home')?>" href="#">Contas abertas</a>
        </div>
    </div>
    <div class="col-md-1 right">
      <div class="col-sm-4 col-md-4 navbar-right">
        <a class="nav-item nav-link" href="reusable/destroy.php">Logout</a>
      </div>
    </div>
  </nav>
</header>
<!-- END NAVBAR -->
