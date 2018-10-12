<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	$pattern = '/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}$/';

	$myPhone = '010-2230-7979';

	if(preg_match($pattern, $myPhone, $matches)){
		echo "휴대전화 번호로 입력된 값 {$myPhone}는 유효성에 일치합니다." ;
		echo "<pre>";
		var_dump($matches);
	} else {
		echo "사용불가한 번호입니다.";
	}
?>
</body>
</html>