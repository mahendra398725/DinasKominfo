@extends('layouts.userpublic')

@section('tittle', 'Riwayat')
@section('content')

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <section class="latest-blog spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h2>Riwayat Pengajuan anda</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row justify-content-center pl-5 pr-5 pb-5" id="show_data">
                            <table class="table table-bordered rounded bg-surat">
                                <thead>
                                    <tr class="bg-blue">
                                        <th scope="col" class="pl-5 text-center">
                                            <h5 class="text-secondary text-italic" disabled="">{{ $fiber->post_status->nama_status }} : {{ $fiber->post_status->keterangan }}</h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col" class="pl-5 pr-3">
                                            <div class="d-flex">
                                                <div class="p-2">
                                                    <h4 class="d-inline-flex">Permohonan Izin</h4>
                                                </div>
                                                <div class="ml-auto p-2">
                                                    <h5 class="text-secondary text-right d-inline-flex">{{ $fiber->created_at->format('d-m-Y') }}</h5>
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
                                                        <td class="text-secondary" width="25%" scope="row">Nama Perusahaan</td>
                                                        <td>: {{ $fiber->post_perusahaan->nama_perusahaan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Penanggung Jawab</td>
                                                        <td>: {{ $fiber->users->nama_user }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Jaringan ID</td>
                                                        <td>: {{ $fiber->nama_jaringan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Kantor / Penanggung Jawab</td>
                                                        <td>: {{ $fiber->post_perusahaan->telpon_perusahaan }} / {{ $fiber->users->no_hp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Titik Awal</td>
                                                        <td>: {{ $fiber->titik_awal }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Titik Akhir</td>
                                                        <td>: {{ $fiber->titik_akhir }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Panjang Bentang</td>
                                                        <td width="85%">: {{ $fiber->pj_bentang }} meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Jumlah Tiang</td>
                                                        <td>: {{ $fiber->jml_tiang }} tiang</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Tipe Jaringan</td>
                                                        <td>: {{ $fiber->tipe }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Jumlah Core</td>
                                                        <td>: {{ $fiber->jml_core }} core</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Diameter Kabel</td>
                                                        <td>: {{ $fiber->diameter }} milimeter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="d-flex">
                                                <div class="p-2">
                                                    <h5 class="d-inline-flex">Berkas Permohonan</h5>
                                                </div>
                                            </div>
                                            <table class="table table-borderles">
                                                <tbody>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Berkas Koordinat</td>
                                                        <td >: {{ $fiber->file_kordinat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Berkas KTP</td>
                                                        <td >: {{ $fiber->file_ktp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Berkas Permohonan</td>
                                                        <td >: {{ $fiber->file_permohonan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Berkas Perijinan</td>
                                                        <td >: {{ $fiber->file_perijinan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Nomor NIB dan Tanggal NIB</td>
                                                        <td >: {{ $fiber->no_nib }} / {{ $fiber->tgl_nib }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>                    
                    <div class="text-right mr-5 mt-4">
                        <a href="{{ url('/riwayat-fiber') }}" class="btn btn-light btn-radius btn-brd grd1">Kembali</a>
                    </div>
            </div>
        </div>
    </div>
</section>

@endsection
