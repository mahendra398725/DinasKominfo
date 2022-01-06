@extends('layouts.userpublic')

@section('tittle', 'Registrasi')
@section('content')

<div class="section wb">
    <div class="container">
		<div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Daftar Akun</h3>
            </div>
        </div><!-- end title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact_form">
                    <form class=""  method="post" action="{{ action('AuthController@store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_user">Nama Lengkap</label>
                            <input required class="form-control" name="nama_user" type="text" id="nama_user">
                        </div>
                        <div class="form-group">
                            <label for="nip_k_user">NIK</label>
                            <input required class="form-control" name="nip_k_user" type="number" id="nip_k_user">
                        </div>
                        <div class="form-group">
                            <label for="alamat_user">Alamat</label>
                            <input required class="form-control" name="alamat_user" type="text" id="alamat_user">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input required class="form-control" name="no_hp" type="text" id="no_hp">
                        </div>
                        
                        <div class="form-group">
                            <input required class="form-control" type="hidden" name="id_post_role" id="id_post_role">
                        </div>

                        <div class="form-group">
                            <label for="file_ktp">Scan KTP</label>
                            <input required class="form-control" name="file_ktp" type="file">
                            <small class="form-text text-muted"><i><span class="text-danger">*Upload dengan format <b>pdf (max 3 mb)</b></span></i></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input required class="form-control" name="email" type="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input required class="form-control" name="password" type="password" id="password">
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password-icon-log"></span>
                            <small class="form-text text-muted"><i><span class="text-danger">*Password minimal 8 karakter</span></i></small>
                        </div>
                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1">DAFTAR</button>
                    </form>
                </div>
            </div>				
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection
