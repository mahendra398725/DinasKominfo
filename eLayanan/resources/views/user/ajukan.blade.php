<!-- Modal -->
<div class="modal fade" id="ajukan{{ $m->id }}" tabindex="-1" role="dialog" aria-labelledby="ajukanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="ajukanModalLabel">Apakah anda yakin ingin melanjutkan {{ $m->post_status->nama_status }}?</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/user', $m->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <input type="text" name="id_perusahaan" class="form-control" value="{{ $m->id_post_perusahaan }}" hidden>
                        <input type="text" name="id_user" class="form-control" value="{{ $m->id_user }}" hidden>
                        <input type="text" name="kecamatan" class="form-control" value="{{ $m->kecamatan }}" hidden>
                        <input type="text" name="desa" class="form-control" value="{{ $m->desa }}" hidden>
                        <input type="text" name="alamat_menara" class="form-control" value="{{ $m->alamat_menara }}" hidden>
                        <input type="text" name="pemilik_tanah" class="form-control" value="{{ $m->pemilik_tanah }}" hidden>
                        <input type="text" name="kordinat" class="form-control" value="{{ $m->kordinat }}" hidden>
                        <input type="text" name="lama_sewa" class="form-control" value="{{ $m->lama_sewa }}" hidden>
                        <input type="text" name="jenis_menara" class="form-control" value="{{ $m->jenis_menara }}" hidden>
                        <input type="text" name="tinggi_menara" class="form-control" value="{{ $m->tinggi_menara }}" hidden>
                        <input type="text" name="id_status" class="form-control" value="2" hidden>
                        <input type="text" name="file_ktp" class="form-control" value="{{ $m->file_ktp }}" hidden>
                        <input type="text" name="no_akta" class="form-control" value="{{ $m->no_akta }}" hidden>
                        <input type="text" name="tgl_akta" class="form-control" value="{{ $m->tgl_akta }}" hidden>
                        <input type="text" name="no_nib" class="form-control" value="{{ $m->no_nib }}" hidden>
                        <input type="text" name="tgl_nib" class="form-control" value="{{ $m->tgl_nib }}" hidden>
                        <input type="text" name="no_npwp" class="form-control" value="{{ $m->no_npwp }}" hidden>
                        <input type="text" name="file_permohonan" class="form-control" value="{{ $m->file_permohonan }}" hidden>
                        <input type="text" name="file_perjanjian" class="form-control" value="{{ $m->file_perjanjian }}" hidden>
                        <center>
                             <br>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>