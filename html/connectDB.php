	<?php
		$host = "localhost";
		$user = "kimju7";
		$pw = "hh121245";
		$dbname = "kimju7";
		$dbConnect = new mysqli($host, $user, $pw, $dbname);
		$dbConnect->set_charset("utf8");

		if(mysqli_connect_error()){
			echo "데이터베이스 접속 실패";
			echo "mysqi_connect_error()";
		}else {
			
		}
	?>
