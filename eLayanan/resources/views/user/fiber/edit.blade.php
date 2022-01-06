@extends('layouts.userpublic')

@section('tittle', 'Pengajuan Fiber')
@section('content')

<div class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Pengajuan Fiber Optik</h3>
            </div>
        </div><!-- end title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact_form">
                    <form class=""  method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        @if (Auth::check())  
                            <div class="form-group">
                                <label class="col-form-label">Badan Usaha</label>
                                <input id="id_user" name="id_user" value="{{ $data_fiber->post_perusahaan->nama_perusahaan }}" placeholder="{{ $data_fiber->post_perusahaan->nama_perusahaan }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="penanggungjawab">Penanggung Jawab</label>
                                <input id="id_user" name="id_user" value="{{$data_fiber->users->id_user}}" placeholder="{{$data_fiber->users->nama_user}}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="no_1">No Telepon</label>
                                        <input placeholder="{{$data_fiber->users->no_hp}}" class="form-control" disabled>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email</label>
                                        <input placeholder="{{$data_fiber->users->email}}" class="form-control" disabled>
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
                                    
                                </div>
                                <div class="col-lg-6" id="Buka_desa">
                                <label>Desa</label>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_fo">Alamat Fiber Optik</label>
                            <input type="text" id="alamat_fo" name="alamat_fo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="titik_awal">Titik Awal</label>
                                    <input type="text" id="titik_awal" name="titik_awal" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Masukkan longtitude <b>(-0.00000000000000)</b></span></i></small>
                                </div>
                                <div class="col-lg-4">
                                    <label for="titik_akhir">Titik Akhir</label>
                                    <input type="text" id="titik_akhir" name="titik_akhir" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Masukkan latitude <b>(000.00000000000000)</b></span></i></small>
                                </div>
                                <div class="col-lg-4">
                                    <label for="file_kordinat">Upload Berkas Koordinat</label>
                                    <input type="file" name="file_kordinat" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>excel (max 3 mb)</b></span></i></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama_jaringan">Jaringan ID</label>
                                    <input type="text" id="nama_jaringan" name="nama_jaringan" class="form-control" required>                                    
                                </div>
                                <div class="col-lg-6">
                                    <label for="pj_bentang">Panjang Bentang</label>
                                    <input type="text" id="pj_bentang" name="pj_bentang" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="field-icon">meter</span></i></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="jml_tiang">Jumlah Tiang</label>
                                    <input type="text" id="jml_tiang" name="jml_tiang" class="form-control" required>
                                </div>
                                <div class="col-lg-3">
                                    <label for="tipe">Tipe Jaringan</label>
                                    <div class="form-group">
                                        <select id="tipe" name="tipe" class="form-control" required>
                                            <option>-- Pilih Jenis --</option>
                                            <option>Udara</option>
                                            <option>Tanah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label for="jml_core">Jumlah Core</label>
                                    <input type="text" id="jml_core" name="jml_core" class="form-control" required>
                                </div>
                                <div class="col-lg-3">
                                    <label for="diameter">Diameter</label>
                                    <input type="text" id="diameter" name="diameter" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="field-icon">milimeter</span></i></small>
                                    <input type="text" id="id_status" name="id_status" value="1" hidden>
                                </div>
                            </div>
                        </div>
                        @if (Auth::check())
                            <div class="form-group">
                                <label for="file_ktp"> Berkas KTP</label>
                                <input id="file_ktp" value="{{$data_fiber->users->file_ktp}}" class="form-control" disabled>
                            </div>
                        @else
                            <div class="form-group">
                                <label for="file_ktp"> Berkas KTP</label>
                                <input type="file" id="file_ktp" class="form-control" required>
                                <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="no_nib">Nomor NIB</label>
                                    <input type="text" id="no_nib" name="no_nib" class="form-control" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="tgl_nib">Tanggal NIB</label>
                                    <input name="tgl_nib" type="text" class="date form-control" required>
                                    <span class="fa fa-fw fa-calendar field-icon"></span>
                                </div>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="tiang_fo">Upload Rencana Teknis Tiang FO</label>
                                    <input type="file" id="tiang_fo" name="tiang_fo" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                                </div>
                                <div class="col-lg-6">
                                    <label for="peta_jaringan">Upload Peta Jaringan FO</label>
                                    <input type="file" id="peta_jaringan" name="peta_jaringan" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="file_permohonan">Upload Berkas Permohonan</label>
                                    <input type="file" id="file_permohonan" name="file_permohonan" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                                </div>
                                <div class="col-lg-6">
                                    <label for="file_perijinan">Upload Berkas Perijinan</label>
                                    <input type="file" id="file_perijinan" name="file_perijinan" class="form-control" required>
                                    <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
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