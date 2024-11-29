<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przykład Funkcji PHP</title>
</head>
<body>
    <h1>Witaj w świecie PHP!</h1>

    <h2>Wyświetlanie tekstu</h2>
    <?php
        echo "Witaj na stronie PHP!";
    ?>

    <h2>Funkcja sumująca dwie liczby</h2>
    <?php
        function dodaj($a, $b) {
            return $a + $b;
        }
        echo "Suma 5 + 10 = " . dodaj(5, 10);
    ?>

    <h2>Funkcja, która zwraca bieżącą datę i godzinę</h2>
    <?php
        echo "Bieżąca data i godzina: " . date('Y-m-d H:i:s');
    ?>

    <h2>Tablica w PHP</h2>
    <?php
        $owoce = ["Jabłko", "Banan", "Pomarańcza"];
        echo "Lista owoców: ";
        echo implode(", ", $owoce);
    ?>

    <h2>Prosta pętla w PHP</h2>
    <?php
        echo "Liczby od 1 do 5: ";
        for ($i = 1; $i <= 5; $i++) {
            echo $i . " ";
        }
    ?>

</body>
</html>
