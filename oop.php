<?php
	abstract class PeralatanBand{
		abstract protected function alatAlat();
	}

	class Band extends PeralatanBand{

		public $nama_band;
		public $banyak_anggota;
		public $alat;
		private $nama_leader;
		public $sponsor;
		public $sponsor2;

		function __construct($alat, $namaBand, $namaLead, $banyakPersonil, $sponsor){
			$this->nama_band = $namaBand;
			$this->banyak_anggota = $banyakPersonil;
			$this->nama_leader = $namaLead;
			$this->alat = $alat;
			$this->sponsor = $sponsor;
		}

		function __call($i, $args){
			if ($i === 'sponsor'){
				$this->sponsor2 = $args;
			}else{
				$this->sponsor;
			}
		}

		function getNamaBand(){
			return $this->nama_band;
		}

		function getBanyakAnggota(){
			return $this->banyak_anggota;
		}

		function getNamaLeader(){
			return $this->nama_leader;
		}

		function alatAlat(){
			return $this->alat;
		}

		function getSponsor(){
			return $this->sponsor;
		}

		function getSponsor2(){
			return $this->sponsor2;
		}
	}


	$band1 = new Band("Gitar, Drum, Bass, Microphone", "Awan Band", "Awan", "5", "Teh Sisri");
	$band1->sponsor("Teh Sariwangi", "Teh Botol", "Teh Celup");

	$band2 = new Band("Gitar, Drum, Bass, Microphone", "Langit Band", "Langit", "4", "Teh Bulet");
	$band2->sponsor("Teh X", "Teh Segitiga", "Teh Kotak");

	echo "<p>";
	echo "<h1>Biodata ".$band1->getNamaBand()."</h1><br>";
	echo "Nama Band : ".$band1->getNamaBand()."<br>";
	echo "Nama Leader : ".$band1->getNamaLeader()."<br>";
	echo "Banyak Anggota : ".$band1->getBanyakAnggota()."<br>";
	echo "Alat Band : ".$band1->alatAlat()."<br>";
	echo "Sponsor : ".$band1->getSponsor()."<br>";
	foreach ($band1->getSponsor2() as $row) {
		echo "$row <br>";
	}
	echo "</p>";

	echo "<p>";
	echo "<h1>Biodata ".$band2->getNamaBand()."</h1><br>";
	echo "Nama Band : ".$band2->getNamaBand()."<br>";
	echo "Nama Leader : ".$band2->getNamaLeader()."<br>";
	echo "Banyak Anggota : ".$band2->getBanyakAnggota()."<br>";
	echo "Alat Band : ".$band2->alatAlat()."<br>";
	echo "Sponsor : ".$band2->getSponsor()."<br>";
	foreach ($band2->getSponsor2() as $row) {
		echo "$row <br>";
	}
	echo "</p>";

?>