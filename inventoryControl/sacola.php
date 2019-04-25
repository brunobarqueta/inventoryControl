<?php
require_once('reusable/verifica.php');
require_once('reusable/menu.php');

$nomeItem="Chokito";
$precoTotal=0;
$preco=5;

if (isset($_POST['qtdeProduto'])){
$qtdeComprada=$_POST['qtdeProduto'];
$subTotal=($qtdeComprada*$preco);
$precoTotal+=$subTotal;
}else{
$qtdeComprada="";
}
?>
<div class="container">
  <div class="card">
    <h5 class="card-header">Nota Fiscal</h5>
      <div class="card-body">
      <table class="table table-condensed-responsive">
        <thead>
          <tr>
            <th>Quantidade</th>
            <th>Item</th>
            <th>Preço</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?php echo $qtdeComprada ?></td>
              <td><?php echo $nomeItem ?></td>
              <td><?php echo $preco ?></td>
            </tr>
            <tr>
              <td>#</td>
              <td>PREÇO TOTAL</td>
              <td><?php echo $precoTotal ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php
$fp=fopen("recibo.txt","w");
fwrite($fp,"Qtde     Item      Preço
");
fwrite($fp, $qtdeComprada."      ".$nomeItem."      ".$preco."
");
fwrite($fp,"#     PREÇO TOTAL   ".$precoTotal);
fclose($fp);
?>

<div class="row">
  <div class="col-md-8">
  </div>
  <div class="col-md-2">
    <form action="http://localhost/projeto/recibo.txt" method="GET" style="margin:10%;">
      <input class="btn btn-info" name="download" type="submit" value="download do recibo"/>
    </form>
   </div>
 </div>

<div class="footer">
  <?php include_once "reusable/footer.php"; ?>
</div>
