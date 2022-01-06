<!DOCTYPE html>
<html>
    <head>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assetsadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assetsadmin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    </head>
    <body onload="window.print();">  
        <table class="table-border">
            <thead>
            <tr>
                <td width="1100"><center><h1>Laporan Data User</h1></center></td>                
            </tr>
            </thead>
        </table><br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" width="30"><center>No</center></th>
                <th scope="col" width="250"><center>Nama Lengkap</center></th>
                <th scope="col" width="150"><center>NIP / NIK</center></th>
                <th scope="col" width="200"><center>Alamat</center></th>
                <th scope="col" width="130"><center>No. Telepon</center></th>
                <th scope="col" width="60"><center>Role</center></th>
                <th scope="col" width="180"><center>Email</center></th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 0;?>
                @foreach ($user as $users)
                <?php $no++ ;?>
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $users->nama_user }}</td>
                        <td>{{ $users->nip_k_user }}</td>
                        <td>{{ $users->alamat_user }}</td>
                        <td>{{ $users->no_hp }}</td>
                        <td>{{ $users->post_role->nama_role }}</td>
                        <td>{{ $users->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assetsadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assetsadmin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assetsadmin/js/demo/datatables-demo.js') }}"></script>
    </body>
</html>
