<?php
use models\AdmModel;
use entities\AdmEntity;

try {
	// $page = "Administradores";

	// require_once('validation.php');
	
	// Instances
	require_once('models/adm.php');

	// $SuperUserModel = new AdmModel($database);
    
    //Defining the mode
    $mode = "add";
    if(isset($_GET['mode'])){
        if($_GET['mode'] == 'edit'){
            $mode = 'edit';
        }
    }

	// Empty variables
	$output 			= "";
	$name 				= "Mateus";
	$lastName 			= "Alberghini";
	$email 				= "mateus_alberghini@hotmail.com";
	$password 		    = "AAA";
    $job 				= "TI SUPORTE";
    $bornDate           = "06/05/1999";
	$rg                	= "3333333333";
    
    // if($mode == 'edit'){
    //     $id = $_GET['id']; // Bringing ID from the URL (passed by get parameter)

    //     // Get specific user data
	// 	$admin          = $AdmModel->GetById($id);
	// 	$name           = $admin->name;
	// 	$lastName       = $admin->lastName;
	// 	$email          = $admin->email;
	// 	$password       = ""; // For not show the password in the view
	// 	$job            = $admin->job;
    //     $bornDate       = $admin->bornDate;
    //     $rg             = $admin->rg;
	// }
	
	// if (isset($_POST['name'])) {
	// 	$name 	     = $_POST['name'];
	// 	$lastName    = $_POST['lastName'];
	// 	$email 	     = $_POST['email'];
	// 	$password    = $_POST['password'];
	// 	$job 	     = $_POST['job'];
	// 	$bornDate    = $_POST['bornDate'];
	// 	$rg 	     = $_POST['rg'];

        
	// 	if (strlen(trim($name)) <= 0) {
	// 		$output .= "<li>O nome deve ser informado</li>";
	// 	}
	// 	if (strlen(trim($lastName)) <= 0) {
	// 		$output .= "<li>O sobrenome deve ser informado</li>";
	// 	}
	// 	if (strlen(trim($email)) <= 0) {
	// 		$output .= "<li>O email deve ser informado</li>";
	// 	}
	// 	if (strlen(trim($job)) <= 0) {
	// 		$output .= "<li>O cargo deve ser informado</li>";
	// 	}
	// 	if (strlen(trim($bornDate)) <= 0) {
	// 		$output .= "<li>A data de nascimento deve ser informada</li>";
	// 	}
	// 	if (strlen(trim($rg)) <= 0) {
	// 		$output .= "<li>O RG deve ser informado</li>";
	// 	}
		
	// 	// Senha obrigatória ao criar um administrador
	// 	if (strlen(trim($password)) <= 0 && $mode == "create") {
	// 		$output .= "<li>A senha deve ser informada</li>";
	// 	// Se foi informada.. Valida
	// 	} else if (strlen(trim($password)) > 0) {
    //         if (!preg_match("#.*^(?=.{6,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password))
    //             $output .= "<li>A senha informada não atende os critérios de segurança exigidos</li>";
	// 		}
    //     }
        
	// 	if (strlen($output) <= 0) {
	// 		$admEntity = new AdmEntity();
			
	// 		if ($mode == "edit") {
	// 			$admEntity->setId($id);
	// 		}

	// 		$admEntity->setName($name);
	// 		$admEntity->setLastName($lastName);
	// 		$admEntity->setEmail($email);
	// 		$admEntity->setPassword((strlen(trim($password)) > 0) ? $password : null);
    //         $admEntity->setJob($job);
    //         $admEntity->setBornDate($bornDate);
    //         $admEntity->setRg($rg);
            
	// 		if ($mode == 'add') {
	// 			if ($AdmModel->Create($admEntity)) {
	// 				header("location: amdList.php?message=Administrador $name $lastName criado com sucesso"); exit();
	// 			} else {
	// 				$output = "Acesso não autorizado! Verifique se os dados foram digitados corretamente.";
	// 			}
	// 		} else if ($mode == "edit") {
	// 			if ($AdmModel->Edit($amdEntity)) {
	// 			    header("location: admList.php?message=Administrador $nome $sobrenome atualizado com sucesso"); exit();
	// 			} else {
	// 				$output = "Acesso não autorizado! Verifique se os dados foram digitados corretamente.";
	// 			}
	// 		}
        // } 
    
	require_once('reusable/menu.php');
?>
	<div class="container">
		<form action="" method="POST">
			<div class="row admCreateEditActionButtons">
				<div class="col-md-10"></div>
				<div class="col-md-2 col-md-offset-4">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<a href="admList.php"><button type="button" class="btn btn-secondary">Voltar</button></a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				</div>
			</div>
			<div class="card">
				<h5 class="card-header">
					<?php echo ($mode == 'create') ? 'Cadastro de administrador' : "Edição do administrador $name $lastName"; ?>
				</h5>
				<div class="card-body">
					<div class="row">
						<?php if (strlen($output) > 0) { ?>
						<ul class="alert alert-danger">
							<?php echo $output ?>
						</ul>
						<?php } ?>
						<div class="col-sm-6">
							<label for="nome">Primeiro Nome</label> <span class="text-danger">*</span>
							<input type="text" 
								class="form-control" 
								id="name" 
								name="name" 
								value="<?php echo $name ?>" maxlength="50" placeholder="Exemplo: José" required>
						</div>
						<div class="col-sm-6">
							<label for="sobrenome">Sobrenome</label> <span class="text-danger">*</span>
							<input type="text"
								class="form-control"
								id="lastName" 
								name="lastName" 
								value="<?php echo $lastName ?>" maxlength="100" placeholder="Exemplo: da Silva" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>RG</label> <span class="text-danger">*</span>
								<input type="text"
									class="form-control"
									id="rg" 
									name="rg" 
									value="<?php echo $rg ?>" placeholder="1234567890" required>
						</div>
						<div class="col-md-6">
							<label>Data de nascimento</label> <span class="text-danger">*</span>
								<input type="text"
									class="form-control"
									id="bornDate" 
									name="bornDate" 
									value="<?php echo $bornDate ?>" placeholder="01/02/2018" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<label>Cargo</label> <span class="text-danger">*</span>
							<select id="job" 
									name="job" 
									class="form-control" required>
								<option value="" >-- SELECIONE --</option>
								<option value="ADMINISTRADOR DA EMPRESA" >ADMINISTRADOR DA EMPRESA</option>
								<option value="GERENTE" >GERENTE</option>
								<option value="CAIXA" >CAIXA</option>
								<option value="CONSULTOR" >CONSULTOR</option>
								<option value="TI SUPORTE" >TI SUPORTE</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="card">
				<h5 class="card-header">Dados para login</h5>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<label for="email">E-mail</label> <span class="text-danger">*</span>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="exemplo@dominio.com.br" maxlength="100" required>
							<span id="helpBlock" class="font-weight-light">Este campo é <b>obrigatório</b> e será utilizado para login</span>
						</div>
						<div class="col-md-6">
							<label for="senha">Senha</label> <span class="text-danger">*</span>
							<input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>" placeholder="*********" required>
							<span id="helpBlock" class="font-weight-light">A senha deve conter: 1 letra maiúscula, 1 minúscula, 1 número, 1 caracter especial e tamanho de 6 a 20 caracteres</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row admCreateEditActionButtons">
				<div class="col-md-10"></div>
				<div class="col-md-2 col-md-offset-4">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<a href="admList.php"><button type="button" class="btn btn-secondary">Voltar</button></a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
<?php require_once('reusable/footer.php');
    } catch(\PDOException $e) {
        echo $e->getMessage();
    } catch(\RuntimeException $e) {
        echo $e->getMessage();
    } catch(\Exception $e) {
        echo $e->getMessage();
    } 
?>