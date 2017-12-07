<?php
	//CONTOH CLASS DAN INSTANCE
	class Murid{

		//VARIABEL
		var $umur;
		var $nama;
		var $kelas;

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

	$anak1 = new Murid;
	$anak2 = new Murid;
	$anak3 = new Murid;

	echo "Class dan Instance<br>";
	//MEMASUKAN DATA CLASS
	$anak1->setUmur(12);
	$anak1->setNama("Joni");
	$anak1->setKelas(6);

	$anak2->setUmur(13);
	$anak2->setNama("Maman");
	$anak2->setKelas(1);

	$anak3->setUmur(14);
	$anak3->setNama("Susi");
	$anak3->setKelas(2);

	//MENGAMBIL DATA DARI CLASS
	$anak1->getUmur();
	$anak1->getNama();
	$anak1->getKelas();

	echo "<br>";

	$anak2->getUmur();
	$anak2->getNama();
	$anak2->getKelas();

	echo "<br>";

	$anak3->getUmur();
	$anak3->getNama();
	$anak3->getKelas();

?>