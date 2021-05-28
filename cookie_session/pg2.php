<?php
include "menu.php";
echo "Usuario: ".$_COOKIE['usuario']."<br>";
echo "E-mail: ".$_COOKIE['email']."<br>";
echo "<pre>";print_r($_COOKIE);echo "</pre>";
?>
</body>
</html>
