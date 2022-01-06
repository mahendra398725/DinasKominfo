<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ubahModal{{ $x->id}}" tabindex="-1" role="dialog" aria-labelledby="ubahModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ubahModalLabel">Ubah Data Tampilan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('admin/dataakun/user', $x->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label for="nama_user" class="col-form-label">Nama User</label>
                        <input type="text" name="nama_user" class="form-control" value="{{ $x->nama_user }}">
                      </div>

                      <div class="form-group">
                        <label for="nip_k_user" class="col-form-label">NIP / NIK</label>
                        <input type="text" name="nip_k_user" class="form-control" value="{{ $x->nip_k_user }}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_user" class="col-form-label">Alamat</label>
                        <input type="text" name="alamat_user" class="form-control" value="{{ $x->alamat_user }}">
                      </div>

                      <div class="form-group">
                        <label for="no_hp" class="col-form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control" value="{{ $x->no_hp }}">
                      </div>

                      <div class="form-grup">
                        <label class="col-form-label">Role</label>
                        <select id="id_post_role" class="form-control" name="id_post_role" >
                            @foreach ($role as $key => $c)
                            <?php if($c->id == $x->id_post_role) { ?>
                                <option selected="selected" value="{{ $c->id }}">{{ $c->nama_role }}</option>
                            <?php } else {?>
                                <option value="{{ $c->id }}">{{ $c->nama_role }}</option>
                            <?php } ?>
                            @endforeach
                        </select>
                    </div>
                      
                      <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $x->email }}">
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