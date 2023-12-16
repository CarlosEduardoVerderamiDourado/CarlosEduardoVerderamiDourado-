<?php
include_once 'conexÃ£o.php';
$codigo= $_POST['cxcod'];
$nome = $_POST['cxnome'];
$ddn =  $_POST['cxddn'];
$cont =  $_POST['cxcontato'];
$email =  $_POST['cxemail'];
$genero =  $_POST['cxgen'];
$cpf =  $_POST['cxcpf'];
$rg =  $_POST['cxrg'];
$cep =  $_POST['cxcep'];
$categoria =  $_POST['cxcat'];
$pcd =  $_POST['cxpcd'];
$objetivo =  $_POST['cxobj'];
$dda =  $_POST['cxdia'];
$alterar = "update tbaluno set
nome='$nome',
datadenacimento='$ddn',
contato='$cont',
email='$email',
genero='$genero',
cep='$cep',
categoria='$categoria',
pcd='$pcd',
objetivo='$objetivo',
diadeaula='$dda'
where
codigo = '$codigo';";
$executa = mysqli_query($conn,$alterar);
if($alterar)
{
    echo "dados alterrados com sucesso";
    echo "<br>";
    echo "<a href= '../index.php'>voltar</a>";
}
else{
    echo "nao foi possivel alterar os dados os dados";
}
?>
