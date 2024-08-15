<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <?php
            $tanggal = date('Y-m-d');
            $pemasukan = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan' and transaksi_tanggal='$tanggal'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
            <p>Pemasukan Hari Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <?php
            $bulan = date('m');
            $pemasukan = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan' and month(transaksi_tanggal)='$bulan'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
            <p>Pemasukan Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-orange">
          <div class="inner">
            <?php
            $tahun = date('Y');
            $pemasukan = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan' and year(transaksi_tanggal)='$tahun'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
            <p>Pemasukan Tahun Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-black">
          <div class="inner">
            <?php
            $pemasukan = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
            <p>Seluruh Pemasukan</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            $tanggal = date('Y-m-d');
            $pengeluaran = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pengeluaran FROM transaksi WHERE transaksi_jenis='pengeluaran' and transaksi_tanggal='$tanggal'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>

            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pengeluaran']) . " ,-" ?></h4>
            <p>Pengeluaran Hari Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            $bulan = date('m');
            $pengeluaran = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pengeluaran FROM transaksi WHERE transaksi_jenis='pengeluaran' and month(transaksi_tanggal)='$bulan'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>
            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pengeluaran']) . " ,-" ?></h4>
            <p>Pengeluaran Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            $tahun = date('Y');
            $pengeluaran = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pengeluaran FROM transaksi WHERE transaksi_jenis='pengeluaran' and year(transaksi_tanggal)='$tahun'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>

            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pengeluaran']) . " ,-" ?></h4>
            <p>Pengeluaran Tahun Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-black">
          <div class="inner">
            <?php
            $pengeluaran = mysqli_query($koneksi, "SELECT COALESCE(SUM(transaksi_nominal), 0) as total_pengeluaran FROM transaksi WHERE transaksi_jenis='pengeluaran'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>
            <h4 style="font-weight: bolder"><?= "Rp. " . number_format($p['total_pengeluaran']) . " ,-" ?></h4>
            <p>Seluruh Pengeluaran</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
    </div>
    </section>
    </div>
  </section>
</div>
<?php include 'footer.php'; ?>