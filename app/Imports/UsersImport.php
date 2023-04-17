<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithHeadingRow, WithStartRow
{
    // public $rows;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if ($row->filter()->isNotEmpty()) {
                //validation
                Validator::make($row->toArray(), [
                    'name'        => 'required|string',
                    'city'        => 'required|string',
                    'age'         => 'required|integer',
                    'email'       => 'required|unique:users,email',
                    'password'    => 'required',
                ])->validate();
                //create user
                User::create([
                    'name'      => $row['name'],
                    'city'      => $row['city'],
                    'age'       => $row['age'],
                    'email'     => $row['email'],
                    'password'  => bcrypt($row['password']),
                ]);
            }
        }
    }
    public function startRow(): int
    {
        return 2;
    }
}
