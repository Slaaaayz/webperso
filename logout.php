<?php
setcookie("admin_access", "", time() - 3600, "/");
header("Location: index.php");
exit();
?>
