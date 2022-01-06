@extends('layouts.useradmin')

@section('tittle', 'Data Pengajuan Fiber')

@section('conten')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Pengajuan Fiber Optik</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Penanggung Jawab</th>
                            <th>Nama Jaringan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status Pengajuan</th>
                            <th width="50">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no = 0;?>
                        @foreach ($data_fiber as $key =>$f)
                        <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $f->post_perusahaan->nama_perusahaan }}</td>
                            <td>{{ $f->users->nama_user }}</td>
                            <td>{{ $f->nama_jaringan }}</td>
                            <td>{{ showDateTime($f->created_at, 'l, d F Y') }}</td>
                            <td><center><button class="btn btn-sm btn-secondary" disabled>{{ $f->post_status->nama_status }}</button></center></td>
                            <td width="150"> 
                                @if ($f->id_status == '1')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                </center>

                                @elseif($f->id_status == '2')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-success btn-sm btn-icon-split" data-toggle="modal" data-target="#verifikasiModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Verifikasi">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </a>
                                </center>
                                @endif

                                @if($f->id_status == '3')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                    <a href="{{ action('PostFiberController@exportrPdf', $f->id)}}" class="btn btn-danger btn-sm btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#rekomendasiModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Rekomendasi">
                                            <i class="fas fa-paper-plane"></i>
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal" data-target="#tolakModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Ditolak">
                                            <i class="fas fa-times-circle"></i>
                                        </span>
                                    </a>
                                </center>
                                @elseif($f->id_status == '4')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                    <a href="{{ action('PostFiberController@exportPdf', $f->id)}}" class="btn btn-danger btn-sm btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                    </a>
                                </center>
                                @elseif($f->id_status == '5')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $f->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                </center>                                    
                                @endif
                                
                            </td>
                            @include('admin/datapengajuan/fiber.show')
                            @include('admin/datapengajuan/fiber.verifikasi')
                            @include('admin/datapengajuan/fiber.rekomendasi')
                            @include('admin/datapengajuan/fiber.tolak')
                        </tr>

                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</section>

@endsection