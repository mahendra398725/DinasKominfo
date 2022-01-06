<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="verifikasiModal{{ $m->id }}" tabindex="-1" role="dialog" aria-labelledby="verifikasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifikasiModalLabel">Apakah anda yakin ingin memverifikasi {{ $m->id }}?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('verifikasi/menara', $m->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <input type="text" name="id_post_perusahaan" class="form-control" value="{{ $m->id_post_perusahaan }}" hidden>
                        <input type="text" name="id_user" class="form-control" value="{{ $m->id_user }}" hidden>
                        <input type="text" name="kecamatan" class="form-control" value="{{ $m->kecamatan }}" hidden>
                        <input type="text" name="desa" class="form-control" value="{{ $m->desa }}" hidden>
                        <input type="text" name="alamat_menara" class="form-control" value="{{ $m->alamat_menara }}" hidden>
                        <input type="text" name="pemilik_tanah" class="form-control" value="{{ $m->pemilik_tanah }}" hidden>
                        <input type="text" name="kordinat" class="form-control" value="{{ $m->kordinat }}" hidden>
                        <input type="text" name="lama_sewa" class="form-control" value="{{ $m->lama_sewa }}" hidden>
                        <input type="text" name="jenis_menara" class="form-control" value="{{ $m->jenis_menara }}" hidden>
                        <input type="text" name="tinggi_menara" class="form-control" value="{{ $m->tinggi_menara }}" hidden>
                        <input type="text" name="id_status" class="form-control" value="3" hidden>
                        <input type="text" name="file_ktp" class="form-control" value="{{ $m->file_ktp }}" hidden>
                        <input type="text" name="no_akta" class="form-control" value="{{ $m->no_akta }}" hidden>
                        <input type="text" name="tgl_akta" class="form-control" value="{{ $m->tgl_akta }}" hidden>
                        <input type="text" name="no_nib" class="form-control" value="{{ $m->no_nib }}" hidden>
                        <input type="text" name="tgl_nib" class="form-control" value="{{ $m->tgl_nib }}" hidden>
                        <input type="text" name="no_npwp" class="form-control" value="{{ $m->no_npwp }}" hidden>
                        <input type="text" name="file_permohonan" class="form-control" value="{{ $m->file_permohonan }}" hidden>
                        <input type="text" name="file_perjanjian" class="form-control" value="{{ $m->file_perjanjian }}" hidden>
                       
                        <div class="form-group">
                            <label for="">Tanggal Survey</label>
                            <input type="datetime-local" name="tgl_survey" class="form-control" value="{{ $m->tgl_survey }}">
                        </div>    

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"><label for="">Dokumentasi Survey</label></div>
                                <div class="col-md-4"><label for="">Dokumentasi Survey</label></div>
                                <div class="col-md-4"><label for="">Dokumentasi Survey</label></div>
                                <div class="col-lg-4">
                                    <input type="file" name="file_survey1" class="form-control" value="{{ $m->file_survey1 }}">
                                </div>
                                <div class="col-lg-4">
                                    <input type="file" name="file_survey2" class="form-control" value="{{ $m->file_survey2 }}">
                                </div>
                                <div class="col-lg-4">
                                    <input type="file" name="file_survey3" class="form-control" value="{{ $m->file_survey3 }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <input type="text" name="catatan" class="form-control" value="{{ $m->catatan }}">
                            <input type="text" name="no_surat" class="form-control" value="-" hidden>
                            <input type="datetime-local" name="tgl_rekom" class="form-control" value="date('Y-m-d h:i:s')" hidden>
                        </div>
                        
                        <center>
                            <br>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Verifikasi</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>