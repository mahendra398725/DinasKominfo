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
                                            <h5 class="text-secondary text-italic" disabled="">{{ $menara->post_status->nama_status }} : {{ $menara->post_status->keterangan }}</h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col" class="pl-5 pr-3">
                                            <div class="d-flex">
                                                <div class="p-2">
                                                    <h4 class="d-inline-flex">Permohonan Izin</h4>
                                                </div>
                                                <div class="ml-auto p-2">
                                                    <h5 class="text-secondary text-right d-inline-flex">{{ $menara->created_at->format('d-m-Y') }}</h5>
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
                                                        <td>: {{ $menara->post_perusahaan->nama_perusahaan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Penanggung Jawab</td>
                                                        <td>: {{ $menara->users->nama_user }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Kantor / Penanggung Jawab</td>
                                                        <td>: {{ $menara->post_perusahaan->telpon_perusahaan }} / {{ $menara->users->no_hp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Alamat Menara</td>
                                                        <td>: {{ $menara->alamat_menara }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Lama Sewa</td>
                                                        <td>: {{ $menara->lama_sewa }} Tahun</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Jenis Menara</td>
                                                        <td width="85%">: {{ $menara->jenis_menara }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-secondary" width="25%" scope="row">Tinggi Menara</td>
                                                        <td>: {{ $menara->tinggi_menara }} Meter</td>
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
                                                        <td width="25%" class="text-secondary" scope="row">Berkas KTP</td>
                                                        <td >: {{ $menara->file_ktp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Berkas Permohonan</td>
                                                        <td >: {{ $menara->file_permohonan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Berkas Perjanjian</td>
                                                        <td >: {{ $menara->file_perjanjian }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Nomor Akta dan Tanggal Akta</td>
                                                        <td >: {{ $menara->no_akta }} / {{ $menara->tgl_akta }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Nomor NIB dan Tanggal NIB</td>
                                                        <td >: {{ $menara->no_nib }} / {{ $menara->tgl_nib }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" class="text-secondary" scope="row">Nomor NPWP</td>
                                                        <td >: {{ $menara->no_npwp }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <div class="text-right mr-5 mt-4">
                            <a href="{{ url('/riwayat-menara') }}" class="btn btn-primar btn-radiusy btn-brd grd1">Kembali</a>
                        </div>
                    </div>
                </section>                    
            </div>
        </div>
    </div>
</section>

@endsection
