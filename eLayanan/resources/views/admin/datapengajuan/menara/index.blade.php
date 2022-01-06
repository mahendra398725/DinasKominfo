@extends('layouts.useradmin')

@section('tittle', 'Data Pengajuan Menara')

@section('conten')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Pengajuan Menara Telekomunikasi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Penanggung Jawab</th>
                            <th>Lama Sewa</th>
                            <th>Tanggal Kontrak</th>
                            <th>Status Pengajuan</th>
                            <th>Pengajuan</th>
                            <th width="50">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $no = 0;?>
                        @foreach ($data_menara as $key =>$m)
                        <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td width="130">{{ $m->post_perusahaan->nama_perusahaan }}</td>
                            <td width="130">{{ $m->users->nama_user }}</td>
                            <td width="90"><center>{{ $m->lama_sewa }} Tahun</center></td>
                            <td>{{ Carbon\Carbon::parse($m->tgl_kontrak)->translatedFormat('l, d F Y') }}</td>
                            <td width="125"><center><button class="btn btn-sm btn-secondary" disabled>{{ $m->post_status->nama_status }}</button></center></td>
                            <td width="90">
                                <center>
                                    <a class="btn btn-line-link btn-sm">
                                        <span class="icon text-black" data-toggle="tooltip" title="{{ showDateTime($m->created_at, 'l, d F Y') }}">
                                            {{ showDateTime($m->created_at, 'd-m-Y') }}
                                        </span>
                                    </a>
                                </center>
                            </td>
                            <td width="150"> 
                                @if ($m->id_status == '1')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                </center>

                                @elseif($m->id_status == '2')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-success btn-sm btn-icon-split" data-toggle="modal" data-target="#verifikasiModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Verifikasi">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </a>
                                </center>
                                @endif

                                @if($m->id_status == '3')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                    <a href="{{ action('PostMenaraController@exportblankPdf', $m->id)}}" class="btn btn-danger btn-sm btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#rekomendasiModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Rekomendasi">
                                            <i class="fas fa-paper-plane"></i>
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm btn-icon-split" data-toggle="modal" data-target="#tolakModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Ditolak">
                                            <i class="fas fa-times-circle"></i>
                                        </span>
                                    </a>
                                </center>
                                @elseif($m->id_status == '4')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                    <a href="{{ action('PostMenaraController@exportPdf', $m->id)}}" class="btn btn-danger btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                    </a>
                                </center>
                                @elseif($m->id_status == '5')
                                <center>
                                    <a href="" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#showModal{{ $m->id }}">
                                        <span class="icon text-white-50" data-toggle="tooltip" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </a>
                                </center>                                    
                                @endif
                                
                            </td>
                            @include('admin/datapengajuan/menara.show')
                            @include('admin/datapengajuan/menara.verifikasi')
                            @include('admin/datapengajuan/menara.rekomendasi')
                            @include('admin/datapengajuan/menara.tolak')
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