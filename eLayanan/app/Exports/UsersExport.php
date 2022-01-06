<?php

namespace App\Exports;

use App\Users;
use App\PostRole;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Users::all();
    }

    public function map($user): array
    {
        return [
            $user->nama_user,
            $user->nip_k_user,
            $user->alamat_user,
            $user->no_hp,
            $user->post_role->nama_role,
            $user->email
        ];
    }
    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'NIP / NIK',
            'Alamat',
            'No. Telepon',
            'Role',
            'Email'
        ];
    }
}
