<?php
session_start();
$message = "";
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($email == "mateus@h.com" && $senha =="123"){
      $_SESSION['$email'] = $email;
      header("Location: listagem.php");
    } else if($email && $senha)$message="Email ou senha incorretos";
    else if($email == null)$message="Preencha o email";
    else if($senha == null)$message="Preencha a senha";
  }

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projeto</title>
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Standart CSS -->
    <link rel="stylesheet" type="text/css" href="css/standart.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <a class="navbar-brand" href="#" style="color:black;">
          <img src="images/menu.png" width="30" height="30" class="d-inline-block align-top" alt="">
           &nbsp&nbsp Controle de Estoque &nbsp&nbsp
        </a>
    </div>
    </nav>
    <div class="row cardMenu">
      <div class="loginContainer">
        <form action="#" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" value="<?php echo $email ?>" id="email" name="email" placeholder="Exemplo: email@email.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" value="<?php echo $senha ?>" id="senha" name="senha" placeholder="*******">
          </div>
          <?php if($message != null){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $message ?>
            </div>
          <?php } ?>
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          <a href="esqueci_senha.php">
            <small class="form-text text-muted centered">Esqueci minha senha</small>
          </a>

       </form>
     </div>
   </div>
   <div class="footer">
     <?php include_once "reusable/footer.php"; ?>
   </div>
  </body>
</html>
