<?php
$admin_id = "12345";

$entered_id = $_POST['admin_id'];

if ($entered_id === $admin_id) {
    setcookie("admin_access", "Frm38FALKVH#AAW", time() + 86400, "/");
    header("Location: admin_page.php");
    exit();
} else {
    header("Location: index.php");
}
?>
