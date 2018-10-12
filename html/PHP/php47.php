<?php
	session_start();

	//세션 생성
	$_SESSION['userId'] = 'kim7u';

	if(isset($_SESSION['userId'])){
		echo "세션 생성 완료 아이디 값 : {$_SESSION['userId']}";
	} else {
		echo "세션 생성 실패";
	}
?>