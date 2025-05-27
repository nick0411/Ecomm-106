<?php
require_once "dbconnection.php";

if (isset($_POST["insert_movie"])){
    $movieId      = $_POST['movieId'];
    $title        = $_POST['title'];
    $releaseDate  = $_POST['releaseDate'];
    $runtime      = $_POST['runtime'];
    $genre        = $_POST['genre'];
    $company      = $_POST['company'];
    $country      = $_POST['country'];
    
    $sql = "INSERT INTO Movie (id, title, release_date, runtime, genre, company, country) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    try {
        $status = $stmt->execute([$movieId, $title, $releaseDate, $runtime, $genre, $company, $country]);
        if ($status) {
            echo "Movie has been inserted";
        } else {
            echo "Movie has not been inserted";
        }
    } catch (PDOException $e) {
        echo "Insert failed: " . $e->getMessage();
    }
}
?>