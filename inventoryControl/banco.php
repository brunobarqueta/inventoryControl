<?php
  $con = mysql_connect("localhost", "root", "") or die("Falha na conexão com o servidor"); //Abrir a conexão com o banco
  $bd = mysql_select_db("nome_do_banco", $con) or die("Erro ao selecionar o banco de dados");

  $tb = mysql_query("SELECT * FROM clientes", $con);

  $qtde_linhas = mysql_num_rows($tb);

  $linha = mysql_fetch_array($tb);
  while($linha = mysql_fetch_array($tb)){
  //processamento
  echo $linha['codigo'];
  echo $linha[1];
  }

  mysql_free_result($tb);

  mysql_close($con); //Fechar a conexão com o banco
?>
