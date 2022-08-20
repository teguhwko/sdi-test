<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Laporan Pengembalian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pengembalian</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Laporan Pengembalian</h5>
                        </div>
                        <div class="card-body">
                            <form id="form">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            Bulan
                                            <select name="bulan" id="bulan" class="form-control">
                                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                                    <option value="<?= $i ?>" <?= $this->input->get('bulan') == $i ? 'selected' : '' ?>><?= getNamaBulan($i) ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            Tahun
                                            <select name="tahun" id="tahun" class="form-control">
                                                <?php for ($i = 2017; $i <= 2070; $i++) { ?>
                                                    <option value="<?= $i ?>" <?= $this->input->get('tahun') == $i ? 'selected' : '' ?>><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <input class="btn btn-primary btn-md btn-block" value="Filter" id="filter" type="button">
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <input class="btn btn-success btn-md btn-block" value="Cetak" id="cetak" type="button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table id="tabel" class="table table-hover table-bordered mt-3">
                                <thead>
                                    <tr class="text-center">
                                        <td>NO</td>
                                        <td>KODE PENGEMBALIAN</td>
                                        <td>KODE PEMINJAMAN</td>
                                        <td>NAMA KARYAWAN</td>
                                        <td>TANGGAL PINJAM</td>
                                        <td>TANGGAL KEMBALI</td>
                                        <td>SANKSI</td>
                                        <td>KETERANGAN</td>
                                    </tr>
                                </thead>
                                <tbody class="text-center">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<script>
    var UIController = (function() {
        var DOMString = {
            'data': '#data',
            'filter': '#filter',
            'cetak': '#cetak',
        };
        return {
            getDOM: function() {
                return DOMString;
            },
            setValue: function(dom, value) {
                $(dom).val(value);
            }
        }
    })();

    var Controller = (function(uiCtr) {
        var base_url = "<?= base_url() ?>";
        var dom;
        var table;
        <?php
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        if ($bulan && $tahun) { ?>
            var tahun = '<?= $tahun ?>';
            var bulan = '<?= $bulan ?>';
            tampilTabel(bulan, tahun);
        <?php  }
        ?>
        var setupEventListener = function() {
            dom = uiCtr.getDOM();

            $(dom.filter).on('click', function() {
                var jumlahBaris = $('#tabel').find('tr').length;
                if (jumlahBaris > 1) {
                    bersihTabel();
                }
                var tahun = $('#tahun').val();
                var bulan = $('#bulan').val();

                tampilTabel(bulan, tahun);
            })

            $(dom.cetak).on('click', function() {
                var tahun = $('#tahun').val();
                var bulan = $('#bulan').val();
                url = base_url + 'LaporanPengembalian/cetakLaporan/' + bulan + '/' + tahun;
                window.open(url, '_blank');
            });
        }

        function bersihTabel() {
            table.fnClearTable();
            table.fnDraw();
            table.fnDestroy();
        }

        function tampilTabel(bulan, tahun) {
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
                    "url": "<?php echo base_url() . 'LaporanPengembalian/getPengembalian' ?>",
                    "type": "POST",
                    "data": {
                        'bulan': bulan,
                        'tahun': tahun
                    },
                    'dataType': 'json',
                    "type": "POST"
                },
                columns: [{
                        "data": "kode_pengembalian",
                        "orderable": false,
                        "searchable": false
                    },
                    {
                        "data": "kode_pengembalian"
                    },
                    {
                        "data": "kode_peminjaman"
                    },
                    {
                        "data": "nama_karyawan"
                    },
                    {
                        "data": "tgl_pinjam"
                    },
                    {
                        "data": "tgl_kembali"
                    },
                    {
                        "data": "sanksi"
                    },
                    {
                        "data": "keterangan"
                    },
                ],
                order: [
                    [5, 'desc']
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
    })(UIController);
    Controller.init();
</script>