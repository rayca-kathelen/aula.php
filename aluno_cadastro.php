<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet " href="estilos.css">
</head>
<body>
    <?php include "menu.php"?>

    <div class= "conteudo">

    <h3>Cadastro de alunos</h3>

    <form action = "aluno_cadastro.php" method= "post">

    <p>
        Digite o nome do aluno<br>
        <input type="text"name="nome">

</p>
<p>
        digite a cidade do aluno<br>
        <input type="text"name="cidade">

</p>

<p>
        Digite o estado<br>
        <input type="text"name="estado">

</p>
<p>
        <input type="submit" name="enviar" value="Cadastrar">
</p>



</body>
</html>