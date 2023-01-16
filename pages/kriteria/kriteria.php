<?php  
  // menampilkan seluruh data 
  function tampilData($query) {
    global $koneksi;

    $dataAlter = mysqli_query($koneksi, $query);
    $row = [];
    while ($data = mysqli_fetch_assoc($dataAlter)) {
      $row [] = $data;
    }

    return $row;
  } 
  $hasil = tampilData("SELECT * FROM data_kriteria");

  // menyimpan data yang diinput
  if (isset($_POST['simpan'])) {
    global $koneksi;

    $sql = "SELECT COUNT(*) FROM data_kriteria";
    $data = mysqli_query($koneksi, $sql);
    $isi = mysqli_fetch_row($data);

    if ($isi[0] == 1) {
      echo "<script>
              alert('Nilai Bobot Hanya Bisa Input Sekali');
           </script>";
    } else {
      $bobot_c1 = htmlspecialchars($_POST['bobot_c1']);
      $bobot_c2 = htmlspecialchars($_POST['bobot_c2']);
      $bobot_c3 = htmlspecialchars($_POST['bobot_c3']); 
      $bobot_c4 = htmlspecialchars($_POST['bobot_c4']);
      $bobot_c5 = htmlspecialchars($_POST['bobot_c5']);
      $bobot_c6 = htmlspecialchars($_POST['bobot_c6']);

      $query = "INSERT INTO data_kriteria VALUES ('', '$bobot_c1', '$bobot_c2', '$bobot_c3',
      '$bobot_c4', '$bobot_c5', '$bobot_c6')";
      mysqli_query($koneksi, $query);

      echo "<script>
              alert('Nilai Bobot Berhasil Disimpan');
              document.location.href = 'index.php?page=data_kriteria';
           </script>";
    }
  }

?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kriteria</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Beranda</a></li>
          <li class="breadcrumb-item active">Kriteria</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Silahkan Masukan Bobot Kriteria</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" method="post">
          <div class="row mb-3">
            <div class="col-md-6">
              <h5 class="font-weight-bold">Kriteria</h5>
            </div>
            <div class="col-md-6">
              <h5 class="font-weight-bold">Jumlah Bobot</h5>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">   
              <label>(K1) Mudah Dipelajari</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Bobot" name="bobot_c1" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K2) Banyak Digunakan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Bobot" name="bobot_c2" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K3) Popular</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Bobot" name="bobot_c3" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K4) Sumber Belajar Luas</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Bobot" name="bobot_c4" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K5) Ringan Digunakan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Bobot" name="bobot_c5" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K6) Proses Instalasi Mudah</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Bobot" name="bobot_c6" required></input>
            </div>
          </div>
          <div class="simpan text-right">
            <button type="submit" class="btn btn-primary" name="simpan" id="simpan"><i class="far fa-save"></i> Simpan</button>
          </div>
        </form>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered" id="example2">
              <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>K1</th>
                  <th>K2</th>
                  <th>K3</th>
                  <th>K4</th>
                  <th>K5</th>
                  <th>K6</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                  foreach ($hasil as $items) {
                ?>
                  <tr class="text-center">
                    <td><?= $items['ID_Kriteria']; ?></td>
                    <td><?= $items['Mudah_Dipelajari']; ?></td>
                    <td><?= $items['Banyak_Digunakan']; ?></td>
                    <td><?= $items['Popular']; ?></td>
                    <td><?= $items['Sumber_Belajar_Luas']; ?></td>
                    <td><?= $items['Ringan_Digunakan']; ?></td>
                    <td><?= $items['Proses_Instalasi_Mudah']; ?></td>
                    <td>
                      <center>
                        <a href="index.php?page=delete_kriteria&id=<?= $items['ID_Kriteria']; ?>">
                          <button type="button" class="btn btn-primary" onclick="return confirm('Hapus nilai bobot?');"><i class="far fa-trash-alt"></i> Delete</button>
                        </a>
                      </center>
                    </td>
                  </tr>
                <?php  
                  }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->