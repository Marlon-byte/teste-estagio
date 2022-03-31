<?php
$num1 = 0;
$num2 = 0;
$result = 0;
$calcular = 'somar';
if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];
}

switch ($calcular) {
    case 'somar':
        $result = $num1 + $num2;
        break;
    case 'subtrair':
        $result = $num1 - $num2;
        break;
    case 'multiplicar':
        $result = $num1 * $num2;
        break;
    case 'dividir':
        $result = $num1 / $num2;
        break;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <h1>Calculadora</h1>
    <form>
        <div >
            Digite o primeiro número: <br><input type="number"  name="num1" value=<?= $num1 ?> required><br><br>

            Digite o segundo número: <br><input type="number" name="num2" value=<?= $num2 ?> required><br>

            <select name="calcular">
                <option value="somar">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <br><br>
        </div>

        <button class="btn" type="submit" value="calcular">Calcular</button>

        <br>
        <p>Resultado: <?php echo $result  ?></p>
    </form>

</body>

</html>