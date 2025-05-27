<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "movie_db";

$dsn = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Movie data
// $id = 24;
// $title = "Pirates of the Caribbean: The Curse of the Black Pearl";
// $release_date = "2003-04-21";
// $runtime = 143;
// $genre = "Adventure";
// $company = "bllb";
// $country = "America";

// $sql = "INSERT INTO Movie (id, title, release_date, runtime, genre, company, country) VALUES (?, ?, ?, ?, ?, ?, ?)";
// $stmt = $pdo->prepare($sql);

// try {
//     $status = $stmt->execute([$id, $title, $release_date, $runtime, $genre, $company, $country]);
//     if ($status) {
//         echo "Movie has been inserted";
//     } else {
//         echo "Movie has not been inserted";
//     }
// } catch (PDOException $e) {
//     echo "Insert failed: " . $e->getMessage();
// }
?>