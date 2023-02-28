<?php
header("Access-Control-Allow-Origin: *");

include '../../config/db_connect.php';

// Verifica che la richiesta sia stata effettuata tramite metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica che i dati siano stati inviati correttamente
    if (isset($_POST["email"]) && isset($_POST["password"])) {


        $email = $_POST["email"];
        $password = $_POST["password"];

        // Controllo che l'email non sia già presente nel database
        $query = "SELECT id FROM users WHERE email = '$email'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Email già presente
            http_response_code(400);
            echo json_encode(array("message" => "Email già presente nel database."));
        } else {
            // Email non presente, procedo con la registrazione
            $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            if ($conn->query($query) === TRUE) {
                // Registrazione effettuata con successo
                http_response_code(201);
                echo json_encode(array("message" => "Registrazione effettuata con successo."));
            } else {
                // Errore durante la registrazione
                http_response_code(500);
                echo json_encode(array("message" => "Errore durante la registrazione."));
            }
        }
    } else {
        // Dati non inviati correttamente
        http_response_code(400);
        echo json_encode(array("message" => "Dati non inviati correttamente."));
    }
} else {
    // Metodo non consentito
    http_response_code(405);
    echo json_encode(array("message" => "Metodo non consentito."));
}
$conn-close();