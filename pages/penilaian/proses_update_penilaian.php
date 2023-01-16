<?php  
  // menampilkan data yang dipilih
  $query = "SELECT * FROM data_penilaian WHERE ID_Penilaian = $_GET[id]";
  $data = mysqli_query($koneksi, $query);
  $hasil = mysqli_fetch_assoc($data);

  // mengubah / edit data
  if (isset($_POST['edit'])) {
    $idPenilai = $_GET['id'];
    $alternatif = htmlspecialchars($_POST['alternatif']);
    $nilai_c1 = htmlspecialchars($_POST['nilai_c1']);
    $nilai_c2 = htmlspecialchars($_POST['nilai_c2']);
    $nilai_c3 = htmlspecialchars($_POST['nilai_c3']); 
    $nilai_c4 = htmlspecialchars($_POST['nilai_c4']);
    $nilai_c5 = htmlspecialchars($_POST['nilai_c5']);
    $nilai_c6 = htmlspecialchars($_POST['nilai_c6']);

    $query = "UPDATE data_penilaian SET Mudah_Dipelajari = '$nilai_c1', Banyak_Digunakan = '$nilai_c2', 
    Popular = '$nilai_c3', Sumber_Belajar_Luas = '$nilai_c4', Ringan_Digunakan = '$nilai_c5', 
    Proses_Instalasi_Mudah = '$nilai_c6' WHERE ID_Penilaian = '$idPenilai'";

    mysqli_query($koneksi, $query);

    echo "<script>
            alert('Data Penilaian Berhasil Diupdate');
            document.location.href = 'index.php?page=data_penilaian';
         </script>";
  }

?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Penilaian</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?page=data_penilaian">Penilaian</a></li>
          <li class="breadcrumb-item active">Edit Penilaian</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Edit Data Penilaian</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" method="post">
          <div class="row mb-3">
            <div class="col-md-6">
              <h5 class="font-weight-bold">Kriteria</h5>
            </div>
            <div class="col-md-6">
              <h5 class="font-weight-bold">Penilaian</h5>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">   
              <label>ID Penilaian</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c1" required value="<?= $hasil['ID_Penilaian'];?>" disabled></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">   
              <label>(K1) Mudah Dipelajari</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c1" required value="<?= $hasil['Mudah_Dipelajari'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K2) Banyak Digunakan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c2" required value="<?= $hasil['Banyak_Digunakan'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K3) Popular</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c3" required value="<?= $hasil['Popular'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K4) Sumber Belajar Luas</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c4" required value="<?= $hasil['Sumber_Belajar_Luas'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K5) Ringan Digunakan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c5" required value="<?= $hasil['Ringan_Digunakan'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K6) Proses Instalasi Mudah</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="nilai_c6" required value="<?= $hasil['Proses_Instalasi_Mudah'];?>"></input>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <a href="index.php?page=data_penilaian">
              <button type="button" class="btn btn-primary">Kembali</button>
            </a>
            <button type="submit" class="btn btn-primary" name="edit"><i class="far fa-edit"></i> Edit</button>
          </div>
        </form>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>