<?php
session_start();

session_unset();
session_destroy();

header("Location: /G11/Html/index.php?logout=success");
exit();
?>
