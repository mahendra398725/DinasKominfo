<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="showModal{{ $x->id}}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="showModalLabel">Detail Data Tampilan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/dataperusahaan', $x->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                    
                    <div class="form-group">
                        <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" disabled placeholder="{{ $x->nama_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_perusahaan" class="col-form-label">Alamat</label>
                        <input type="text" name="alamat_perusahaan" class="form-control" disabled placeholder="{{ $x->alamat_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="telpon_perusahaan" class="col-form-label">Telepon Kantor</label>
                        <input type="text" name="telpon_perusahaan" class="form-control" disabled placeholder="{{ $x->telpon_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="email_perusahaan" class="col-form-label">Email</label>
                        <input type="email" name="email_perusahaan" class="form-control" disabled placeholder="{{ $x->email_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"><label >Scan Akta Perusahaan</label></div>
                            <div class="col-md-4"><label >Scan NIB</label></div>
                            <div class="col-md-4"><label >Scan NPWP</label></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4"><input class="form-control" placeholder="{{ $x->file_akta }}" name="file_akta" type="text" disabled></div>
                            <div class="col-md-4"><input class="form-control" placeholder="{{ $x->file_nib }}" name="file_nib" type="text" disabled></div>
                            <div class="col-md-4"><input class="form-control" placeholder="{{ $x->file_npwp }}" name="file_npwp" type="text" disabled></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><input name="no_akta" type="text" class="form-control" placeholder="{{ $x->no_akta }}" disabled></div>
                            <div class="col-md-2"><input name="tgl_akta" type="text" class="date form-control" placeholder="{{ $x->tgl_akta }}" disabled></div>
                            <div class="col-md-2"><input name="no_nib" type="text" class="form-control" placeholder="{{ $x->no_nib }}" disabled></div>
                            <div class="col-md-2"><input name="tgl_nib" type="text" class="date form-control" placeholder="{{ $x->tgl_nib }}" disabled></div>
                            <div class="col-md-4"><input name="no_npwp" type="text" class="form-control" placeholder="{{ $x->no_npwp }}" disabled></div>
                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->