<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
        {
            $psikologs = [
                [
                    'name' => 'Psikolog',
                    'email' => 'psikolog1@example.com',
                    'password' => Hash::make('psikolog123'),
                    'role' => 2,
                ],
                [
                    'name' => 'Dr. Budi',
                    'email' => 'budi@example.com',
                    'password' => Hash::make('budi123'),
                    'role' => 2,
                ],
                [
                    'name' => 'Dr. Ani',
                    'email' => 'ani@example.com',
                    'password' => Hash::make('ani123'),
                    'role' => 2,
                ],
            ];

            foreach ($psikologs as $data) {
                User::create($data);
            }
        }

}
