@extends('layouts.userpublic')

@section('tittle', 'Beranda')
@section('content')
	
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" >
    <!-- Indicators -->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('assetsweb/images/slider-01.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                    <h2>e<strong>-Layanan</strong></h2>
                                    <p class="lead">Aplikasi ini digunakan untuk pelayanan Masyarakat agar lebih mudah dalam melakukan permohonan izin pendirian MENARA TELEKOMUNIKASI dan FIBER OPTIK.</p>
                                </div>
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-lg-12">
                <h3>Tentang Layanan</h3>
                <p class="lead">Sistem rekomendasi pendirian menara telekomunikasi dan fiber optik Kabupaten Tulungagung merupakan sebuah sistem untuk memberikan informasi dan memudahkan pengelolaan bagi para pihak yang terkait dalam proses permohonan rekomendasi menara telekomunikasi dan fiber optik, khususnya bagi para pemohon. Pemohon dapat mengajukan rekomendasi pendirian menara telekomunikasi dan fiber optik melalui sistem ini apabila memenuhi persyaratan. Selanjutnya pemohon bisa memperoleh surat rekomendasi dari DISKOMINFO.</p>
            </div>
        </div><!-- end title -->
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