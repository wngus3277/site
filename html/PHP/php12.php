<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$member = array();

		//member 배열에 0 인덱스를 생성하고 인덱스도 배열로 선언 
		$member[0] = array();
		$member[0] ['name'] = '김수탉';
		$member[0] ['userID'] = 'richcl';
		$member[0] ['email'] = 'richcl@naver.com';

		$member[1] = array();
		$member[1] ['name'] = '김길아';
		$member[1] ['userID'] = 'kim';
		$member[1] ['email'] = 'kim@naver.com';

		$member[2] = array();
		$member[2] ['name'] = '나지훈';
		$member[2] ['userID'] = 'naji';
		$member[2] ['email'] = 'naji@naver.com';

		$member[3] = array();
		$member[3] ['name'] = '이지훈';
		$member[3] ['userID'] = 'easy';
		$member[3] ['email'] = 'easy@naver.com';

		for($i = 0; $i < count($member); $i++){
			echo $member[$i]['name']."<br>";
			echo $member[$i]['email']."<br>";
		}
	?>
</body>
</html>