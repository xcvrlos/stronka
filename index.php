<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z PHP i HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #0066cc;
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include 'data.php'; // Dołącz dane z pliku PHP ?>

    <!-- Wyświetlanie danych z PHP -->
    <h1><?php echo $greeting; ?></h1>
    <p>Data i godzina: <strong><?php echo $currentDate; ?></strong></p>

    <!-- Lista produktów -->
    <h2>Nasze produkty:</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo $product; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
