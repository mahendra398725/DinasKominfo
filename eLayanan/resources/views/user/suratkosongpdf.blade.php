@extends('layouts.surat')

@section('tittle', 'Surat Rekomendasi Menara')

@section('content')
	<table class="table-border">
		<tbody>
			<tr>
				<th height="5"></th>
			</tr>
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
					<p class="satu">555 / &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; / 109 / <?php echo date("Y"); ?></p>
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
					<p class="satu justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan hasil survei lapangan tim teknis Dinas Komunikasi dan Informatika Kabupaten Tulungagung tanggal {{ Carbon\Carbon::parse($menara->tgl_survey)->translatedFormat('d F Y') }}, tentang permohonan proses IMB Menara Telekomunikasi untuk lokasi :</p>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="watermark"><img src="{{ asset('assetsweb/img/pemkab.png') }}" alt="Forest" width="325" height="350"></div>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">1. Koordinat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->kordinat }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120" align="top"><p class="satu">2. Alamat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->alamat_menara }}, Kec. {{ $menara->post_category->nama_kecamatan }}, Ds. {{ $menara->post->nama_desa }} - Kab. Tulungagung</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">3. Jenis Menara </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->jenis_menara }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">4. Tinggi Menara </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->tinggi_menara }} Meter</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">5. Nama Pemilik Tanah </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->pemilik_tanah }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">6. Lama sewa lahan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->lama_sewa }} Tahun</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">7. Penanggung Jawab </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->users->nama_user }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">8. No.Telp </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">
					Kantor&nbsp;:&nbsp;{{ $menara->post_perusahaan->telpon_perusahaan }}</p>
				</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"></td>
				<td width="5"></td>
				<td width="295"><p class="satu">
					HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $menara->users->no_hp }}</p>
				</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">9. Email </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->post_perusahaan->email_perusahaan }}</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450"><p class="satu">Dengan ini memberikan <b><u>REKOMENDASI</u></b> kepada :</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">Nama Perusahaan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->post_perusahaan->nama_perusahaan }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120" align="top"><p class="satu">Alamat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $menara->post_perusahaan->alamat_perusahaan }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">Catatan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">-</p></td>
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
							Tulungagung, ..... {{ Carbon\Carbon::parse($menara->tgl_rekom)->translatedFormat('F Y') }} <br><br>
						</p>
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
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>1. Sdr. Kepala Dinas DPMPTSP Kabupaten Tulungagung</u>
					</p>
				</td>
			</tr>
		</tbody>
	</table>

	@endsection