@extends('layouts.surat')

@section('tittle', 'Surat Rekomendasi Fiber')

@section('content')
	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="50"><img src="{{ asset('assetsweb/img/pemkab.png') }}" style="width: 90px;height: 95px;"></td>
				<td width="380">
					<center>
						<p class="dua"><b>
							PEMERINTAH KABUPATEN TULUNGAGUNG <br>
							DINAS KOMUNIKASI DAN INFORMATIKA <br></b>
							Jln. Sultan Agung Gg. III No. 9 - 11 Telepon (0355) 322190 <br>
							<b>TULUNGAGUNG 66262</b>
						</p>
					</center>
				</td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450"><hr color="black"></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="540">
					<center>
					<p class="dua"><u>
						<b>SURAT REKOMENDASI</b></u><br>
					</p>
					<p class="satu">555 / {{ $fiber->no_surat}} / 109 / <?php echo date("Y"); ?></p>
					</center>
				</td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450">
					<p class="satu justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan hasil survei lapangan tim teknis Dinas Komunikasi dan Informatika Kabupaten Tulungagung tanggal {{ Carbon\Carbon::parse($fiber->tgl_survey)->translatedFormat('d F Y') }}, tentang permohonan proses IMB Fiber Optik untuk lokasi :</p>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="watermark"><img src="{{ asset('assetsweb/img/pemkab.png') }}" alt="Forest" width="325" height="350"></div>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">1. Jaringan ID </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->nama_jaringan }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120" align="top"><p class="satu">2. Alamat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->alamat_fo }}, Kec. {{ $fiber->post_category->nama_kecamatan }}, Ds. {{ $fiber->post->nama_desa }} - Kab. Tulungagung</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">3. Titik Koordinat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">({{ $fiber->titik_awal }}) s/d ({{ $fiber->titik_akhir }})</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">4. Panjang Bentang </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->pj_bentang }} Meter</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">5. Jumlah Tiang </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->jml_tiang }} Tiang</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">6. Tipe Jaringan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->tipe }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">7. Jumlah Core </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->jml_core }} core</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">8. Diameter Kabel </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->diameter }} milimeter</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450"><p class="satu">Dengan ini <b><u>memberikan REKOMENDASI</u></b> kepada :</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">Nama Perusahaan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->post_perusahaan->nama_perusahaan }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120" align="top"><p class="satu">Alamat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->post_perusahaan->alamat_perusahaan }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">Penanggung Jawab </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->users->nama_user }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">No.Telepon </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->post_perusahaan->telpon_perusahaan }} / {{ $fiber->users->no_hp }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">Catatan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->catatan }}</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450"><p class="satu">Demikian rekomendasi ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="180"></td>
				<td width="300">
					<center>
						<p class="satu">
							Tulungagung, {{ Carbon\Carbon::parse($fiber->tgl_rekom)->translatedFormat('d F Y') }} <br>
						</p>
						<div class="watermark4">
							<img src="{{ asset('assetsweb/img/ttd.png') }}" alt="Forest" width="160" height="130">
						</div>
						<div class="watermark3">
							<img src="{{ asset('assetsweb/img/stempel.png') }}" alt="Forest" width="150" height="150">
						</div>
						<p class="satu">
							KEPALA DINAS KOMUNIKASI DAN INFORMATIKA <br>
							KABUPATEN TULUNGAGUNG <br><br><br><br><br>
							<b><u>Drs. SAMROTUL FUAD</u></b> <br>
							Pembina Utama Muda <br>
							NIP. 19670323 199403 1 006
						</p>
					</center>
				</td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450"></td>
			</tr>
			<tr>
				<td width="30"></td>
				<td width="450">
					<p class="satu">Tembusan&nbsp;: <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>1. Sdr. Kepala Dinas DPMPTSP Kabupaten Tulungagung</u><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>2. Sdr. Kepala Dinas PUPR Kabupaten Tulungagung</u>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	@endsection