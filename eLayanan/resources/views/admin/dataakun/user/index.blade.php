@extends('layouts.useradmin')

@section('tittle', 'Data User')

@section('conten')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Akun / User</h1>

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
                    <a href="{{ action('UsersController@exportxlsx')}}" class="btn btn-success btn-icon-split">
                        <span class="text">
                            <i class="fas fa-file-excel"></i>
                        </span>
                    </a>
                    <a href="{{ action('UsersController@exportPdf')}}" class="btn btn-danger btn-icon-split">
                        <span class="text">
                            <i class="fas fa-file-pdf"></i>
                        </span>
                    </a>
                    <a href="{{ url('/user/userpdf')}}" target="_blank" rel="noopener" class="btn btn-danger btn-icon-split">
                        <span class="text">
                            <i class="fas fa-file-pdf"></i>
                        </span>
                    </a>

                    <!-- Tambah Data -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="tambahModalLabel">Tambah Data User</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ action('UsersController@store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                          <label for="nama_user" class="col-form-label">Nama User</label>
                                          <input type="text" name="nama_user" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="nip_k_user" class="col-form-label">NIK</label>
                                          <input type="text" name="nip_k_user" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="alamat_user" class="col-form-label">Alamat</label>
                                          <input type="text" name="alamat_user" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="no_hp" class="col-form-label">No HP</label>
                                          <input type="text" name="no_hp" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-grup">
                                            <label class="col-form-label">Role</label>
                                            <select id="id_post_role" class="form-control" name="id_post_role" >
                                                <option value="">-- Pilih Role --</option>
                                                @foreach ($role as $key => $c)
                                                    <option value="{{ $c->id }}">{{ $c->nama_role }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Scan KTP</label>
                                            <input name="file_ktp" type="file" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="email" class="col-form-label">Email</label>
                                          <input type="email" name="email" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="password" class="col-form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
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
                            <th>Nama User</th>
                            <th>NIP / NIK</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no = 0;?>
                        @foreach ($data_users as $key =>$x)
                        <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $x->nama_user }}</td>
                            <td>{{ $x->nip_k_user }}</td>
                            <td>{{ $x->alamat_user }}</td>
                            <td>{{ $x->no_hp }}</td>
                            <td>{{ $x->post_role->nama_role }}</td>
                            <td>
                                <center>
                                    <a href="" class="btn btn-info btn-circle" data-toggle="modal" data-target="#ubahModal{{ $x->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a type="submit" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#hapusModal{{ $x->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </center>
                            </td>
                            @include('admin.dataakun.user.delete')
                            @include('admin.dataakun.user.edit')
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