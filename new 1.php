
<html>
<head>
	<title>Задание 2!</title>
</head>
<body>
	<?php
		if ( !file_exists( "new 2.php" ) )
	  		echo "Вgнимание! Файл new 2.php не найден!";
		else echo "Файл найден!<br>";

		require 'new 2.php';
		$mas=$array;
		foreach ($mas as $value) {
			echo "$value ";
		}

	?>

</body>
</html>