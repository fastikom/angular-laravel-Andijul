<?php
class Bapak{
	private $nama ="Bapak";
	function Bapak ($n){
		$this->nama=$n;
	}
	function hallo(){
		echo "hallo , saya" .$this->nama. "<br>";
	}
}
class Anak extends Bapak{
	function Hai(){
		echo"hai dari kelas anak";
	}
}
$test=new Anak (" anak dari bapak");
$test->Hallo();
?>