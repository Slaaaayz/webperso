<?php
setcookie("admin_access", "", time() - 3600, "/");
header("Location: login.php");
exit();
?>
