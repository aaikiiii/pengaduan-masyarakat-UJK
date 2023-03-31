<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Petugas::create([
            'nama_petugas'  => 'Administrator',
            'username'  => 'admin',
            'telp' => '089637605474',
            'password'  => bcrypt('admin010203'),
            'roles' => 'admin'
        ]);
    }
}
