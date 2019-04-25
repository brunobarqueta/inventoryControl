<?php
require_once('reusable/verifica.php');
require_once('reusable/menu.php');
?>

  <div class="container">
  	  <form action="" method="POST">
    <div class="row admCreateEditActionButtons" style="margin:1%;">
      <div class="col-md-10"></div>
        <div class="col-md-2 col-md-offset-4">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <a href="home.php"><button type="button" class="btn btn-secondary">Voltar</button></a>
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </div>
			<div class="card">
	          <h5 class="card-header">Recuperação de Senha</h5>
	            <div class="card-body">
	              <div class="row">
	                <div class="col-md-6">
							<label for="email">E-mail</label> <span class="text-danger">*</span>
							<input type="email" class="form-control" id="email" name="email" value="" placeholder="exemplo@dominio.com.br" maxlength="100" required>
							<span id="helpBlock" class="font-weight-light">Digite seu email para enviarmos uma nova senha</span>
						</div>                   
	                 </div><br>
	                </div>
	               </div>
	              </div>
	             </div>


<div class="footer">
<?php include_once('reusable/footer.php');?>
</div>