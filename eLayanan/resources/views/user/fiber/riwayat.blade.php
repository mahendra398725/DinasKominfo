@extends('layouts.userpublic')

@section('tittle', 'Riwayat')
@section('content')

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section wb">
                    <div class="container">
                        <div class="section-title row text-center">
                            <div class="col-md-8 offset-md-2">
                                <h3>Pengajuan Menara Telekomunikasi</h3>
                            </div>
                        </div><!-- end title -->
                        <div class="mb-2 text-center">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#semua">Semua</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#status1">Pengajuan Baru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#status2">Pengajuan Diproses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#status4">Pengajuan Selesai</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#status5">Pengajuan Ditolak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="tab-content">
                        <div id="semua" class="container tab-pane active"><br>
                            @foreach ($data_fiber1 as $key =>$f)
                            @if ($f->users->id == Auth::user()->id)
                            <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                <table class="table table-bordered rounded bg-surat">
                                    <thead>
                                        <tr class="bg-blue">
                                            <th scope="col" class="pl-5 text-center">
                                                <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" class="pl-5 pr-3">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                    </div>
                                                    <div class="ml-auto p-2">
                                                        <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td class="pl-5">
                                                <table class="table table-borderles">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                            <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                            <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                            <td>: {{ $f->users->nama_user }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                            <td>: {{ $f->alamat_fo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                            <td>: {{ $f->tipe }} </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="text-right mr-5 mt-4">
                                                    
                                                    <a href="" data-toggle="modal" data-target="#ajukan{{ $f->id }}" class="btn btn-info">
                                                        <span><i class="fa fa-send-o"></i></span>
                                                        <span>Ajukan</span>
                                                    </a>
                                                    <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                        <span><i class="fa fa-eye"></i></span>
                                                        <span>Detail</span>
                                                    </a> 
                                                    @include('user/fiber.ajukan')
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif
                            @endforeach

                            @foreach ($data_fiber2 as $key =>$f)
                            @if ($f->users->id == Auth::user()->id)
                            <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                <table class="table table-bordered rounded bg-surat">
                                    <thead>
                                        <tr class="bg-blue">
                                            <th scope="col" class="pl-5 text-center">
                                                <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" class="pl-5 pr-3">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                    </div>
                                                    <div class="ml-auto p-2">
                                                        <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td class="pl-5">
                                                <table class="table table-borderles">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                            <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                            <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                            <td>: {{ $f->users->nama_user }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                            <td>: {{ $f->alamat_fo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                            <td>: {{ $f->tipe }} </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="text-right mr-5 mt-4">
                                                    <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                                <span><i class="fa fa-eye"></i></span>
                                                                <span>Detail</span>
                                                            </a> 
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif
                            @endforeach

                            @foreach ($data_fiber3 as $key =>$f)
                            @if ($f->users->id == Auth::user()->id)
                            <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                <table class="table table-bordered rounded bg-surat">
                                    <thead>
                                        <tr class="bg-blue">
                                            <th scope="col" class="pl-5 text-center">
                                                <h5 class="text-secondary text-italic" >Pengajuan Diproses : {{ $f->post_status->keterangan }}</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" class="pl-5 pr-3">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                    </div>
                                                    <div class="ml-auto p-2">
                                                        <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td class="pl-5">
                                                <table class="table table-borderles">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                            <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                            <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                            <td>: {{ $f->users->nama_user }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                            <td>: {{ $f->alamat_fo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                            <td>: {{ $f->tipe }} </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="text-right mr-5 mt-4">
                                                    <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                                <span><i class="fa fa-eye"></i></span>
                                                                <span>Detail</span>
                                                            </a> 
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif
                            @endforeach

                            @foreach ($data_fiber4 as $key =>$f)
                            @if ($f->users->id == Auth::user()->id)
                            <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                <table class="table table-bordered rounded bg-surat">
                                    <thead>
                                        <tr class="bg-blue">
                                            <th scope="col" class="pl-5 text-center">
                                                <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" class="pl-5 pr-3">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                    </div>
                                                    <div class="ml-auto p-2">
                                                        <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td class="pl-5">
                                                <table class="table table-borderles">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                            <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                            <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                            <td>: {{ $f->users->nama_user }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                            <td>: {{ $f->alamat_fo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                            <td>: {{ $f->tipe }} </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="text-right mr-5 mt-4">
                                                    <a href="{{ url('/fiber/printsurat', $f->id)}}" target="_blank" rel="noopener" class="btn btn-danger">
                                                        <span><i class="fa fa-print"></i></span>
                                                        <span>Cetak</span>
                                                    </a>
                                                    <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                        <span><i class="fa fa-eye"></i></span>
                                                        <span>Detail</span>
                                                    </a> 
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif
                            @endforeach

                            @foreach ($data_fiber5 as $key =>$f)
                            @if ($f->users->id == Auth::user()->id)
                            <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                <table class="table table-bordered rounded bg-surat">
                                    <thead>
                                        <tr class="bg-blue">
                                            <th scope="col" class="pl-5 text-center">
                                                <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" class="pl-5 pr-3">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                    </div>
                                                    <div class="ml-auto p-2">
                                                        <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td class="pl-5">
                                                <table class="table table-borderles">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                            <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                            <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                            <td>: {{ $f->users->nama_user }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                            <td>: {{ $f->alamat_fo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                            <td>: {{ $f->tipe }} </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="text-right mr-5 mt-4">
                                                    <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                        <span><i class="fa fa-eye"></i></span>
                                                        <span>Detail</span>
                                                    </a> 
                                                    <a href="{{ url('/fiber/suratditolak', $f->id)}}" target="_blank" rel="noopener" class="btn btn-danger">
                                                        <span><i class="fa fa-print"></i></span>
                                                        <span>Cetak</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    
                        <div id="status1" class="container tab-pane fade"><br>
                            @foreach ($data_fiber1 as $key =>$f)
                            @if ($f->users->id == Auth::user()->id)
                            <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                <table class="table table-bordered rounded bg-surat">
                                    <thead>
                                        <tr class="bg-blue">
                                            <th scope="col" class="pl-5 text-center">
                                                <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" class="pl-5 pr-3">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                    </div>
                                                    <div class="ml-auto p-2">
                                                        <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td class="pl-5">
                                                <table class="table table-borderles">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                            <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                            <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                            <td>: {{ $f->users->nama_user }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                            <td>: {{ $f->alamat_fo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                            <td>: {{ $f->tipe }} </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="text-right mr-5 mt-4">
                                                    <a href="{{ action('FiberController@exportPdf', $f->id)}}" class="btn btn-secondary">
                                                        <span><i class="fa fa-edit"></i></span>
                                                        <span>Ubah</span>
                                                    </a>
                                                    <a href="" data-toggle="modal" data-target="#aajukan{{ $f->id }}" class="btn btn-info">
                                                        <span><i class="fa fa-send-o"></i></span>
                                                        <span>Ajukan</span>
                                                    </a>
                                                    <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                        <span><i class="fa fa-eye"></i></span>
                                                        <span>Detail</span>
                                                    </a> 
                                                    @include('user/fiber.ajukan1')
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <div id="status2" class="container tab-pane fade"><br>
                            @foreach ($data_fiber2 as $key =>$f)
                                @if ($f->users->id == Auth::user()->id)    
                                <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                    <table class="table table-bordered rounded bg-surat">
                                        <thead>
                                            <tr class="bg-blue">
                                                <th scope="col" class="pl-5 text-center">
                                                    <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="pl-5 pr-3">
                                                    <div class="d-flex">
                                                        <div class="p-2">
                                                            <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                        </div>
                                                        <div class="ml-auto p-2">
                                                            <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td class="pl-5">
                                                    <table class="table table-borderles">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                                <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                                <td>: {{ $f->users->nama_user }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                                <td>: {{ $f->alamat_fo }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                                <td>: {{ $f->tipe }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                                <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tinggi Menara</td>
                                                                <td>: {{ $f->tinggi_menara }} Meter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right mr-5 mt-4">
                                                        <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                                <span><i class="fa fa-eye"></i></span>
                                                                <span>Detail</span>
                                                            </a> 
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                                            
                            @endforeach
                            
                            @foreach ($data_fiber3 as $key =>$f)
                                @if ($f->users->id == Auth::user()->id)    
                                <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                    <table class="table table-bordered rounded bg-surat">
                                        <thead>
                                            <tr class="bg-blue">
                                                <th scope="col" class="pl-5 text-center">
                                                    <h5 class="text-secondary text-italic" >Pengajuan Diproses : {{ $f->post_status->keterangan }}</h5>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="pl-5 pr-3">
                                                    <div class="d-flex">
                                                        <div class="p-2">
                                                            <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                        </div>
                                                        <div class="ml-auto p-2">
                                                            <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td class="pl-5">
                                                    <table class="table table-borderles">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                                <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                                <td>: {{ $f->users->nama_user }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                                <td>: {{ $f->alamat_fo }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                                <td>: {{ $f->tipe }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                                <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tinggi Menara</td>
                                                                <td>: {{ $f->tinggi_menara }} Meter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right mr-5 mt-4">
                                                        <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                                <span><i class="fa fa-eye"></i></span>
                                                                <span>Detail</span>
                                                            </a> 
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                                            
                            @endforeach
                        </div>

                        <div id="status4" class="container tab-pane fade"><br>
                            @foreach ($data_fiber4 as $key =>$f)
                                @if ($f->users->id == Auth::user()->id)    
                                <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                    <table class="table table-bordered rounded bg-surat">
                                        <thead>
                                            <tr class="bg-blue">
                                                <th scope="col" class="pl-5 text-center">
                                                    <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="pl-5 pr-3">
                                                    <div class="d-flex">
                                                        <div class="p-2">
                                                            <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                        </div>
                                                        <div class="ml-auto p-2">
                                                            <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td class="pl-5">
                                                    <table class="table table-borderles">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                                <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                                <td>: {{ $f->users->nama_user }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                                <td>: {{ $f->alamat_fo }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                                <td>: {{ $f->tipe }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                                <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tinggi Menara</td>
                                                                <td>: {{ $f->tinggi_menara }} Meter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right mr-5 mt-4">
                                                        <a href="{{ url('/fiber/printsurat', $f->id)}}" target="_blank" rel="noopener" class="btn btn-danger">
                                                            <span><i class="fa fa-print"></i></span>
                                                            <span>Cetak</span>
                                                        </a>
                                                        <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                            <span><i class="fa fa-eye"></i></span>
                                                            <span>Detail</span>
                                                        </a> 
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                                            
                            @endforeach
                        </div>

                        <div id="status5" class="container tab-pane fade"><br>
                            @foreach ($data_fiber5 as $key =>$f)
                                @if ($f->users->id == Auth::user()->id)    
                                <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                                    <table class="table table-bordered rounded bg-surat">
                                        <thead>
                                            <tr class="bg-blue">
                                                <th scope="col" class="pl-5 text-center">
                                                    <h5 class="text-secondary text-italic" >{{ $f->post_status->nama_status }} : {{ $f->post_status->keterangan }}</h5>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="pl-5 pr-3">
                                                    <div class="d-flex">
                                                        <div class="p-2">
                                                            <h2 class="d-inline-flex">Permohonan Izin</h2>
                                                        </div>
                                                        <div class="ml-auto p-2">
                                                            <h5 class="text-secondary text-right d-inline-flex">{{ $f->created_at->format('d-m-Y') }}</h5>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td class="pl-5">
                                                    <table class="table table-borderles">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Nama Perusahaan</td>
                                                                <td>: {{ $f->post_perusahaan->nama_perusahaan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Penanggung Jawab</td>
                                                                <td>: {{ $f->users->nama_user }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Alamat Fiber</td>
                                                                <td>: {{ $f->alamat_fo }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tipe Jaringan</td>
                                                                <td>: {{ $f->tipe }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Jaringan ID</td>
                                                                <td width="85%">: {{ $f->nama_jaringan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-secondary" scope="row" width="25%">Tinggi Menara</td>
                                                                <td>: {{ $f->tinggi_menara }} Meter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right mr-5 mt-4">
                                                        <a href="{{ url('/fiber/show', $f->id ) }}" class="btn btn-success">
                                                            <span><i class="fa fa-eye"></i></span>
                                                            <span>Detail</span>
                                                        </a>
                                                        <a href="{{ url('/fiber/suratditolak', $f->id)}}" target="_blank" rel="noopener" class="btn btn-danger">
                                                            <span><i class="fa fa-print"></i></span>
                                                            <span>Cetak</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                                            
                            @endforeach
                        </div>
                    </div>
                </div> 
                                   
            </div>
        </div>
    </div>
</section>

@endsection
