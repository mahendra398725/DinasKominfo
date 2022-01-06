@extends('layouts.useradmin')

@section('tittle', 'Data Beranda User')

@section('conten')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Halaman</h1>

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
                        <span class="text">Tambah</span>
                    </button>

                    <!-- Tambah Data -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="tambahModalLabel">Tambah Data Tampilan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ action('PostPageController@store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="nama_halaman" class="col-form-label">Nama Halaman</label>
                                            <input type="text" name="nama_halaman" class="form-control" >
                                          </div>
                                        <div class="form-group">
                                          <label for="judul_halaman" class="col-form-label">Judul</label>
                                          <input type="text" name="judul_halaman" class="form-control" >
                                        </div>
                    
                                        <div class="form-group">
                                          <label for="keterangan" class="col-form-label">Keterangan</label>
                                          <textarea class="form-control" name="keterangan" ></textarea>
                                        </div>
                    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6"><label for="">Gambar</label></div>
                                                <div class="col-md-6"><label for="">Berkas</label></div>
                                                <div class="col-md-6"><input class="form-control" name="gambar" type="file" required></div>
                                                <div class="col-md-6"><input class="form-control" name="berkas" type="file" required></div>
                                            </div>
                                        </div>

                                        <div class="form-grup">
                                            <label class="col-form-label">Status</label>
                                            <select id="status" class="form-control" name="status" >
                                                <option value="">-- Pilih Status --</option>
                                                    <option value="AKTIF">Tampilkan Halaman</option>
                                                    <option value="NONAKTIF">Tidak Menampilkan Halaman</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Tanggal Upload</label>
                                            <input type="datetime-local" name="tgl_upload" class="form-control" value="date('Y-m-d h:i:s')">
                                        </div> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Ajukan</button>
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
                            <th>Judul Slide</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Tanggal Upload</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no = 0;?>
                        @foreach ($pages as $key =>$p)
                        <?php $no++ ;?>    
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $p->judul_halaman }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>{{ $p->gambar }}</td>
                            <td>{{ $p->status }}</td>
                            <td width="110">{{ Carbon\Carbon::parse($p->tgl_upload)->translatedFormat('d M Y') }}</td>
                            <td width="90"> 
                                <center>
                                    <a href="" class="btn btn-info btn-circle" data-toggle="modal" data-target="#ubahModal{{ $p->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a type="submit" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#hapusModal{{ $p->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </center>
                            </td>
                            @include('admin.datapage.delete')
                            @include('admin.datapage.edit')
                        </tr>

                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection