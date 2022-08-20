<script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h5 class="m-0">Data User</h5>
              </div>
              <div class="card-body">
                <a href="<?=base_url('User/tambah')?>" class="btn btn-primary">TAMBAH</a><br><br>
                <table id="tabel" class="table table-hover table-bordered mt-3">
                  <thead>
                    <tr class="text-center">
                      <td>NO</td>
                      <td>USERNAME</td>
                      <td>NAMA</td>
                      <td>JENIS AKSES</td>
                      <td>JABATAN</td>
                      <td>AKSI</td>
                    </tr>
                  </thead>
                  <tbody id="data-jabatan" class="text-center">
                
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
  <!-- /.content-wrapper -->
  <?=$this->session->flashdata('pesan')?$this->session->flashdata('pesan'):''?>
  <script>
    var Controller = (function (){
      var base_url = "<?=base_url()?>";
      var table;
      var setupEventListener = function(){
        tampilTabel();
        $(table).on('click','.delete',function(e){
          e.preventDefault();
          const nama = $(this).data('nama');
          Swal.fire({
              title: 'Apakah anda yakin?',
              text: "Anda ingin menghapus data "+nama,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Hapus!',
              cancelButtonText: 'Jangan'
          }).then((result) => {
              if (result.value) {
                const kode = $(this).data('kode');
                window.location = "<?=base_url('User/hapus/')?>"+kode;
              }
          });
        });
      }

      function tampilTabel(){
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
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
              ajax: {"url": "<?php echo base_url().'User/getUser'?>", "type": "POST"},
                columns: [                     
                  {
                    "data": "username",
                    "orderable": false,
                    "searchable": false
                  },
                  {"data":"username"},
                  {"data":"nama"},
                  {"data":"role"},
                  {"data":"nama_jabatan"},
                  {"data": "view","orderable": false,"searchable": false}         
                ],
                order: [[1, 'asc']],
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
          init:function(){
            setupEventListener();
          }
        }
    })();
    Controller.init();
  </script>