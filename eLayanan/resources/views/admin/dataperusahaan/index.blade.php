@extends('layouts.useradmin')

@section('tittle', 'Data Perusahaan')

@section('conten')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Perusahaan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambahModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Menara</span>
                    </button>

                    <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambah1Modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Fiber</span>
                    </button>

                    <!-- Tambah Data -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="tambahModalLabel">Tambah Data Perusahaan Menara</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ action('PostPerusahaanController@store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                          <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                                          <input type="text" name="kategori_perusahaan" class="form-control" value="Menara Telekomunikasi" hidden>
                                          <input type="text" name="nama_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="alamat_perusahaan" class="col-form-label">Alamat Perusahaan</label>
                                          <input type="text" name="alamat_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="telpon_perusahaan" class="col-form-label">Telpon Perusahaan</label>
                                          <input type="text" name="telpon_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="email_perusahaan" class="col-form-label">Email Perusahaan</label>
                                          <input type="email" name="email_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4"><label for="">Scan Akta Perusahaan</label></div>
                                                <div class="col-md-4"><label for="">Scan NIB</label></div>
                                                <div class="col-md-4"><label for="">Scan NPWP</label></div>
                                                <div class="col-md-4"><input class="form-control" name="file_akta" type="file" required></div>
                                                <div class="col-md-4"><input class="form-control" name="file_nib" type="file" required></div>
                                                <div class="col-md-4"><input class="form-control" name="file_npwp" type="file" required></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2"><input name="no_akta" type="text" class="form-control" placeholder="Nomor Akta " required></div>
                                                <div class="col-md-2"><input name="tgl_akta" type="text" class="date form-control" placeholder="Tanggal Akta" required></div>
                                                <div class="col-md-2"><input name="no_nib" type="text" class="form-control" placeholder="Nomor NIB" required></div>
                                                <div class="col-md-2"><input name="tgl_nib" type="text" class="date form-control" placeholder="Tanggal NIB" required></div>
                                                <div class="col-md-4"><input name="no_npwp" type="text" class="form-control" placeholder="Nomor NPWP" required></div>
                                                
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="tambah1Modal" tabindex="-1" role="dialog" aria-labelledby="tambah1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="tambah1ModalLabel">Tambah Data Perusahaan Fiber</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ action('PostPerusahaanController@save') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                          <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                                          <input type="text" name="kategori_perusahaan" class="form-control" value="Fiber Optik" hidden>
                                          <input type="text" name="nama_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="alamat_perusahaan" class="col-form-label">Alamat Perusahaan</label>
                                          <input type="text" name="alamat_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="telpon_perusahaan" class="col-form-label">Telpon Perusahaan</label>
                                          <input type="text" name="telpon_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="email_perusahaan" class="col-form-label">Email Perusahaan</label>
                                          <input type="email" name="email_perusahaan" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6"><label for="">Scan Akta Perusahaan</label></div>
                                                <div class="col-md-6"><label for="">Scan NIB</label></div>
                                                <div class="col-md-6"><input class="form-control" name="file_akta" type="file" required></div>
                                                <div class="col-md-6"><input class="form-control" name="file_nib" type="file" required></div>
                                            </div>
                                            
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><input name="no_akta" type="text" class="form-control" placeholder="Nomor Akta " required></div>
                                                <div class="col-md-3"><input name="tgl_akta" type="text" class="date form-control" placeholder="Tanggal Akta" required></div>
                                                <div class="col-md-3"><input name="no_nib" type="text" class="form-control" placeholder="Nomor NIB" required></div>
                                                <div class="col-md-3"><input name="tgl_nib" type="text" class="date form-control" placeholder="Tanggal NIB" required></div>
                                                <div class="col-md-4"><input name="no_npwp" type="text" class="form-control" hidden></div>
                                                
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- /.tambah -->                    
                </div>
                <!-- .panel-body -->
            </div>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Alamat Perusahaan</th>
                            <th>No Telepon Perasahaan</th>
                            <th>Email Perusahaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no = 0;?>
                        @foreach ($data_postperusahaan as $key =>$x)
                        <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $x->nama_perusahaan }}</td>
                            <td>{{ $x->alamat_perusahaan }}</td>
                            <td>{{ $x->telpon_perusahaan }}</td>
                            <td>{{ $x->email_perusahaan }}</td>
                            <td>
                                <center>
                                    <a href="" class="btn btn-success btn-circle" data-toggle="modal" data-target="#showModal{{ $x->id }}">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="" class="btn btn-info btn-circle" data-toggle="modal" data-target="#ubahModal{{ $x->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a  class="btn btn-danger btn-circle" data-toggle="modal" data-target="#hapusModal{{ $x->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </center>
                            </td>
                            @include('admin.dataperusahaan.show')
                            @include('admin.dataperusahaan.edit')
                            @include('admin.dataperusahaan.delete')
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script> 

@endsection