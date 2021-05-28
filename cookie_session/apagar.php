<?php
include "menu.php";
foreach ($_COOKIE as $pos => $valor) {
	setcookie($pos);
}
echo "<h1>Cookie excluído </h1>";
?>
</body>
</html>