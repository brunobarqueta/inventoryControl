<?php
    $page = 'adm';
    $name = "Mateus";
    $lastName = "Alberghini";
    $rg = "1234567895";
    $bornDate = "10/12/1998";
    $job = "Analista de TI";
    $email = "mat_alber@hotmail.com";
    require_once('reusable/menu.php');
    require_once('reusable/verifica.php');
?>
<div class="container containerMarginTop">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h1>Listagem de Administradores</h1>
                </div>
                <div class="col-md-4">
                    <a href="admCreateEdit.php" type="button" class="btn btn-info" role="button">Cadastrar Administrador</a>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Cargo</th>
                    <th>E-mail</th>
                    <th>RG</th>
                    <th>Data de Nascimento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr><tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $lastName ?></td>
                    <td><?php echo $job ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $rg ?></td>
                    <td><?php echo $bornDate ?></td>
                    <td>
                        <a href="cadastro_produto.php" style="text-decoration:none;">
                            <img src="images/edit.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="#" style="text-decoration:none;">
                            <img src="images/apagar.png" width="20" height="20" class="d-inline-block align-center" alt="">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    <div class="footer">
        <?php include_once "reusable/footer.php"; ?>
      </div>
