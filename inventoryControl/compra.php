<?php
require_once('reusable/verifica.php');
require_once('reusable/menu.php');
?>
<form action="sacola.php" method="post">
<div class="card" style="margin-top:7%;">
  <h5 class="card-header">Carrinho de Compra</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <label for="qtdeProduto">Quantidade</label><span class="text-danger">*</span>
            <input type="number" class="form-control" id="qtdeProduto" name="qtdeProduto" value="" placeholder="Quantidade" maxlength="100" required>
          </div>
      </div>
        <div class="row">
          <div class="col-md-2">
            <div class="btn-group-sm btn-group-toggle" data-toggle="buttons">
              <input type="submit" class="btn btn-success" style="margin-top:20%;" value="Adicionar" name="submit">
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="footer">
  <?php include_once "reusable/footer.php"; ?>
</div>
