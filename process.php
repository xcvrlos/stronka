<?php
// Funkcja do walidacji danych wejściowych
function sanitizeInput($data) {
    $data = trim($data); // Usuwa białe znaki z początku i końca
    $data = stripslashes($data); // Usuwa ukośniki
    $data = htmlspecialchars($data); // Konwertuje znaki specjalne
    return $data;
}

// Pobranie danych z formularza z walidacją
$firstname = sanitizeInput($_POST['firstname']);
$lastname = sanitizeInput($_POST['lastname']);
$street = sanitizeInput($_POST['street']);
$house_number = sanitizeInput($_POST['house_number']);
$postal_code = sanitizeInput($_POST['postal_code']);
$city = sanitizeInput($_POST['city']);
$phone = sanitizeInput($_POST['phone']);
$email = sanitizeInput($_POST['email']);

// Sprawdzenie, czy dane zostały poprawnie przesłane
if (empty($firstname) || empty($lastname) || empty($street) || empty($house_number) || 
    empty($postal_code) || empty($city) || empty($phone) || empty($email)) {
    die("Wszystkie pola są wymagane!");
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przetworzone dane</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Twoje dane zostały przetworzone</h1>

    <!-- Tabela z danymi -->
    <table>
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Ulica</th>
                <th>Numer domu</th>
                <th>Kod pocztowy</th>
                <th>Miasto</th>
                <th>Numer telefonu</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $firstname; ?></td>
                <td><?php echo $lastname; ?></td>
                <td><?php echo $street; ?></td>
                <td><?php echo $house_number; ?></td>
                <td><?php echo $postal_code; ?></td>
                <td><?php echo $city; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $email; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
