<?php

$con = mysqli_connect("localhost","root","","Atividade");
if (mysqli_connect_errno()) {
    echo "Erro".mysqli_connect_errno();
} else {
  $sql = "Insert into Cliente(Nome,Sobrenome,Email,CPF,Sexo,Usuario,Senha) values('$_POST[Nome]','$_POST[Sobrenome]','$_POST[Email]','$_POST[CPF]','$_POST[sexo]','$_POST[Usuario]','$_POST[Senha]')";

}
  if (mysqli_query($con, $sql)) {
    echo "Inserido!";
  } else {
      echo "Erro ao tentar inserir!";
  }

  mysqli_close($con);
 ?>