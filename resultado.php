
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado:</h1>
    <?php
        $operando1 = $_POST["primeiro_operando"];
        $operando2 = $_POST["segundo_operando"];
        $operacao = $_POST["operacao"];

        require 'obter_resultado.php';
        $resultado = new ObterResultadoContext();
        if($operacao == "adicao"){
            $resultado->setOperacao(new somar());
        } elseif($operacao == "subtracao"){
            $resultado->setOperacao(new subtrair);
        } elseif($operacao == "multiplicacao"){
            $resultado->setOperacao(new multiplicar());
        }else{
            $resultado->setOperacao(new dividir());
        }
        echo "<div>" . $resultado->calcular($operando1, $operando2) . "</div>";
?>

</body>
</html>

