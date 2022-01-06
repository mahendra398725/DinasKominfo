<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="showModal{{ $f->id}}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="showModalLabel">Detail Data Tampilan {{ $f->id}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/dataperusahaan', $f->id) }}">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                    
                    <div class="form-group">
                        <label for="nama_perusahaan" class="col-form-label">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" disabled placeholder="{{ $f->post_perusahaan->nama_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_perusahaan" class="col-form-label">Alamat Perusahaan</label>
                        <input type="text" name="alamat_perusahaan" class="form-control" disabled placeholder="{{ $f->post_perusahaan->alamat_perusahaan }}">
                      </div>

                      <div class="form-group">
                          <div class="row">
                            <div class="col-md-5"><label >Titik Awal</label></div>
                            <div class="col-md-5"><label >Titik Akhir</label></div>
                            <div class="col-md-2"><label >Berkas Koordinat</label></div>
                          </div>
                        <div class="row">
                            <div class="col-md-5"><input class="form-control" placeholder="{{ $f->titik_awal }}" name="titik_awal" type="text" disabled></div>
                            <div class="col-md-5"><input class="form-control" placeholder="{{ $f->titik_akhir }}" name="titik_akhir" type="text" disabled></div>
                            <div class="col-md-2"><a href="{{ route('kordinat.download', $f->file_kordinat) }}">Unduh Berkas</a></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="namaPemohon" class="col-form-label">Data Pemohon </label>
                        <input type="text" name="namaPemohon" class="form-control" disabled placeholder="{{ $f->users->nama_user }} - {{ $f->users->alamat_user }}">
                      </div>

                      <div class="form-group">
                        <label for="namaPemohon" class="col-form-label">Telepon </label>
                        <div class="row">
                            <div class="col-md-6"><input class="form-control" placeholder="{{ $f->post_perusahaan->telpon_perusahaan }}" name="file_akta" type="text" disabled></div>
                            <div class="col-md-6"><input class="form-control" placeholder="{{ $f->users->no_hp }}" name="file_nib" type="text" disabled></div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="email_perusahaan" class="col-form-label">Email</label>
                        <input type="email" name="email_perusahaan" class="form-control" disabled placeholder="{{ $f->post_perusahaan->email_perusahaan }}">
                      </div>

                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label >Berkas Rencana Tiang FO</label></div>
                            <div class="col-md-3"><label >Berkas Peta Jaringan FO</label></div>
                            <div class="col-md-3"><label >Berkas Permohonan</label></div>
                            <div class="col-md-3"><label >Berkas Perijinan</label></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3"><a href="{{ route('rencana.download', $f->tiang_fo) }}">Unduh Berkas</a></div>
                            <div class="col-md-3"><a href="{{ route('peta.download', $f->peta_jaringan) }}">Unduh Berkas</a></div>
                            <div class="col-md-3"><a href="{{ route('permohonan.download', $f->file_permohonan) }}">Unduh Berkas</a></div>
                            <div class="col-md-3"><a href="{{ route('perijinan.download', $f->file_perijinan) }}">Unduh Berkas</a></div>
                        </div>
                      </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label >No NIB</label>
                                <input name="no_nib" type="text" class="form-control" placeholder="{{ $f->no_nib }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label >Tanggal NIB</label>
                                <input name="tgl_nib" type="text" class="date form-control" placeholder="{{ $f->tgl_nib }}" disabled>
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