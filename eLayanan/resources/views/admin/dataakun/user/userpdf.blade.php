<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>        
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NIP / NIK</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
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
    </body>
</html>
