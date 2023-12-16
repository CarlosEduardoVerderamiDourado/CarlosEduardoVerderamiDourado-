<!DOCTYPEhtml>
<html lang="pt">
<cabeça>
    <meta charset="UTF-8">
    <meta name="janela de visualização" content="largura=largura do dispositivo, escala inicial=1,0">
    <title>Documento</title>
    <?php include_once 'conexão.php'?>

</head>    
<corpo>
    <section id="consutar">
        <?php
        $cod = $_POST["cxcod"];
        $consulta ="selecionar *de tbaluno onde codigo = $cod;";
        $executar = mysqli_query($conn,$consulta);
        $localisaraluno = mysqli_num_rows($executar);
        if($localisaraluno!=0)
        {
            echo "<script>alert('liberado para atualizar');</script>";
        }
        outro
        {
            echo "não liberado para atualização";
            ?>
             <form action="../php/orçamento.php"method="post">
                <conjunto de campos>
                    <tipo de entrada="enviar" value="crie seu cadastro">
                </fieldset>
             </formulário>
            <?php
        }
        while($linha = mysqli_fetch_array($executar)){

            ?>
            <form action="alterraraluno.php"method="post">
                <conjunto de campos>
                    codigo: <tipo de entrada= "texto" nome = "cxcod" value="<?php echo $linha['codigo'];?>" somente leitura></br>
                    nome: <tipo de entrada= "texto" nome = "cxnome" value="<?php echo $linha['nome'];?>" ></br>
                    dados de nascimento: <input type= "texto" nome = "cxddn" value="<?php echo $linha['datadenacimento'];?>" ></br>
                    contato: <input type= "texto" nome = "cxcontato" value="<?php echo $linha['contato'];?>" ></br>
                    e-mail: <tipo de entrada= "texto" nome = "cxemail" value="<?php echo $linha['email'];?>" ></br>
                    genero: <tipo de entrada= "texto" nome = "cxgen" value="<?php echo $linha['genero'];?>" ></br>
                    cpf: <tipo de entrada= "texto" nome = "cxcpf" value="<?php echo $linha['cpf'];?>" somente leitura></br>
                    rg: <tipo de entrada= "texto" nome = "cxrg" value="<?php echo $linha['rg'];?>" somente leitura></br>
                    cep: <tipo de entrada= "texto" nome = "cxcep" value="<?php echo $linha['cep'];?>" ></br>
                    categoria: <tipo de entrada= "texto" nome = "cxcat" value="<?php echo $linha['categoria'];?>" ></br>
                    pcd: <tipo de entrada= "texto" nome = "cxpcd" value="<?php echo $linha['pcd'];?>" ></br>
                    objetivo: <tipo de entrada= "texto" nome = "cxobj" value="<?php echo $linha['objetivo'];?>" ></br>
                    dia de aula: <input type= "texto" nome = "cxdia" value="<?php echo $linha['diadeaula'];?>" ></br>
                    <tipo de botão = "enviar" estilo = "borda:nenhum;fundo:#fff">
                    <img src="../img/alterar.png"largura = "40" altura="30"
                </botão>
                <a href="deletar.php?id=<?php echo $linha["codigo"];?>" ><img src="../img/delete.png"largura = "40" altura="30"></a>
                </fieldset>
            </formulário>
            
           
            
            <?php }
      
        ?>
