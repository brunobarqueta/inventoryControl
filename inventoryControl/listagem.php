<?php
$page='products';
 require_once('reusable/verifica.php');
$codigoProduto="3213";
$nomeProduto="Chokito";
$marcaProduto="Nestlé";
$precoProduto="R$ 176";
$estoqueProduto="32";
 ?>
 <!-- START NAVBAR -->
  <?php require_once('reusable/menu.php') ?>
<!-- END NAVBAR -->
<!-- START FOOTER -->
      <div class="footer">
        <?php include_once "reusable/footer.php"; ?>
      </div>
<!-- END FOOTER -->
      <div class="container">
        <div class="card" style="margin-top:2%;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <h1>Listagem de Produtos</h1>
              </div>
                <div class="col-md-4>">
                  <a href="cadastro_produto.php" type="button" class="btn btn-info" role="button">Novo Produto</a>
                </div>
              </div>
            </div>
              <div class="table-responsive">
                <table class="table table-hover" style="">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>Marca</th>
                      <th>Preço</th>
                      <th>Estoque</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $codigoProduto ?></td>
                      <td><?php echo $nomeProduto ?></td>
                      <td><?php echo $marcaProduto ?></td>
                      <td><?php echo $precoProduto ?></td>
                      <td><?php echo $estoqueProduto ?></td>
                      <td>
                        <a href="cadastro_produto.php">
                        <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                      </a>
                        <a href="#">
                          <img src="images/apagar.png" width="25" height="25" class="d-inline-block align-center" alt="">
                        </a>
                          <a href="abastecer.php">
                            <img src="images/plus.png" width="20" height="20" class="d-inline-block align-center" alt="">
                          </a>
                            <a href="#" onclick="window.open('compra.php', 'Titulo da Janela', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');"><img src="images/carrinho.png" width="25" height="25" class="d-inline-block align-center" alt=""></a>
                          </td>
                        </tr>
                          <tr>
                            <td><?php echo $codigoProduto ?></td>
                            <td><?php echo $nomeProduto ?></td>
                            <td><?php echo $marcaProduto ?></td>
                            <td><?php echo $precoProduto ?></td>
                            <td><?php echo $estoqueProduto ?></td>
                            <td>
                              <a href="#">
                                <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                              </a>
                                <a href="#">
                                  <img src="images/apagar.png" width="25" height="25" class="d-inline-block align-center" alt="">
                                </a>
                                  <a href="abastecer.php">
                                    <img src="images/plus.png" width="20" height="20" class="d-inline-block align-center" alt="">
                                  </a>
                                    <a href="#" onclick="window.open('compra.php', 'Titulo da Janela', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');"><img src="images/carrinho.png" width="25" height="25" class="d-inline-block align-center" alt=""></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
