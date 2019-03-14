<?php 
	if (isset($_POST['tanggal_lahir'])) {
		$tanggal_lahir = $_POST['tanggal_lahir'];
		function getUmur($tanggal, $delimiter='-'){
			list($tahun,$bulan,$hari) = explode($delimiter, $tanggal);
			$selisih_hari = date('d') - $hari;
			$selisih_bulan = date('m') - $bulan;
			$selisih_tahun = date('Y') - $tahun;
			if ($selisih_hari < 0 OR $selisih_bulan < 0) {
				$selisih_tahun--;
			}
			return $selisih_tahun;
		}
		echo getUmur($tanggal_lahir);
	}else{
		echo "error";
	}
 ?>
