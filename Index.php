<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content width="device-width", initial-scale=1.0>
        <title>Cadastro de produtos</title>
</head>
<body>
    <header>
        <h1>Formulário</h1>
</header>
<form action="Index.php" method="POST">
    <label for="produto">Digite o nome do produto</label>
    <input type="text" name="produto" id="produto" required>
    <label for="preco">Digite o preço do produto</label>x
    <input type="number" step="any" name="preco" id="preco" required>
    <label for="quantidade">Digite a quantidade de produto disponível</label>
    <input type="number" name="quantidade" id="quantidade" required>
    <button type="submit">Cadastrar</button>
</form>

<?php
if(isset($_POST ["produto"]) && isset($_POST["preco"]) && isset($_POST["quantidade"])){
    $produto = $_POST["produto"];
    $preco =(float)$_POST["preco"];
    $quantidade =(int)$_POST["quantidade"];
function calcular_total($quantidade, $preco){
    $valor_total = $preco * $quantidade;
    return $valor_total;
}
$valor_total = calcular_total($preco, $quantidade);
echo"O  preço total do produto é:" .number_format($valor_total, 2);
}?>
</body>
</html>