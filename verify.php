<?php
$admin_id = "12345";

$entered_id = $_POST['admin_id'];

if ($entered_id === $admin_id) {
    setcookie("admin_access", true, time() + 86400, "/");
    header("Location: admin_page.php");
    exit();
} else {
    echo "ID Admin incorrect. Veuillez réessayer.";
}
?>
