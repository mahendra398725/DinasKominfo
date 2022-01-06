@extends('layouts.useradmin')

@section('tittle', 'Data Desa')

@section('conten')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Desa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Desa</th>
                            <th>Kecamatan</th>
                            <th>Tanggal Input</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no = 0;?>
                        @foreach ($data_post as $key =>$x)
                        <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $x->nama_desa }}</td>
                            <td>{{ $x->post_category->nama_kecamatan }}</td>
                            <td>{{ $x->created_at }}</td>
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