<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?= $judul ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul ?></li>
          </ol>
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
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <p>Jumlah Barang</p>
              <h3><?= $jumlahBarang['stok_tersedia'] ? $jumlahBarang['stok_tersedia'] : '0' ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <p>Jumlah Petugas</p>
              <h3><?= $jumlahPetugas ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <p>Jumlah Peminjaman</p>
              <h3><?= $jumlahPeminjaman ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <p>Jumlah Pengembalian</p>
              <h3><?= $jumlahPengembalian ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Dipinjamkan Berdasarkan Jabatan</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pinjam-jabatan" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Karyawan Lapangan
              </span>
              <span>
                <i class="fas fa-square" style="color:#f3545d"></i> Karyawan Kantor
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Data Tidak Dipinjamkan Berdasarkan Jabatan</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="tidakpinjam-jabatan" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Karyawan Lapangan
              </span>
              <span>
                <i class="fas fa-square" style="color:#f3545d"></i> Karyawan Kantor
              </span>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>

      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Dipinjamkan Berdasarkan Status</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pinjam-status" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Tepat Waktu
              </span>
              <span>
                <i class="fas fa-square" style="color:#f3545d"></i> Terlambat
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Data Tidak Dipinjamkan Berdasarkan Status</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="tidakpinjam-status" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Tepat Waktu
              </span>
              <span>
                <i class="fas fa-square" style="color:#f3545d"></i> Terlambat
              </span>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>

      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Dipinjamkan Berdasarkan Sanksi</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pinjam-sanksi" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Tidak Mendapat Sanksi
              </span>
              <span>
                <i class="fas fa-square" style="color:#f3545d"></i> Mendapat Sanksi
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Data Tidak Dipinjamkan Berdasarkan Sanksi</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="tidakpinjam-sanksi" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Tidak Mendapat Sanksi
              </span>
              <span>
                <i class="fas fa-square" style="color:#f3545d"></i> Mendapat Sanksi
              </span>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>

      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Dipinjamkan Berdasarkan Kondisi Barang</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pinjam-kondisi" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <span class="mr-2">
                <i class="fas fa-square" style="color:#177dff"></i> Baik
              </span>
              <span class="mr-2">
                <i class="fas fa-square" style="color:#f7b707"></i> Rusak Ringan
              </span>
              <span class="mr-2">
                <i class="fas fa-square" style="color:#f3545d"></i> Rusak Berat
              </span>
              <span>
                <i class="fas fa-square" style="color:#f76f07"></i> Hilang
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Data Tidak Dipinjamkan Berdasarkan Kondisi Barang</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="tidakpinjam-kondisi" height="200" style="display: block; width: 444px; height: 200px;" width="444" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <div class="d-flex flex-row justify-content-center mb-3">
                <span class="mr-2">
                  <i class="fas fa-square" style="color:#177dff"></i> Baik
                </span>
                <span class="mr-2">
                  <i class="fas fa-square" style="color:#f7b707"></i> Rusak Ringan
                </span>
                <span class="mr-2">
                  <i class="fas fa-square" style="color:#f3545d"></i> Rusak Berat
                </span>
                <span>
                  <i class="fas fa-square" style="color:#f76f07"></i> Hilang
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>

      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Kondisi Barang</h5>
            </div>
            <div class="card-body">
              <table id="tabel" class="table table-hover table-bordered mt-3">
                <thead>
                  <tr class="text-center">
                    <td>NO</td>
                    <td>NAMA</td>
                    <td>KODE</td>
                    <td>STATUS</td>
                    <td>KONDISI BARANG</td>
                  </tr>
                </thead>
                <tbody id="data-barang" class="text-center">

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url('adminlte/') ?>plugins/chart.js/Chart.min.js"></script>
<script>
  var Controller = (function() {
    var base_url = "<?= base_url() ?>";
    var table;

    var setupEventListener = function() {
      tampilTabel();
      tampilGrafikPinjamanJabatan();
      tampilGrafikTidakPinjamanJabatan();
      tampilGrafikPinjamanStatus();
      tampilGrafikTidakPinjamanStatus();
      tampilGrafikPinjamanSanksi();
      tampilGrafikTidakPinjamanSanksi();
      tampilGrafikPinjamanKondisi();
      tampilGrafikTidakPinjamanKondisi();
    }

    function tampilGrafikPinjamanJabatan() {
      var ctx = document.getElementById('pinjam-jabatan').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Karyawan Kantor", "Karyawan Lapangan"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#f3545d',
              '#177dff',
            ],
            pointBackgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            legendColor: [
              '#f3545d',
              '#177dff',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_dipinjamkan_kk ?>, <?= $jumlah_dipinjamkan_kl ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikTidakPinjamanJabatan() {
      var ctx = document.getElementById('tidakpinjam-jabatan').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Karyawan Kantor", "Karyawan Lapangan"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#f3545d',
              '#177dff',
            ],
            pointBackgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            legendColor: [
              '#f3545d',
              '#177dff',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_tidak_dipinjamkan_kk ?>, <?= $jumlah_tidak_dipinjamkan_kl ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikPinjamanStatus() {
      var ctx = document.getElementById('pinjam-status').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Terlambat", "Tepat Waktu"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#f3545d',
              '#177dff',
            ],
            pointBackgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            legendColor: [
              '#f3545d',
              '#177dff',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_dipinjamkan_terlambat ?>, <?= $jumlah_dipinjamkan_tidak_terlambat ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikTidakPinjamanStatus() {
      var ctx = document.getElementById('tidakpinjam-status').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Terlambat", "Tepat Waktu"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#f3545d',
              '#177dff',
            ],
            pointBackgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            legendColor: [
              '#f3545d',
              '#177dff',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_tidak_dipinjamkan_terlambat ?>, <?= $jumlah_tidak_dipinjamkan_tidak_terlambat ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikPinjamanSanksi() {
      var ctx = document.getElementById('pinjam-sanksi').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Mendapat Sanksi", "Tidak Mendapat Sanksi"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#f3545d',
              '#177dff',
            ],
            pointBackgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            legendColor: [
              '#f3545d',
              '#177dff',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_dipinjamkan_sanksi ?>, <?= $jumlah_dipinjamkan_tidak_sanksi ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikTidakPinjamanSanksi() {
      var ctx = document.getElementById('tidakpinjam-sanksi').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Mendapat Sanksi", "Tidak Mendapat Sanksi"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#f3545d',
              '#177dff',
            ],
            pointBackgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#f3545d',
              '#177dff',
            ],
            legendColor: [
              '#f3545d',
              '#177dff',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_tidak_dipinjamkan_sanksi ?>, <?= $jumlah_tidak_dipinjamkan_tidak_sanksi ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikPinjamanKondisi() {
      var ctx = document.getElementById('pinjam-kondisi').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Baik", "Rusak Berat", "Rusak Ringan", "Hilang"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            pointBackgroundColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            legendColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_dipinjamkan_kondisi_barang_baik ?>, <?= $jumlah_dipinjamkan_kondisi_barang_rusak_berat ?>, <?= $jumlah_dipinjamkan_kondisi_barang_rusak_ringan ?>, <?= $jumlah_dipinjamkan_kondisi_barang_rusak_berat ?>, <?= $jumlah_dipinjamkan_kondisi_barang_hilang ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilGrafikTidakPinjamanKondisi() {
      var ctx = document.getElementById('tidakpinjam-kondisi').getContext('2d');
      var statisticsChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Baik", "Rusak Berat", "Rusak Ringan", "Hilang"],
          datasets: [{
            label: "Subscribers",
            borderColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            pointBackgroundColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            pointRadius: 0,
            backgroundColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            legendColor: [
              '#177dff',
              '#f3545d',
              '#f7b707',
              '#f76f07',
            ],
            fill: true,
            borderWidth: 2,
            data: [<?= $jumlah_tidak_dipinjamkan_kondisi_barang_baik ?>, <?= $jumlah_tidak_dipinjamkan_kondisi_barang_rusak_berat ?>, <?= $jumlah_tidak_dipinjamkan_kondisi_barang_rusak_ringan ?>, <?= $jumlah_tidak_dipinjamkan_kondisi_barang_hilang ?>]
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          },
          layout: {
            padding: {
              left: 5,
              right: 5,
              top: 15,
              bottom: 15
            }
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
          }
        }
      });
    }

    function tampilTabel() {
      $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
          "iStart": oSettings._iDisplayStart,
          "iEnd": oSettings.fnDisplayEnd(),
          "iLength": oSettings._iDisplayLength,
          "iTotal": oSettings.fnRecordsTotal(),
          "iFilteredTotal": oSettings.fnRecordsDisplay(),
          "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
          "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
      };

      table = $("#tabel").dataTable({
        initComplete: function() {
          var api = this.api();
          $('#tabel input')
            .off('.DT')
            .on('input.DT', function() {
              api.search(this.value).draw();
            });
        },
        oLanguage: {
          sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {
          "url": "<?php echo base_url() . 'Dashboard/getBarang' ?>",
          "type": "POST"
        },
        columns: [{
            "data": "id",
            "orderable": false,
            "searchable": false
          },
          {
            "data": "nama_barang"
          },
          {
            "data": "kode_barang"
          },
          {
            "data": "status_barang"
          },
          {
            "data": "kondisi_barang"
          },
        ],
        order: [
          [1, 'asc']
        ],
        rowCallback: function(row, data, iDisplayIndex) {
          var info = this.fnPagingInfo();
          var page = info.iPage;
          var length = info.iLength;
          var index = page * length + (iDisplayIndex + 1)
          $('td:eq(0)', row).html(index);
        }

      });
    }
    return {
      init: function() {
        setupEventListener();
      }
    }
  })();
  Controller.init();
</script>