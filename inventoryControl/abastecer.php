<?php
 require_once('reusable/verifica.php');
 require_once('reusable/menu.php');
 $nomeProduto="Chokito";
 $qtdeProduto="31213";
 ?>

<div class="container">
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
   <h5 class="card-header">Abastecer Estoque | <?php echo $nomeProduto?></h5>
     <div class="card-body">
       <div class="row">
         <div class="col-md-4">
           <label for="nomeProduto">Quantidade a ser adicionada</label> <span class="text-danger">*</span>
             <input type="number" class="form-control" id="qtdeAbastecer" name="qtdeAbastecer" value="" placeholder="Quantidade" maxlength="70" required>
           </div>
           <div class="col-md-4">
             <label for="nomeProduto">Quantidade no Estoque:<br> <?php echo $qtdeProduto?> </label>
             </div>
             </div><br>
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
       </div>

 <div class="footer">
   <?php include_once "reusable/footer.php"; ?>
 </div>
