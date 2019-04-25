<?php
 require_once('reusable/verifica.php');
 require_once('reusable/menu.php');
 
$nomeProduto="Chokito";
$marcaProduto="Nestlé";
$precoProduto="R$ 176";
$estoqueProduto="32";

?>
<!-- END NAVBAR -->
<div class="container">
  <form action="" method="POST">
    <div class="row admCreateEditActionButtons" style="margin:1%;">
      <div class="col-md-10"></div>
        <div class="col-md-2 col-md-offset-4">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <a href="listagem.php"<button type="button" class="btn btn-secondary">Voltar</button></a>
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </div>
        <div class="card">
          <h5 class="card-header">Cadastro/Edição de Produtos | <?php echo $nomeProduto?></h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <label for="nomeProduto">Nome do Produto</label> <span class="text-danger">*</span>
                    <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" value="<?php echo $nomeProduto ?>" placeholder="Nome" maxlength="70" required>
                  </div>
                    <div class="col-md-4">
                      <label for="marcaProduto">Marca</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" id="marcaProduto" name="marcaProduto" value="<?php echo $marcaProduto ?>" placeholder="Marca do Produto" maxlength="100" required>
                      </div>
                    </div><br>
                      <div class="row">
                        <div class="col-md-2">
                          <label for="nomeProduto">Tipo de unidade</label> <span class="text-danger">*</span>
                           <form action="" class="form-control" required><br>
                             <input type="radio" name="tipoDeUnidade" value=""> Quilo(Kg)&nbsp<br>
                             <input type="radio" name="tipoDeUnidade" value=""> Unidade<br>
                           </form>
                         </div>
                            <div class="col-md-4">
                              <label for="qtdeProduto">Quantidade</label> <span class="text-danger">*</span>
                                <input type="number" class="form-control" id="qtdeProduto" name="qtdeProduto" value="<?php echo $estoqueProduto ?>" placeholder="Quantidade" maxlength="100" required>
                               </div>
                             </div>
                           </div>
                         </div>
                            <div class="row admCreateEditActionButtons" style="margin:1%;">
            				          <div class="col-md-10"></div>
            				            <div class="col-md-2 col-md-offset-4">
            					            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            						            <a href="listagem.php"<button type="button" class="btn btn-secondary">Voltar</button></a>
            						            <button type="submit" class="btn btn-success">Enviar</button>
            					            </div>
            				             </div>
            			              </div>
                              </form>
                            </div>
                            <!-- START FOOTER -->
                                  <div class="footer">
                                    <?php include_once "reusable/footer.php"; ?>
                                  </div>
                            <!-- END FOOTER -->
