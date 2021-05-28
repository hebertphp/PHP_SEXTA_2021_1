<?php
include "menu.php";
echo "Usuario: ".$_COOKIE['usuario']."<br>";
echo "Senha: ".$_COOKIE['senha']."<br>";
echo "<pre>";print_r($_COOKIE);echo "</pre>";
?>
</body>
</html>