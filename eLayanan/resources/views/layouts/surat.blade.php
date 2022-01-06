<!DOCTYPE html>
<html>
<head>
	<title> @yield('tittle') </title>
    <link href="{{ asset('assetsweb/img/favicon.ico') }}" rel="icon">
	<style type="text/css">
		.satu{
			font-size: 16px;
		}
		.dua{
			font-size: 19px;
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
		.watermark1{
			position: absolute;
			color: lightgray;
			width: 100%;
			top: 73%;
			right: 33%;
			text-align: right;
			z-index: 0;
		}
		.watermark2{
			position: absolute;
			color: lightgray;
			width: 100%;
			top: 74%;
			right: 23%;
			text-align: right;
			z-index: 0;
		}

	</style>
</head>
<body onload="window.print();">
    @yield('content')
</body>
</html>