<!DOCTYPEhtml>
<html lang="pt">
<cabeça>
    <meta charset="UTF-8">
    <meta name="janela de visualização" content="largura=largura do dispositivo, escala inicial=1,0">
    <title>Documento</title>
</head>
<corpo>
    <h1>cadastro</h1>
<form action="../conexão/inserirdadosdoaluno.php" método="post">
    <conjunto de campos>
        Nome:
        <tipo de entrada="texto" nome="cxnome" class="cxnome"/><br/>
        dados de nascimento:
        <tipo de entrada="data" nome="cxddn" class="cxddn"/><br/>
        Contato:
        <tipo de entrada="texto" nome="cxcont" class="cxcont"/><br/>
        E-mail:
        <input type="e-mail" nome="cxemail" class="cxemail"/><br/>
        genero:
        <tipo de entrada="rádio" nome="cxgenero" class="cxgenero" valor= "masculino"/>masculino
        <tipo de entrada="rádio" nome="cxgenero" class="cxgenero" valor= "feminino"/>feminino<br/>
        cpf:
        <tipo de entrada="número" nome="cxcpf" class="cxcpf"/><br/>
        Rg:
        <tipo de entrada="número" nome="cxrg" class="cxrg"/><br/>
        CEP:
        <tipo de entrada="número" nome="cxcep" class="cxcep"/><br/>
        categoria:
        <input type="texto" nome="cxcategoria" class="cxcategoria"/><br/>
        PCD:
        <tipo de entrada="rádio" nome="cxpcd" class="cxpcd" valor= "sim"/>sim
        <tipo de entrada="rádio" nome="cxpcd" class="cxpcd" value= "não"/>não<br/>
        objetivo:
        <input type="texto" nome="cxobjetivo" class="cxobjetivo"/><br/>
        dias de aula:</br>
        <tipo de entrada="rádio" nome="cxdda" class="cxdda" valor= "seg"/>seg<br/>
        <tipo de entrada="rádio" nome="cxdda" class="cxdda" valor= "ter"/>ter<br/>
        <tipo de entrada="rádio" nome="cxdda" class="cxdda" valor= "quarto"/>quarto<br/>
        <tipo de entrada="rádio" nome="cxdda" class="cxdda" valor= "quin"/>quin<br/>
        <tipo de entrada="rádio" nome="cxdda" class="cxdda" valor= "sexo"/>sexo<br/>
        <tipo de entrada="rádio" nome="cxdda" class="cxdda" valor= "sab"/>sab<br/>
        <tipo de entrada="enviar" valor="Gravar">
    </fieldset>
</formulário>
    
</corpo>
</html>
