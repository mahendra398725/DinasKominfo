<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ubahModal{{ $x->id}}" tabindex="-1" role="dialog" aria-labelledby="ubahModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ubahModalLabel">Ubah Data Tampilan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/dataperusahaan', $x->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                    
                    <div class="form-group">
                        <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" value="{{ $x->nama_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_perusahaan" class="col-form-label">Alamat</label>
                        <input type="text" name="alamat_perusahaan" class="form-control" value="{{ $x->alamat_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="telpon_perusahaan" class="col-form-label">Telepon Kantor</label>
                        <input type="text" name="telpon_perusahaan" class="form-control" value="{{ $x->telpon_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="email_perusahaan" class="col-form-label">Email</label>
                        <input type="email" name="email_perusahaan" class="form-control" value="{{ $x->email_perusahaan }}">
                      </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->