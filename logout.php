<?php

ob_start();
session_start();
unset($_SESSION['raibow_name']);
unset($_SESSION['raibow_uid']);
unset($_SESSION['raibow_username']);
echo '<script type="text/javascript">window.location="login.php"; </script>';


?>