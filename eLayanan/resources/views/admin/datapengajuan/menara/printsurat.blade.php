@extends('layouts.surat')

@section('tittle', 'Surat Rekomendasi Menara')

@section('content')
<center>
	<table class="table-border">
		<tbody>
			<tr>
				<th height="5"></th>
			</tr>
			<tr>
				<td width="10"></td>
				<td width="90"><img src="{{ asset('assetsweb/img/pemkab.png') }}" style="width: 90px;height: 95px;"></td>
				<td width="530">
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
				<td width="10"></td>
				<td width="620"><hr color="black"></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="10"></td>
				<td width="620">
					<center>
					<p class="dua"><u>
						<b>SURAT REKOMENDASI</b></u><br>
					</p>
					<p class="satu">555 / {{ $menara->no_surat}} / 109 / <?php echo date("Y"); ?></p>
					</center>
				</td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="10"></td>
				<td width="620">
					<p class="satu justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan hasil survei lapangan tim teknis Dinas Komunikasi dan Informatika Kabupaten Tulungagung tanggal {{ Carbon\Carbon::parse($menara->tgl_survey)->translatedFormat('d F Y') }}, tentang permohonan proses IMB Menara Telekomunikasi untuk lokasi :</p>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="watermark"><img src="{{ asset('assetsweb/img/pemkab.png') }}" alt="Forest" width="325" height="350"></div>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">1. Koordinat </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->kordinat }}</p></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160" align="top"><p class="satu">2. Alamat </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->alamat_menara }}, Ds. {{ $menara->post->nama_desa }}, Kec. {{ $menara->post_category->nama_kecamatan }} - Kab. Tulungagung</p></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">3. Jenis Menara </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->jenis_menara }}</p></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">4. Tinggi Menara </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->tinggi_menara }} Meter</td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">5. Nama Pemilik Tanah </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->pemilik_tanah }}</p></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">6. Lama sewa lahan </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->lama_sewa }} Tahun</p></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">7. Penanggung Jawab </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->users->nama_user }}</p></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">8. No.Telp </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">
					Kantor&nbsp;:&nbsp;{{ $menara->post_perusahaan->telpon_perusahaan }}</p>
				</td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"></td>
				<td width="5"></td>
				<td width="405"><p class="satu">
					HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $menara->users->no_hp }}</p>
				</td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="160"><p class="satu">9. Email </p></td>
				<td width="5">:</td>
				<td width="405"><p class="satu">{{ $menara->post_perusahaan->email_perusahaan }}</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="45"></td>
				<td width="580"><p class="satu">Dengan ini <b><u>memberikan REKOMENDASI</u></b> kepada :</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="80"></td>
				<td width="160"><p class="satu">Nama Perusahaan </p></td>
				<td width="5">:</td>
				<td width="375"><p class="satu">{{ $menara->post_perusahaan->nama_perusahaan }}</p></td>
			</tr>
			<tr>
				<td width="80"></td>
				<td width="160" align="top"><p class="satu">Alamat </p></td>
				<td width="5">:</td>
				<td width="375"><p class="satu">{{ $menara->post_perusahaan->alamat_perusahaan }}</p></td>
			</tr>
			<tr>
				<td width="80"></td>
				<td width="160"><p class="satu">Catatan </p></td>
				<td width="5">:</td>
				<td width="375"><p class="satu">{{ $menara->catatan }}</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="45"></td>
				<td width="580"><p class="satu">Demikian rekomendasi ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="20"></td>
				<td width="200"></td>
				<td width="400">
					<center>
						<p class="satu">
							Tulungagung, {{ Carbon\Carbon::parse($menara->tgl_rekom)->translatedFormat('d F Y') }} <br><br>
							<div class="watermark2">
								<img src="{{ asset('assetsweb/img/ttd.png') }}" alt="Forest" width="150" height="125">
							</div>
							<div class="watermark1">
								<img src="{{ asset('assetsweb/img/stempel.png') }}" alt="Forest" width="150" height="150">
							</div>
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
				<td height="20" width="10"></td>
				<td width="450"></td>
			</tr>
			<tr>
				<td width="10"></td>
				<td width="620">
					<p class="satu">Tembusan&nbsp;: <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>1. Sdr. Kepala Dinas DPMPTSP Kabupaten Tulungagung</u>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</center>
</section>

@endsection