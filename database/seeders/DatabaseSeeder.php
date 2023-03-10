<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Petugas::create([
        'nama_petugas' => 'Adminstrator',
        'username' => 'admin',
        'password' => Hash::make('password'),
        'telp' => '08967846253',
        'level' => 'admin',
        ]);
    }
}
