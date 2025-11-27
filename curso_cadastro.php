<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset ($_REQUEST["enviar"]))
    {
        include "conexao.php";
        $nome=$_REQUEST["nome"];
$coordenador=$_REQUEST["coordenador"];

$sql="insert into cursos(nome,coordenador) VALUES(:nome,:coordenador)";
$result=$conexao->prepare($sql);
$result->bindValue(":nome",$nome);
$result->bindValue(":coordenador",$coordenador);
$result->execute();

echo"<p>Curso cadastrado com sucesso!</p>";

    }
    ?>
    <a href="curso_cadastro.php">Voltar</a>
</body>
</html>