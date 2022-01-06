<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="showModal{{ $m->id}}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="showModalLabel">Detail Data Tampilan {{ $m->id}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/dataperusahaan', $m->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                    
                    <div class="form-group">
                        <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" disabled placeholder="{{ $m->post_perusahaan->nama_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_perusahaan" class="col-form-label">Alamat Perusahaan</label>
                        <input type="text" name="alamat_perusahaan" class="form-control" disabled placeholder="{{ $m->post_perusahaan->alamat_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="namaPemohon" class="col-form-label">Data Pemohon </label>
                        <input type="text" name="namaPemohon" class="form-control" disabled placeholder="{{ $m->users->nama_user }} - {{ $m->users->alamat_user }}">
                      </div>

                      <div class="form-group">
                        <label for="namaPemohon" class="col-form-label">Telepon </label>
                        <div class="row">
                            <div class="col-md-6"><input class="form-control" placeholder="{{ $m->post_perusahaan->telpon_perusahaan }}" name="file_akta" type="text" disabled></div>
                            <div class="col-md-6"><input class="form-control" placeholder="{{ $m->users->no_hp }}" name="file_nib" type="text" disabled></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="email_perusahaan" class="col-form-label">Email</label>
                        <input type="email" name="email_perusahaan" class="form-control" disabled placeholder="{{ $m->post_perusahaan->email_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_menara" class="col-form-label">Alamat Menara</label>
                        <input type="text" name="alamat_menara" class="form-control" disabled placeholder="{{ $m->alamat_menara }}">
                      </div>

                      <div class="form-group">
                        <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" disabled placeholder="{{ $m->post_perusahaan->nama_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"><label >Berkas Permohonan</label></div>
                            <div class="col-md-4"><label >Berkas Perjanjian</label></div>
                            <div class="col-md-4"><label >Berkas Rekomendasi PUPR</label></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4"><a href="{{ route('permohonan.download', $m->file_permohonan) }}">Unduh Berkas</a></div>
                            <div class="col-md-4"><a href="{{ route('perjanjian.download', $m->file_perjanjian) }}">Unduh Berkas</a></div>
                            <div class="col-md-4"><a href="{{ route('pupr.download', $m->file_pupr) }}">Unduh Berkas</a></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label >No Akta</label>
                                <input name="no_akta" type="text" class="form-control" placeholder="{{ $m->no_akta }}" disabled>
                            </div>
                            <div class="col-md-2">
                                <label >Tanggal Akta</label>
                                <input name="tgl_akta" type="text" class="date form-control" placeholder="{{ $m->tgl_akta }}" disabled>
                            </div>
                            <div class="col-md-2">
                                <label >No NIB</label>
                                <input name="no_nib" type="text" class="form-control" placeholder="{{ $m->no_nib }}" disabled>
                            </div>
                            <div class="col-md-2">
                                <label >Tanggal NIB</label>
                                <input name="tgl_nib" type="text" class="date form-control" placeholder="{{ $m->tgl_nib }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label >No NPWP</label>
                                <input name="no_npwp" type="text" class="form-control" placeholder="{{ $m->no_npwp }}" disabled>
                            </div>
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