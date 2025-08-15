<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        $line = "<strong>--------------------------------------------------------------------</strong>";

        echo "<h2> Questão 01</h2>";

        $temp01 = 10;
        $temp02 = 20;
        $temp03 = 30;
        $temp04 = 40;
        $temp05 = 50;

        $temperatures = [
            $temp01,
            $temp02,
            $temp03,
            $temp04,
            $temp05
        ];

        foreach ($temperatures as $key => $value) {
            $key += 1;

            if ($value > 30) {
                echo "Temperatura $key: $value ºc | Alerta: temperatura alta!<br>";
            } elseif ($value < 15) {
                echo "Temperatura $key: $value ºc | Alerta: temperatura baixa!<br>";
            } else {
                echo "Temperatura $key: $value ºc | Temperatura normal.<br>";
            }
        }

        $sumValues = 0;

        foreach ($temperatures as $key => $value) {

            $sumValues += $value;


        }

        $media = $sumValues / count($temperatures);

        echo "<br><strong>Média das temperaturas: $media ºc</strong>";

        echo "<br><br>$line<br><br>";

        echo "<h2> Questão 02</h2>";

        $intNumberFrom0To10 = 10;

        if ($intNumberFrom0To10 < 0 || $intNumberFrom0To10 > 10) {
            echo "O número $intNumberFrom0To10 não está entre 0 e 10.";
            exit;
        }

        echo "Tabuada do número $intNumberFrom0To10: <br><br>";

        for ($i = 0; $i < 11; $i++) {
            $result = $intNumberFrom0To10 * $i;
            $evenOrOdd = "";

            if ($result % 2 == 0) {
                $evenOrOdd = "par";
            } else {
                $evenOrOdd = "ímpar";
            }

            echo "$intNumberFrom0To10 x $i = $result, sendo $result um número $evenOrOdd<br>";

        }

        echo "<br><br>$line<br><br>";

        echo "<h2> Questão 03</h2>";

        $product1 = 10;
        $product2 = 20;
        $product3 = 30;
        $product4 = 40;
        $product5 = 50;

        $productTotalValue = $product1 + $product2 + $product3 + $product4 + $product5;

        $products = [
            $product1,
            $product2,
            $product3,
            $product4,
            $product5
        ];


        foreach ($products as $key => $value) {
            $key += 1;
            echo "Produto $key: R$ $value<br>";
        }

        if ($productTotalValue > 200) {
            echo "<br>O valor total dos produtos é de R$ $productTotalValue, <br>portanto há um desconto de 10% sobre o valor total,<br> resultando em R$ " . ($productTotalValue * 0.9) . ".";
        } else {
            echo "<br>O valor total dos produtos é de R$ $productTotalValue, portanto não há desconto sobre o valor total.";
        }

        echo "<br><br>$line<br><br>";

        echo "<h2> Questão 04</h2>";

        $age1 = 12;
        $age2 = 13;
        $age3 = 20;
        $age4 = 59;
        $age5 = 80;

        $ages = [
            $age1,
            $age2,
            $age3,
            $age4,
            $age5
        ];

        $childreen = 0;
        $teenagers = 0;
        $adults = 0;
        $elderly = 0;

        foreach ($ages as $key => $value) {
            $key += 1;



            if ($value < 13) {
                echo "Pessoa $key: $value anos | Criança<br>";
                $childreen += 1;
            } elseif ($value >= 13 && $value < 19) {
                echo "Pessoa $key: $value anos | Adolescente<br>";
                $teenagers += 1;
            } elseif ($value >= 20 && $value < 60) {
                echo "Pessoa $key: $value anos | Adulto<br>";
                $adults += 1;
            } else {
                echo "Pessoa $key: $value anos | Idoso<br>";
                $elderly += 1;
            }


        }

        echo "<br><strong>Total de crianças: $childreen</strong><br>";
        echo "<strong>Total de adolescentes: $teenagers</strong><br>";
        echo "<strong>Total de adultos: $adults</strong><br>";
        echo "<strong>Total de idosos: $elderly</strong><br>";

        echo "<br><br>$line<br><br>";

        //clean do clean
        ?>
    </h1>
</body>

</html>