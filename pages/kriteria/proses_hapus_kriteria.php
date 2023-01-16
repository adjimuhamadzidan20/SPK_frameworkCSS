<?php  

	$query = "DELETE FROM data_kriteria WHERE ID_Kriteria = $_GET[id]";
	mysqli_query($koneksi, $query);

	echo "<script>
        alert('Bobot Kriteria Berhasil Terhapus');
        document.location.href = 'index.php?page=data_kriteria';
     </script>";

?>