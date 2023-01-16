<?php  

	$query = "DELETE FROM data_alternatif WHERE ID_Alternatif = $_GET[id]";
	mysqli_query($koneksi, $query);

	echo "<script>
        alert('Data Alternatif Berhasil Terhapus');
        document.location.href = 'index.php?page=data_alternatif';
     </script>";

?>