<?php
  require 'pages/perhitungan/proses_perhitungan.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hasil Normalisasi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Beranda</a></li>
          <li class="breadcrumb-item active">Hasil Normalisasi</li>
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
                        <th class="text-nowrap">Kriteria</th>
                        <th class="text-nowrap">Alternatif 1</th>
                        <th class="text-nowrap">Alternatif 2</th>
                        <th class="text-nowrap">Alternatif 3</th>
                        <th class="text-nowrap">Alternatif 4</th>
                        <th class="text-nowrap">Alternatif 5</th>
                        <th class="text-nowrap">Alternatif 6</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php  
                        $no = 1;
                        foreach ($hasilNormalisasi as $data) {
                      ?>
                        <tr>
                          <td class="font-weight-bold text-nowrap">K<?= $no; ?></td>
                          <td class="text-nowrap"><?= $data['K1'];?></td>
                          <td class="text-nowrap"><?= $data['K2'];?></td>
                          <td class="text-nowrap"><?= $data['K3'];?></td>
                          <td class="text-nowrap"><?= $data['K4'];?></td>
                          <td class="text-nowrap"><?= $data['K5'];?></td>
                          <td class="text-nowrap"><?= $data['K6'];?></td>
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
                <a href="index.php?page=hasil_preferensi">
                  <button type="button" class="btn btn-primary">Lihat Hasil Preferensi</button>
                </a>  
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