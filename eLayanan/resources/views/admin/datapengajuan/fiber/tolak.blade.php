<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="tolakModal{{ $f->id }}" tabindex="-1" role="dialog" aria-labelledby="tolakModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tolakModalLabel">Apakah anda yakin ingin memverifikasi {{ $f->id }}?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('rekomendasi/fiber', $f->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <input type="text" name="id_post_perusahaan" class="form-control" value="{{ $f->id_post_perusahaan }}" hidden>
                        <input type="text" name="id_user" class="form-control" value="{{ $f->id_user }}" hidden>
                        <input type="text" name="alamat_fo" class="form-control" value="{{ $f->alamat_fo }}" hidden>
                        <input type="text" name="titik_awal" class="form-control" value="{{ $f->titik_awal }}" hidden>
                        <input type="text" name="titik_akhir" class="form-control" value="{{ $f->titik_akhir }}" hidden>
                        <input type="text" name="file_kordinat" class="form-control" value="{{ $f->file_kordinat }}" hidden>
                        <input type="text" name="nama_jaringan" class="form-control" value="{{ $f->nama_jaringan }}" hidden>
                        <input type="text" name="pj_bentang" class="form-control" value="{{ $f->pj_bentang }}" hidden>
                        <input type="text" name="jml_tiang" class="form-control" value="{{ $f->jml_tiang }}" hidden>
                        <input type="text" name="tipe" class="form-control" value="{{ $f->tipe }}" hidden>
                        <input type="text" name="jml_core" class="form-control" value="{{ $f->jml_core }}" hidden>
                        <input type="text" name="diameter" class="form-control" value="{{ $f->diameter }}" hidden>
                        <input type="text" name="id_status" class="form-control" value="5" hidden>
                        <input type="text" name="file_ktp" class="form-control" value="{{ $f->file_ktp }}" hidden>
                        <input type="text" name="no_akta" class="form-control" value="{{ $f->no_akta }}" hidden>
                        <input type="text" name="tgl_akta" class="form-control" value="{{ $f->tgl_akta }}" hidden>
                        <input type="text" name="no_nib" class="form-control" value="{{ $f->no_nib }}" hidden>
                        <input type="text" name="tgl_nib" class="form-control" value="{{ $f->tgl_nib }}" hidden>
                        <input type="text" name="tiang_fo" class="form-control" value="{{ $f->tiang_fo }}" hidden>
                        <input type="text" name="peta_jaringan" class="form-control" value="{{ $f->peta_jaringan }}" hidden>
                        <input type="text" name="file_permohonan" class="form-control" value="{{ $f->file_permohonan }}" hidden>
                        <input type="text" name="file_perijinan" class="form-control" value="{{ $f->file_perijinan }}" hidden>
                        <input type="text" name="tgl_survey" class="form-control" value="{{ $f->tgl_survey }}" hidden>
                        <input type="text" name="file_survey1" class="form-control" value="{{ $f->file_survey1 }}" hidden>
                        <input type="text" name="file_survey2" class="form-control" value="{{ $f->file_survey2 }}" hidden>
                        <input type="text" name="file_survey3" class="form-control" value="{{ $f->file_survey3 }}" hidden>
                        <input type="text" name="catatan" class="form-control" value="{{ $f->catatan }}" hidden>
                       
                        <div class="form-group">
                            <label for="">No Surat Rekomendasi</label>
                            <input type="text" name="no_surat" class="form-control" value="{{ $f->no_surat }}">
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Rekomendasi</label>
                            <input type="datetime-local" name="tgl_rekom" class="form-control" value="{{ $f->tgl_rekom }}">
                        </div>
   
                        <center>
                            <br>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Rekomendasi</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>