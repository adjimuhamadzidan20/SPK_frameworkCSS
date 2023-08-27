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
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th class="text-nowrap">Peringkat</th>
                        <th class="text-nowrap">Alternatif</th>
                        <th class="text-nowrap">K1</th>
                        <th class="text-nowrap">K2</th>
                        <th class="text-nowrap">K3</th>
                        <th class="text-nowrap">K4</th>
                        <th class="text-nowrap">K5</th>
                        <th class="text-nowrap">K6</th>
                        <th class="text-nowrap">Total</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">  
                      <?php
                        $no = 1;  
                        foreach ($hasilPreferensi as $data) {
                      ?>
                        <tr>
                          <td class="text-nowrap"><?= $no; ?></td>
                          <td class="text-nowrap"><?= $data['Nama_Framework'];?></td>
                          <td class="text-nowrap"><?= $data['K1'];?></td>
                          <td class="text-nowrap"><?= $data['K2'];?></td>
                          <td class="text-nowrap"><?= $data['K3'];?></td>
                          <td class="text-nowrap"><?= $data['K4'];?></td>
                          <td class="text-nowrap"><?= $data['K5'];?></td>
                          <td class="text-nowrap"><?= $data['K6'];?></td>
                          <td class="text-nowrap"><?= $data['Total'];?></td>
                        </tr>
                      <?php  
                        $no++;
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
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