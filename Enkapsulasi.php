<?php
	//CONTOH ENKAPSULASI
	class Guru{

		//VARIABEL GLOBAL
		public $nama;
		public $kelas;
		private $kuncijawaban;

		//SETTER
		public function setNamaGuru($i){
			$this->nama = $i;
		}

		public function setKunciJawaban($i){
			$this->kuncijawaban = $i;
		}

		//GETTER
		public function getNamaGuru(){
			echo "$this->nama ";
		}

		public function getKunciJawaban(){
			echo $this->kuncijawaban;
		}
	}

	class Murid extends Guru{

		//SETTER
		function setNama($i){
			$this->nama = $i;
		}

		function setKelas($i){
			$this->kelas = $i;
		}

		//GETTER
		function getNama(){
			echo "$this->nama ";
		}

		function getKelas(){
			echo "$this->kelas ";
		}

		function getKunci(){
			if($this->kuncijawaban == NULL){
				echo "KUNCI JAWABAN ERROR";
			}else{
				echo $this->kuncijawaban;
			}
		}
	}


	//OBJEK
	$guru1 = new Guru;
	$anak1 = new Murid;

	echo "Enkapsulasi<br>";

	//MEMASUKAN DATA KE CLASS
	$guru1->setNamaGuru("Yolo");
	$guru1->setKunciJawaban("a,b,c,d,e,e,a,b");

	$anak1->setNama("Joni");
	$anak1->setKelas(6);

	echo "<br>";
	echo "Halo saya adalah ";
	$guru1->getNamaGuru();
	echo "saya wali kelas dari murid yang bernama ";
	$anak1->getNama();
	echo "jawaban UTS anak ini adalah (";
	$guru1->getKunciJawaban();
	echo "). <br>";


	echo "Halo nama saya adalah ";
	$anak1->getNama();
	echo "Wali kelas saya adalah ";
	$guru1->getNamaGuru();
	echo "dan saat ini saya sedang berada di kelas ";
	$anak1->getKelas();
	echo "saya tidak bisa melihat kunci jawaban ";
	$anak1->getKunci();
?>