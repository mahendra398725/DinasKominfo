    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="ubahModal{{ $p->id}}" tabindex="-1" role="dialog" aria-labelledby="ubahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ubahModalLabel">Ubah Data Tampilan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url('/data-halaman', $p->id) }}">
                        <input type="hidden" name="_method" value="PATCH" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="nama_halaman" class="col-form-label">Nama Halaman</label>
                            <input type="text" name="nama_halaman" class="form-control" value="{{ $p->nama_halaman }}" >
                          </div>
                        <div class="form-group">
                          <label for="judul_halaman" class="col-form-label">Judul</label>
                          <input type="text" name="judul_halaman" class="form-control" value="{{ $p->judul_halaman }}" >
                        </div>
    
                        <div class="form-group">
                          <label for="keterangan" class="col-form-label">Keterangan</label>
                          <input type="text" class="form-control" value="{{ $p->keterangan }}" name="keterangan" >
                        </div>
    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6"><input class="form-control" value="{{ $p->gambar }}" name="gambar" type="text" hidden></div>
                                <div class="col-md-6"><input class="form-control" value="{{ $p->berkas }}" name="berkas" type="text" hidden></div>
                            </div>
                        </div>

                        <div class="form-grup">
                            <label class="col-form-label">Status</label>
                            <select id="status" class="form-control"  name="status" >
                                <option>{{ $p->status }}</option>
                                <option value="AKTIF">Tampilkan Halaman</option>
                                <option value="NONAKTIF">Tidak Menampilkan Halaman</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" name="tgl_upload" class="form-control" value="{{ $p->tgl_upload }}" hidden>
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