<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$num = 12;
		echo "변수 \$num  데이터형(값: {$num})은". gettype($num)."입니다.<br/>";

		$greenting = 안녕;
		echo "변수 \$greenting  데이터형(값: {$greenting})은". gettype($greenting)."입니다.<br/>";

		$numStr = "121212";
		echo "변수 \$numStr  데이터형(값: {$numStr})은". gettype($numStr)."입니다.<br/>";

		$fruit = array();
		echo "변수 \$fruit  데이터형(값: {$fruit})은". gettype($fruit)."입니다.<br/>";

		$na = null;
		echo "변수 \$na  데이터형(값: {$na})은". gettype($na)."입니다.<br/>";

		$blooean = true;
		echo "변수 \$blooean  데이터형(값: {$blooean})은". gettype($blooean)."입니다.<br/>";

	?>
</body>
</html>