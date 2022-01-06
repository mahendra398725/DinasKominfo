<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="rekomendasiModal{{ $m->id }}" tabindex="-1" role="dialog" aria-labelledby="rekomendasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rekomendasiModalLabel">Apakah anda yakin ingin memverifikasi {{ $m->id }}?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('rekomendasi/menara', $m->id) }}">
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
                        <input type="text" name="id_status" class="form-control" value="4" hidden>
                        <input type="text" name="file_ktp" class="form-control" value="{{ $m->file_ktp }}" hidden>
                        <input type="text" name="no_akta" class="form-control" value="{{ $m->no_akta }}" hidden>
                        <input type="text" name="tgl_akta" class="form-control" value="{{ $m->tgl_akta }}" hidden>
                        <input type="text" name="no_nib" class="form-control" value="{{ $m->no_nib }}" hidden>
                        <input type="text" name="tgl_nib" class="form-control" value="{{ $m->tgl_nib }}" hidden>
                        <input type="text" name="no_npwp" class="form-control" value="{{ $m->no_npwp }}" hidden>
                        <input type="text" name="file_permohonan" class="form-control" value="{{ $m->file_permohonan }}" hidden>
                        <input type="text" name="file_perjanjian" class="form-control" value="{{ $m->file_perjanjian }}" hidden>
                        <input type="text" name="tgl_survey" class="form-control" value="{{ $m->tgl_survey }}" hidden>
                        <input type="text" name="file_survey1" class="form-control" value="{{ $m->file_survey1 }}" hidden>
                        <input type="text" name="file_survey2" class="form-control" value="{{ $m->file_survey2 }}" hidden>
                        <input type="text" name="file_survey3" class="form-control" value="{{ $m->file_survey3 }}" hidden>
                        <input type="text" name="catatan" class="form-control" value="{{ $m->catatan }}" hidden>
                        
                        <div class="form-group">
                            <label for="">No Surat Rekomendasi</label>
                            <input type="text" name="no_surat" class="form-control" value="{{ $m->no_surat }}">
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Rekomendasi</label>
                            <input type="datetime-local" name="tgl_rekom" class="form-control" value="{{ $m->tgl_rekom }}">
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