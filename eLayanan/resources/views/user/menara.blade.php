@extends('layouts.userpublic')

@section('tittle', 'Pengajuan Menara')
@section('content')

<div class="section wb">
    <div class="container">
		<div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Pengajuan Menara Telekomunikasi</h3>
            </div>
        </div><!-- end title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact_form">
                    <form class=""  method="post" action="{{ action('MenaraController@store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-form-label">Badan Usaha</label>
                                <select id="id_post_perusahaan"class="form-control" name="id_post_perusahaan" required>
                                    <option value="">-- Pilih Badan Usaha --</option>
                                    @foreach ($data_perusahaan as $data_perusahaan)
                                        <option value="{{ $data_perusahaan->id }}">{{ $data_perusahaan->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (Auth::check())  
                                <div class="form-group">
                                    <label for="penanggungjawab">Penanggung Jawab</label>
                                    <input type="text" id="id_user" name="id_user" value="{{auth()->user()->id_user}}" placeholder="{{auth()->user()->nama_user}}" class="form-control" disabled>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="no_1">No Telepon</label>
                                            <input type="number" placeholder="{{auth()->user()->no_hp}}" disabled class="form-control" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="email" placeholder="{{auth()->user()->email}}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="penanggungjawab">Penanggung Jawab</label>
                                    <input type="text" id="id_user" name="id_user" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="no_hp">No Telepon</label>
                                            <input type="number" id="no_hp"  class="form-control" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <label>Kecamatan</label>
                                        <select onchange="UpdatePostCategory()" id="post_category" name="kecamatan" class="form-control" style="width: 100%;">
                                            <option>-- Pilih Kecamatan --</option>
                                            @foreach($post_category as $post_category)
                                                <option value="{{$post_category->id}}">Kecamatan {{$post_category->nama_kecamatan}}</option>                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6" id="Buka_desa">
                                    <label>Desa</label>
                                        <select class="form-control" style="width: 100%;" id="post" name="desa" disabled>
                                            <option>-- Pilih Desa --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat_menara">Alamat Menara</label>
                                <input type="text" id="alamat_menara" name="alamat_menara" class="form-control" required>
                                <small class="form-text text-muted"><i><span class="text-danger">*Dsn..., RT/RW ... </b></span></i></small>
                            </div>
                            <div class="form-group">
                                <label for="pemilik_tanah"> Pemilik Tanah</label>
                                <input type="text" id="pemilik_tanah" name="pemilik_tanah" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="kordinat">Titik Koordinat</label>
                                <input type="text" name="kordinat" class="form-control" required>
                                <small class="form-text text-muted"><i><span class="text-danger">*Masukkan data dengan format <b>(-0.00000000000000, 000.00000000000000)</b></span></i></small>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="lama_sewa">Lama Sewa Lahan</label>
                                        <input type="number" id="lama_sewa" name="lama_sewa" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="tgl_kontrak">Tanggal Mulai Kontrak</label>
                                        <input type="datetime-local" name="tgl_kontrak" value="date('Y-m-d h:i:s')" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="jenis_menara">Jenis Menara</label>
                                        <div class="form-group">
                                            <select class="form-control" name="jenis_menara">
                                                <option>-- Pilih Jenis --</option>
                                                <option>Menara 3 Kaki</option>
                                                <option>Menara 4 Kaki</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="tinggi_menara">Ketinggian Menara</label>
                                        <input type="text" id="tinggi_menara" name="tinggi_menara" class="form-control" required>
                                        <input type="text" id="id_status" name="id_status" value="1" hidden>
                                    </div>
                                </div>
                            </div>
                            @if (Auth::check())
                            <div class="form-group">
                                <label for="file_ktp"> Berkas KTP</label>
                                <input class="form-control" type="text" id="file_ktp" value="{{auth()->user()->file_ktp}}" disabled>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="file_ktp"> Berkas KTP</label>
                                <input class="form-control" type="file" id="file_ktp">
                                <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                            </div>
                            @endif
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="no_akta">Nomor Akta</label>
                                        <input type="text" id="no_akta" name="no_akta" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="tgl_akta">Tanggal Akta</label>
                                        <input name="tgl_akta" type="text" class="date form-control"id="kalender" required>
                                        <span toggle="#kalender" class="fa fa-fw fa-calendar field-icon toggle-password-icon-reg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="no_nib">Nomor NIB</label>
                                        <input type="text" id="no_nib" name="no_nib" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="tgl_nib">Tanggal NIB</label>
                                        <input name="tgl_nib" type="text" class="date form-control" required>
                                        <span toggle="#kalender" class="fa fa-fw fa-calendar field-icon toggle-password-icon-reg"></span>
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label for="no_npwp"> Nomor NPWP</label>
                                <input type="text" name="no_npwp" id="no_npwp" class="form-control" required>
                            </div> 
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="file_permohonan">Upload Berkas Permohonan</label>
                                        <input type="file" id="file_permohonan" name="file_permohonan" class="form-control" required>
                                        <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="file_perjanjian">Upload Berkas Perjanjian</label>
                                        <input type="file" id="file_perjanjian" name="file_perjanjian" class="form-control" required>
                                        <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="file_pupr">Upload Berkas Rekomendasi Tata Ruang PUPR</label>
                                        <input type="file" id="file_pupr" name="file_pupr" class="form-control" required>
                                        <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                                        <input type="datetime-local" name="date('Y-m-d h:i:s')" class="form-control" hidden>
                                    </div>
                                </div>
                            </div>  
                            @if (Auth::check())
                                <center><button type="submit" class="btn btn-light btn-radius btn-brd grd1">Simpan &amp; Lanjutkan</button></center>
                            @else
                                <center><button type="submit" class="btn btn-light btn-radius btn-brd grd1">Simpan &amp; Lanjutkan</button></center>
                            @endif
                            
                    </form>
                </div>
            </div>				
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script> 

<script>
    function UpdatePostCategory(){
        let post_category = $("#post_category").val()
        $("#post").children().remove()
        $("#post").val('');
        $("#post").append(`<option>-- Pilih Desa --</option>`);
        $("#post").prop('disabled', true)
        if (post_category!='' && post_category!=null) {
            $.ajax({
                url:"{{url('user')}}/desa/"+post_category,
                success:function(res){
                    $("#post").prop('disabled', false)
                    let tampilan_option = '';
                    $.each(res,function(index,data){
                        tampilan_option+=`<option value="${data.id}">Desa ${data.nama_desa}</option>`})
                    $("#post").append(tampilan_option)
                }
            });
        }
    }
</script>
@endsection