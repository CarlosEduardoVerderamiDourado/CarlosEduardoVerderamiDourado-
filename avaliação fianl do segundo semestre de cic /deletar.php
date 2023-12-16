<?php
include_once 'conexÃ£o.php';
$codigo= $_GET["id"];
$excluir = "delete from tbaluno where codigo = '$codigo';";
$excluidio = mysqli_query($conn,$excluir);
if($excluidio)
{
    echo "dados deletados com sucesso";
    echo "<br>";
    echo "<a href= '../index.php'>voltar</a>";
}
else
{
    echo "nao foi possivel deletar os dados";
}
