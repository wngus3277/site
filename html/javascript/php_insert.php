<?php
	//mysql 접속 소스를 include
	include_once "../connectDB.php";

	//post 방식으로 전달 받은 값 확인
	echo "<pre>";
	var_dump($_POST);

	//이름 검증
	if($_POST['userName'] == '' || $_POST['userName'] == null){
		echo "해당 값을 사용할 수 없습니다. 1.name ";
		exit;
	}
	$userName = $_POST['userName'];
	//앞 뒤 공백제거
	$userName = trim($userName);
	//쿼리문의 따옴표 처리를 위해 real_escape_string 메소드 사용
	$userName = $dbConnect->real_escape_string($userName);

	//phone
	if($_POST['phone'] == '' || $_POST['phone'] == null){
		echo "해당 값을 사용할 수 없습니다. 1.name ";
		exit;
	}
	$phone = $_POST['phone'];

	//이메일 유효성 검사
	$emailCheck = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);
	if($emailCheck == false){
		echo "해당 값을 사용할 수 없습니다. 5";
		exit;
	}
	$userEmail = $_POST['userEmail'];

	//쿼리문 작성
	$sql = "INSERT INTO sample2(myMemberID, uname, phone, email) VALUES";
	$sql .= "('{$myMemberID }', '{$userName}', '{$phone}', '{$userEmail}')";

	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
		echo "회원 가입 정보 입력 완료 (Ok)";
	}else {
		echo "회원 가입 정보 입력 실패 (No)";
	}
?>
