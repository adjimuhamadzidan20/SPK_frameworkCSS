<?php  
	$sqlAlter = "SELECT COUNT(*) FROM data_alternatif";
  $dataAlter = mysqli_query($koneksi, $sqlAlter);
  $isiAlter = mysqli_fetch_row($dataAlter);

  $sqlKrite = "SELECT COUNT(*) FROM data_kriteria";
  $dataKrite = mysqli_query($koneksi, $sqlKrite);
  $isiKrite = mysqli_fetch_row($dataKrite);

  $sqlPen = "SELECT COUNT(*) FROM data_penilaian";
  $dataPen = mysqli_query($koneksi, $sqlPen);
  $isiPen = mysqli_fetch_row($dataPen);

?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">SPK Pemilihan Framework CSS (SAW)</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm col-lg-4">
        <!-- small box -->
        <div class="small-box" style="background-color: #0c2461">
          <div class="inner text-white">
            <h4 class="font-weight-bold"><?php echo $isiAlter[0]; ?> Data</h4>
            <p>Alternatif</p>
          </div>
          <div class="icon">
            <i class="far fa-file-alt"></i>
          </div>
          <a href="index.php?page=data_alternatif" class="small-box-footer text-white">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-sm col-lg-4">
        <!-- small box -->
        <div class="small-box" style="background-color: #0c2461">
          <div class="inner text-white">
            <h4 class="font-weight-bold"><?php echo $isiKrite[0]; ?> Data</h4>
            <p>Kriteria</p>
          </div>
          <div class="icon">
            <i class="far fa-file-alt"></i>
          </div>
          <a href="index.php?page=data_kriteria" class="small-box-footer text-white">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-sm col-lg-4">
        <!-- small box -->
        <div class="small-box" style="background-color: #0c2461">
          <div class="inner text-white">
            <h4 class="font-weight-bold"><?php echo $isiPen[0]; ?> Data</h4>
            <p>Penilaian</p>
          </div>
          <div class="icon">
            <i class="far fa-file-alt"></i>
          </div>
          <a href="index.php?page=data_penilaian" class="small-box-footer text-white">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
</section>