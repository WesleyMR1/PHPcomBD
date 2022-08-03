<?php

$con = mysqli_connect("localhost","root","","Atividade");
if (mysqli_connect_errno()) {
    echo "Erro".mysqli_connect_errno();
} else {
  $sql = "select * from cliente where Usuario = '$_POST[Usuariox]' and Senha = '$_POST[Senhax]';";

  // $sql = "select * from cliente;";

}
 $resultado = mysqli_query($con, $sql);

$pessoa = mysqli_fetch_array($resultado);

if ($pessoa['Usuario'] == $_POST['Usuariox'] && $pessoa['Senha']==$_POST['Senhax']) {
	echo "bem vindo";
}else{
	echo "Nao bem vindo";
}

// if ($pessoa = mysqli_fetch_array($resultado)) {
// 	if ($pessoa['Usuario'] == $_POST['Usuariox'] && $pessoa['Senha']==$_POST['Senhax']) {
// 		echo $pessoa['Usuario'];
// 		echo $pessoa['Senha'];
// 		echo "Bem vindo";
// 	} else {
// 		echo "Nao bem vindo";
// 	}
// }

//receber login e senha
//autenticar no banco de dados


 // echo $resultado;

  mysqli_close($con);
 ?>