<!DOCTYPE html>
<html>
<head>
	<title>Surat Rekomendasi</title>
	<style type="text/css">
		.satu{
			font-size: 16px;
		}
		.dua{
			font-size: 19px;
		}
		.tiga{
			font-size: 12px;
		}
		.justify { 
			text-align: justify;
		}
		.left { 
			text-align: left;
		}
		p{
			display: block;
			margin-top: 2px;
			margin-bottom: 2px;
		}    
		body {
			z-index: 50;
		}
		table {
			border-style: double;
			border-color: rgba(255, 255, 255, 0);
			position: right;
		}
		table tr .text2 {
			text-align: right;
			font-size: 12px;
		}
		table tr .text {
			text-align: center;
			font-size: 12px;
		}
		table tr td {
			font-size: 12px;
		}
		img{
			position: center;
		}
		.watermark{
			position: absolute;
			color: lightgray;
			opacity: 0.1;
			width: 100%;
			top: 25%;
			text-align: center;
			z-index: 0;
		}
	</style>
</head>
<body>
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
					<p class="satu justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan hasil survei lapangan tim teknis Dinas Komunikasi dan Informatika Kabupaten Tulungagung tanggal {{ Carbon\Carbon::parse($fiber->tgl_survey)->format('d-m-Y') }}, tentang permohonan proses IMB Menara Telekomunikasi untuk lokasi :</p>
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
				<td width="295"><p class="satu">{{ $fiber->longtitude }} {{ $fiber->latitude }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120" align="top"><p class="satu">2. Alamat </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->alamat_menara }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">3. Jenis Menara </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->jenis_menara }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">4. Tinggi Menara </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->tinggi_menara }} Meter</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">5. Nama Pemilik Tanah </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->pemilik_tanah }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">6. Lama sewa lahan </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->lama_sewa }} Tahun</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">7. Penanggung Jawab </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->users->nama_user }}</p></td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">8. No.Telp </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">
					Kantor&nbsp;:&nbsp;{{ $fiber->post_perusahaan->telpon_perusahaan }}</p>
				</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"></td>
				<td width="5"></td>
				<td width="295"><p class="satu">
					HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $fiber->users->no_hp }}</p>
				</td>
			</tr>
			<tr>
				<td width="60"></td>
				<td width="120"><p class="satu">9. Email </p></td>
				<td width="5">:</td>
				<td width="295"><p class="satu">{{ $fiber->post_perusahaan->email_perusahaan }}</p></td>
			</tr>
		</tbody>
	</table>

	<table class="table-border">
		<tbody>
			<tr>
				<td width="30"></td>
				<td width="450"><p class="satu">Pada hari {{ showDateTime($fiber->updated_at, 'l') }}, tanggal {{ showDateTime($fiber->updated_at, 'd F Y') }} <b><u>MEMBERIKAN REKOMENDASI</u></b> kepada :</p></td>
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
				<td width="220"></td>
				<td width="260">
					<center>
						<p class="satu">
							KEPALA <br>
							DINAS KOMUNIKASI DAN INFORMATIKA <br>
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
				<td height="20" width="30"></td>
				<td width="450"></td>
			</tr>
			<tr>
				<td width="30"></td>
				<td width="450">
					<p class="tiga">Tembusan&nbsp;: <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>1. Sdr. Kepala Dinas DPMPTSP Kabupaten Tulungagung</u><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>2. Sdr. Kepala Dinas PUPR Kabupaten Tulungagung</u>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>