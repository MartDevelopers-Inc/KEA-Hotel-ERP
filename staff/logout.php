<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['number']);
session_destroy();
header("Location: index.php");
exit;
