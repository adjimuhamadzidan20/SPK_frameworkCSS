<?php  

	$query = "DELETE FROM data_penilaian WHERE ID_Penilaian = $_GET[id]";
	mysqli_query($koneksi, $query);

	echo "<script>
        alert('Nilai Berhasil Terhapus');
        document.location.href = 'index.php?page=data_penilaian';
     </script>";

?>