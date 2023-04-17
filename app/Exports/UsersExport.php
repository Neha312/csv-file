<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return User::select('name', 'city', 'age', 'email', 'password')->get();
        return User::select('name', 'city', 'age', 'email', 'password')->where('age', '>=', '60')->get();
        // return User::select('name', 'city', 'email', 'password')->where('city', 'Lowetown')->get();
    }
    public function headings(): array
    {
        return ["Name", "City", "Age", "Email", "Password"];
    }
}
