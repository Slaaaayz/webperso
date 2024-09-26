<?php
if (!isset($_COOKIE['admin_access']) !== "Frm38FALKVH#AAW") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
</head>
<body>
    <h1>Bienvenue sur la page Admin</h1>
    <p>Ceci est une section protégée du site, accessible uniquement aux administrateurs.</p>
</body>
</html>
