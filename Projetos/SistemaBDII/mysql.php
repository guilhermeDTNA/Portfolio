<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=id8854008_projetos", "id8854008_guilherme", "GNR*CAM");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
