<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="button-group">
		<a href="./" role="button">Accueil</a>
		<a href="./?q=admin" role="button">Admin</a>
	</div>
	<?php echo $this->content(); ?>
</body>
</html>