<?php
	class hello{
		//static을 사용해서 메서드를 생성
		static function output($word){
			echo "메세지를 출력하는 메서드<br>";
			echo $word;
		}
	}

	//인스턴스를 생성하지 않고 클래스 hello의 메서드 output을 호출
	hello::output("hello world");
?>