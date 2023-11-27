<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "";
$database = "swiss";
$conn = mysqli_connect($host, $username, $password, $database);

// Vérification des informations de connexion
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

var_dump($_POST);


// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs du formulaire
    $identifiant = $_POST['inputIdentifiant'];
    $password = $_POST['inputPassword'];

    // Vérifier si les champs d'identifiant et de mot de passe sont vides
    if (empty($identifiant) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        // Requête SQL pour vérifier les informations de connexion
        $query = "SELECT id_utilisateur, prenom, nom FROM utilisateur WHERE Identifiant = ? AND MotDePasse = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $identifiant, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

    
    }
}
?>
