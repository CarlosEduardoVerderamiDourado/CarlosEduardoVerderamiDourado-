<?php

if($_POST["cxnome"] !="")
{
   include_once 'conexão.php';
   $nome = $_POST['cxnome'];
   $ddn = $_POST['cxddn'];
   $cont = $_POST['cxcont'];
   $email = $_POST['cxemail'];
   $genero = $_POST['cxgenero'];
   $cpf = $_POST['cxcpf'];
   $rg = $_POST['cxrg'];
   $cep = $_POST['cxcep'];
   $categoria = $_POST['cxcategoria'];
   $pcd = $_POST['cxpcd'];
   $objetivo = $_POST['cxobjetivo'];
   $dda = $_POST['cxdda'];
   
   $sql = "inserir em tbaluno(nome,datadenacimento,contato,email,genero,cpf,rg,cep,categoria,pcd,objetivo,diadeaula)
   valores('$nome','$ddn','$cont','$email','$genero' ;,'$cpf','$rg','$cep','$categoria','$pcd' ;,'$objetivo','$dda');";
   
   $consulta = mysqli_query($conn,$sql);
   
   echo 'dados cadastrados com sucesso!';


}
outro
{
    echo 'coloque todos os dados corretos mente!';
}
?></br>
<a href="../index.php">Voltar</a>
