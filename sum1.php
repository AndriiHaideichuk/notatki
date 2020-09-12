<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
    # Skrypt liczy sumę liczb od 1  do podanej liczby
    //  Komentarz jednoliniowy
/*
Komentarz jednoliniowy
*/
$liczba = 10;
$ suma = 1;
# Używany <= zamiast < bo ostanią licbę też chcemy dodać
for ( $i = 1; $i = <= $liczba; $i++) {
    echo "Licznik ( \$ ) wynosi : $i <br>";
    $suma += $i;
    # lub 
    # $suma = suma % $i;
    echo "Nowa suma wynisi :$suma <br><br>";
    

    

    }
echo "Suma liczb od 1 do $liczba wynisi : $suma <br>";

?>
</body>
</html>