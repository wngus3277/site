<?php
	class hello{
		protected function say($word){
			echo $word;
		}
	}

	//class hello를 상속 받음
	class hello2 extends hello{
		public function say2($word){
			//클래스 hello를 상속받았으므로 say메서드에 접근 가능 
			$this->say($word);
		}
	}
	$hello2 = new hello2;
	$hello2->say2("hello world");
?>