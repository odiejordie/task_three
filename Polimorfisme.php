<?php
	//CONTOH ABSTRAKSI
	abstract class Status{
		//ABSTRACT METHOD GURU
		abstract public function setNama($i);
		abstract public function setUmur($i);

		abstract public function getNama();
		abstract public function getUmur();
	}

	class Guru extends Status{

		//VARIABEL GURU
		public $nama;
		public $umur;
		private $nip;

		//SETTER
		public function setNama($i){
			$this->nama = $i;
		}

		public function setUmur($i){
			$this->umur = $i;
		}

		public function setNip($i){
			$this->nip = $i;
		}

		//GETTER
		public function getNama(){
			echo "$this->nama <br>";
		}

		public function getUmur(){
			echo "$this->umur <br>";
		}

		public function getNip(){
			echo "$this->nip <br>";
		}
	}

	class Siswa extends Status{

		//VARIABEL SISWA
		public $nama;
		public $umur;

		//SETTER
		public function setNama($i){
			$this->nama = $i;
		}

		public function setUmur($i){
			$this->umur = $i;
		}

		//GETTER
		public function getNama(){
			echo "$this->nama <br>";
		}

		public function getUmur(){
			echo "$this->umur <br>";
		}
	}


	//OBJEK
	$guru1 = new Guru;
	$siswa1 = new Siswa;

	echo "Abstraksi<br><br>";

	//MEMASUKAN DATA KE CLASS
	$guru1->setNama("Yolo");
	$guru1->setNip("679112201");
	$guru1->setUmur("21");

	$siswa1->setNama("Ahmad");
	$siswa1->setUmur("12");


	echo "Info Guru : <br>";
	echo "Nama Guru : ";
	$guru1->getNama();
	echo "NIP : ";
	$guru1->getNip();
	echo "Umur : ";
	$guru1->getUmur();	

	echo "<br>";
	echo "Info Siswa : <br>";
	echo "Nama Siswa : ";
	$siswa1->getNama();
	echo "Umur : ";
	$siswa1->getUmur();	

?>