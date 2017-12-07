<?php
	//CONTOH INHERITANCE
	class Guru{

		//VARIABEL GLOBAL
		public $umur;
		public $nama;
		public $namaGuru;
		public $kelas;

		//SETTER
		public function setNamaGuru($i){
			$this->namaGuru = $i;
		}

		//GETTER
		public function getNamaGuru(){
			echo $this->namaGuru;
		}
		
	}

	class Murid extends Guru{

		//SETTER
		function setUmur($i){
			$this->umur = $i;
		}

		function setNama($i){
			$this->nama = $i;
		}

		function setKelas($i){
			$this->kelas = $i;
		}

		//GETTER
		function getUmur(){
			echo "$this->umur ";
		}

		function getNama(){
			echo "$this->nama ";
		}

		function getKelas(){
			echo "$this->kelas ";
		}
	}


	//OBJEK
	$guru1 = new Guru;
	$anak1 = new Murid;

	echo "Inheritance atau turunan<br>";

	//MEMASUKAN DATA KE CLASS
	$guru1->setNamaGuru("Yolo Master ");

	$anak1->setUmur(12);
	$anak1->setNama("Joni");
	$anak1->setKelas(6);

	echo "Halo nama saya adalah ";
	$anak1->getNama();
	echo "Umur saya ";
	$anak1->getUmur();
	echo "Wali kelas saya adalah ";
	$guru1->getNamaGuru();
	echo "dan saat ini saya sedang berada di kelas ";
	$anak1->getKelas();
?>