<?php 
$Usuario1 = "Caioba";
$Senha1 = "123";

//Pegar usuario e senha do forms

//testar para ver se é igual o padrao

//mostrar mensagem de bem vindo
echo "Chegou aqui";
if ($_POST['Usuario'] == $Usuario1 and $_POST['Senha'] == $Senha1) {
    
    echo "BemVindo";
}else{
    echo "Hoje não faro";
}






 ?>