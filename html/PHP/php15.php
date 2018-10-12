<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$str = "hello World";

		echo $str;
		echo "<br><br>";

		echo "대문자로 출력<br>";
		echo strtoupper($str);
		echo "<br><br>";

		echo "소문자로 출력<br>";
		echo strtolower($str);
	?>
</body>
</html>