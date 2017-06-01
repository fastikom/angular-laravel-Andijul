<?php
//contoh kelas//
class kendaraan{
	// properti kendaraan//
	private $warna;
	private $jumlah_pintu;
	private $jumlah_roda;
	public $harga;
	public $merk;
	//menthod class//
	public function _construct(){
		echo 'ini adalah object kendaraan. <br/>';
	}
	public function set_harga($harga){
		$this->harga=$harga;
	}
	public function show_harga(){
		echo 'harga kendaraan : rp.'.$this->harga.'.<br/>';
	}
	public function jalan(){
		echo "brrooomm";
	}
	public function set_jumlah_pintu($jumlahpintu){
		$this->jumlah_pintu=$jumlahpintu;
	}
	public function show_jumlah_pintu(){
		echo 'jumlah pintu : '.$this->jumlah_pintu.'.<br/>';
	}
	public function set_jumlah_roda($jumlahroda){
		$this->jumlah_roda=$jumlahroda;
	}
	public function show_jumlah_roda(){
		echo 'jumlah roda :'.$this->jumlah_roda.'<br/>';
	}
	public function set_warna($warna){
		$this->warna=$warna;
	}
	public function show_warna(){
		echo'warna :'.$this->warna.'<br/>';
	}
	public function set_merk($merk){
		$this->merk=$merk;
	}
	public function show_merk(){
		echo'merk :'.$this->merk.'<br/>';
	}
}
//contoh object//
#mengcreate object $saya_adalah_object dari class kendaraan
$saya_adalah_object=new kendaraan;
$saya_adalah_object->set_harga(100000);
$saya_adalah_object->show_harga();
$saya_adalah_object->set_jumlah_pintu(4);
$saya_adalah_object->show_jumlah_pintu();
$saya_adalah_object->set_jumlah_roda(6);
$saya_adalah_object->show_jumlah_roda();
$saya_adalah_object->set_warna('merah');
$saya_adalah_object->show_warna();
$saya_adalah_object->set_merk('honda jazz');
$saya_adalah_object->show_merk();
$saya_adalah_object->jalan();
?>