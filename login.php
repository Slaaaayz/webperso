<?php
$admin_id = "12345";

$entered_id = $_POST['admin_id'];

if ($entered_id === $admin_id) {
    header("Location: admin_page.php");
    exit();
} else {
    echo "ID Admin incorrect. Veuillez réessayer.";
}
?>
