<?php 

$connexion = new PDO('mysql:host=localhost;dbname=counter', 'root', '');

// Récupération de l'adresse IP du visiteur
$ip_address = $_SERVER['REMOTE_ADDR'];

// Vérification si l'adresse IP existe déjà dans la base de données
$requete = $connexion->prepare('SELECT COUNT(*) FROM visitors WHERE ip_address = :ip_address');
$requete->bindParam(':ip_address', $ip_address, PDO::PARAM_STR);
$requete->execute();
$nombre_de_vues = $requete->fetchColumn();

// Si l'adresse IP n'existe pas encore dans la base de données, on l'ajoute
if($nombre_de_vues == 0) {
    $requete = $connexion->prepare('INSERT INTO visitors (ip_address, date_time) VALUES (:ip_address, NOW())');
    $requete->bindParam(':ip_address', $ip_address, PDO::PARAM_STR);
    $requete->execute();
}

// Récupération du nombre total de vues
$requete = $connexion->query('SELECT COUNT(*) FROM visitors');
$nombre_total_de_vues = $requete->fetchColumn();





?>