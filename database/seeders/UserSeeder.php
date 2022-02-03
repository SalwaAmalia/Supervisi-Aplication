<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nip' => '1111',
                'nama' => 'Kurikulum',
                'email' => 'kurikulum@gmail.com',
                'alamat' => 'bogor',
                'role' => 'kurikulum',
                'supervisor' => '1',
                'password' => bcrypt('kurikulum'),
            ],
            [
                'nip' => '2222',
                'nama' => 'Kepsek',
                'email' => 'kepsek@gmail.com',
                'alamat' => 'bogor',
                'role' => 'kepsek',
                'supervisor' => '0',
                'password' => bcrypt('kepsek'),
            ],
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
