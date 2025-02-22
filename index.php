<?php
// Afficher "Hello, World!"
echo "Hello, World!";

// Gérer une requête GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "Bonjour, " . $name . "!";
    } else {
        echo "Bonjour, invité!";
    }
}
?>