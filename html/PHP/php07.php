<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$str = "문자열";
		echo "데이터형 변경 전의 데이터형".gettype($str)."값: {$str} <br>";

		$str = (int) $str;
		echo "데이터형 변경 후의 데이터형".gettype($str)." 값은 {$str}";
		echo "<br><br>";

		$str2 = "555문자열";
		echo "데이터형 변경 전의 데이터형".gettype($str2)."값: {$str2} <br>";

		$str2 = (int) $str2;
		echo "데이터형 변경 후의 데이터형".gettype($str2)." 값은 {$str2}";
		echo "<br><br>";

		$str3 = "12.5564";
		echo "데이터형 변경 전의 데이터형".gettype($str3)."값: {$str3} <br>";

		$str3 = (int) $str3;
		echo "데이터형 변경 후의 데이터형".gettype($str3)." 값: {$str3}";

	?>
</body>
</html>