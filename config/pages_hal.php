<?php
	require 'koneksi_db.php';  
	error_reporting(error_reporting() & ~E_NOTICE);

	// halaman alternatif
	if ($_GET['page'] == 'data_alternatif') {
		require 'pages/alternatif/alternatif.php';
	}
	// hapus data alter
	else if ($_GET['page'] == 'delete_alter') {
		require 'pages/alternatif/proses_hapus_alter.php';
	}
	// edit data alter
	else if ($_GET['page'] == 'edit_alter') {
		require 'pages/alternatif/proses_update_alter.php';
	}
	// ====================================================

	// halaman kriteria
	else if ($_GET['page'] == 'data_kriteria') {
		require 'pages/kriteria/kriteria.php';
	}
	// hapus data bobot kriteria
	else if ($_GET['page'] == 'delete_kriteria') {
		require 'pages/kriteria/proses_hapus_kriteria.php';
	}
	// ====================================================

	// halaman penilaian
	else if ($_GET['page'] == 'data_penilaian') {
		require 'pages/penilaian/penilaian.php';
	}
	// hapus data penilaian
	else if ($_GET['page'] == 'delete_penilaian') {
		require 'pages/penilaian/proses_hapus_penilaian.php';
	}
	// edit data penilaian
	else if ($_GET['page'] == 'edit_penilaian') {
		require 'pages/penilaian/proses_update_penilaian.php';
	}
	// ====================================================

	// halaman perhitungan
	else if ($_GET['page'] == 'perhitungan') {
		require 'pages/perhitungan/perhitungan.php';
	}
	// ====================================================

	// halaman hasil
	else if ($_GET['page'] == 'hasil_normalisasi') {
		require 'pages/hasil/hasil_normalisasi.php';
	}
	else if ($_GET['page'] == 'hasil_preferensi') {
		require 'pages/hasil/hasil_preferensi.php';
	}
	// ====================================================

	// halaman tentang
	else if ($_GET['page'] == 'tentang') {
		require 'tentang.php';
	}
	// ====================================================

	// halaman cara penggunaan
	else if ($_GET['page'] == 'petunjuk') {
		require 'cara_penggunaan.php';
	}
	// ====================================================

	// halaman beranda
	else {
		require 'beranda.php';
	}

?>