<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
 

</head>
<body>
<style>
        body {
            display: flex;
            text-align: center;
            justify-content: flex-start;
        }
    </style>
<?php

$altura = 8; // Altura do pinheiro

// Loop para desenhar o pinheiro
for ($i = 1; $i <= $altura; $i++) {
    $espacos = $altura - $i;
    $folhas = 2 * $i - 1;
    $linha = str_repeat(" ", $espacos) . str_repeat("X", $folhas);
    echo $linha . "<br>";
}

// Tronco do pinheiro
$espacosTronco = $altura - 2;
$tronco = str_repeat(" ", $espacosTronco) . "XX";
echo $tronco . "<br>";
$tronco = str_repeat(" ", $espacosTronco) . "XX";
echo $tronco . "<br>";
$troncoBase = str_repeat(" ", $espacosTronco - 1) . "XXXX";
echo $troncoBase . "<br>";
?>


</body>

</html>