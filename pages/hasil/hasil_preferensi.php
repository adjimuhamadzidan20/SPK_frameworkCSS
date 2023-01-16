<?php
  require 'pages/perhitungan/proses_perhitungan.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hasil Preferensi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Beranda</a></li>
          <li class="breadcrumb-item active">Hasil Preferensi</li>
        </ol>
      </div>
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
            <div class="row">
              <div class="col">
                <table class="table table-bordered" id="example2">
                  <thead>
                    <tr class="text-center">
                      <th>Urutan</th>
                      <th>Alternatif</th>
                      <th>K1</th>
                      <th>K2</th>
                      <th>K3</th>
                      <th>K4</th>
                      <th>K5</th>
                      <th>K6</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">  
                    <?php
                      $no = 1;  
                      foreach ($hasilPreferensi as $data) {
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['Nama_Framework'];?></td>
                        <td><?= $data['K1'];?></td>
                        <td><?= $data['K2'];?></td>
                        <td><?= $data['K3'];?></td>
                        <td><?= $data['K4'];?></td>
                        <td><?= $data['K5'];?></td>
                        <td><?= $data['K6'];?></td>
                        <td><?= $data['Total'];?></td>
                      </tr>
                    <?php  
                      $no++;
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row text-right mt-3">
              <div class="col">
                <form method="post" class="d-flex justify-content-end">
                  <div class="opsi-2">
                    <a href="pages/perhitungan/Cetak_Hasil.php" target="_blank">
                      <button type="button" class="btn btn-primary"><i class="far fa-file-pdf"></i> Cetak Hasil</button>
                    </a>
                    <button type="submit" class="btn btn-primary" name="reset" onclick="return confirm('Yakin ingin reset ulang? Semua data serta hasil akan terhapus semua'); "><i class="fas fa-redo"></i> Reset Ulang</button>
                  </div>
                </form>
              </div>    
            </div>
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