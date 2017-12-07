<?php
	//CONTOH ABSTRAKSI
	abstract class Guru{
		//ABSTRACT METHOD GURU
		abstract public function setNamaGuru($i);
		abstract public function setUmurGuru($i);
		abstract public function setNip($i);

		abstract public function getNamaGuru();
		abstract public function getUmurGuru();
		abstract public function getNip();
	}

	class statusGuru extends Guru{

		//VARIABEL GURU
		public $nama;
		public $umur;
		private $nip;

		//SETTER
		public function setNamaGuru($i){
			$this->nama = $i;
		}

		public function setUmurGuru($i){
			$this->umur = $i;
		}

		public function setNip($i){
			$this->nip = $i;
		}

		//GETTER
		public function getNamaGuru(){
			echo "$this->nama <br>";
		}

		public function getUmurGuru(){
			echo "$this->umur <br>";
		}

		public function getNip(){
			echo "$this->nip <br>";
		}
	}


	//OBJEK
	$guru1 = new statusGuru;

	echo "Abstraksi<br><br>";

	//MEMASUKAN DATA KE CLASS
	$guru1->setNamaGuru("Yolo");
	$guru1->setNip("679112201");
	$guru1->setUmurGuru("21");

	echo "Info Guru : <br>";
	echo "Nama Guru : ";
	$guru1->getNamaGuru();
	echo "NIP : ";
	$guru1->getNip();
	echo "Umur : ";
	$guru1->getUmurGuru();

	
?>