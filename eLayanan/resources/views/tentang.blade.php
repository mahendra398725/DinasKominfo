@extends('layouts.userpublic')

@section('tittle', 'Tentang Layanan')
@section('content')

<div id="domain" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-10 offset-md-1">
                <h3>SOP Pengajuan Menara Telekomunikasi dan Fiber Optik</h3>
            </div>
        </div><!-- end title -->
    
        @foreach ($pages as $p)
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('image/page/'. $p->gambar) }}" alt="" class="img-fluid img-rounded">
                </div><!-- end media -->
                <div class="message-box">
                    <h4> <i class="fa fa-calendar"></i> {{ Carbon\Carbon::parse($p->tgl_upload)->translatedFormat('l, d F Y') }}</h4>
                </div>
            </div><!-- end col -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="message-box">
                    <h2>{{ $p->judul_halaman }}</h2>
                    <p>{{ $p->keterangan }}</p>
                    <a href="{{ route('SOP.download', $p->berkas) }}" class="hover-btn-new"><span>Unduh</span></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->
        </div>
        @endforeach
    </div><!-- end container -->
</div><!-- end section -->

<div class="section dbcolor">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><a href="{{asset('files/Format-Surat-Permohonan-Mendirikan-Fiber-Optik.pdf')}}" target="_blank"><i class="fa fa-download"></i> &nbsp;&nbsp;Contoh Surat Permohonan Fiber Optik ke Diskominfo</a></h3>
                <h3><a href="{{asset('files/Format-Surat-Permohonan-Mendirikan-Menara-Telekomunikasi.pdf')}}" target="_blank"><i class="fa fa-download"></i> &nbsp;&nbsp;Contoh Surat Permohonan Menara Telekomunikasi ke Diskominfo</a></h3>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div id="pricing" class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Kenapa Harus E-Layanan?</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <img class="mt-2 mb-2 img-fluid" height="80px" src="{{ asset('assetsweb/img/icon-1.png') }}" alt="">
                                            <h3>Pengajuan Dimana Saja</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <center><p>Dengan aplikasi ini anda dapat mengajukan surat permohonan mendirikan Menara atau Jaringan Fiber Optik darimana saja dan kapan saja, selama device anda terkoneksi dengan internet.</p></center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <img class="mt-2 mb-2 img-fluid" height="80px" src="{{ asset('assetsweb/img/icon-2.png') }}" alt="">
                                            <h3>Pelacakan Langsung</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <center><p>Anda bisa memantau setiap proses surat secara langsung, sehingga anda bisa memprediksi kapan surat anda selesai dan juga akan mendapatkan notifikasi jika surat sudah siap untuk diambil.</p></center>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <img class="mt-2 mb-2 img-fluid" height="80px" src="{{ asset('assetsweb/img/icon-3.png') }}" alt="">
                                            <h3>Lebih Hemat Waktu</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <center><p>Anda lebih menghemat waktu, tidak perlu datang dan menunggu di Diskominfo. Tinggal duduk di kantor anda, anda sudah bisa meminta surat perijinan dengan mengakses website E-Layanan.</p></center>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end title -->
    </div><!-- end container -->
</div><!-- end section -->
@include('layouts.footer')
@endsection