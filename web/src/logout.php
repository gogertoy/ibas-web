<?php
setcookie("user", "", time() - 3600, "/");
header("Location: login.php");
exit(); 
?>
<h1> logout </h1>
