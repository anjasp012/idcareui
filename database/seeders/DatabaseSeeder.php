<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pages;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        Pages::create([
            'title' => 'Beranda',
            'content' => 'Beranda',
        ]);
        Pages::create([
            'title' => 'Pendahuluan',
            'content' => 'pendahuluan',
        ]);
        Pages::create([
            'title' => 'Pesan Pimpinan IdCARE.UI',
            'content' => 'Sambutan',
        ]);
        Pages::create([
            'title' => 'Klaster',
            'content' => 'Klaster',
        ]);
        Pages::create([
            'title' => 'Pesan dari JICA',
            'content' => 'Pesan dari JICA',
        ]);
        Pages::create([
            'title' => 'Mata Kuliah',
            'content' => 'Mata Kuliah',
        ]);
        Pages::create([
            'title' => 'Sertifikat',
            'content' => 'Sertifikat',
        ]);
        Pages::create([
            'title' => 'Jadwal Kelas & Cara Registrasi',
            'content' => 'Jadwal Kelas & Cara Registrasi',
        ]);
        Pages::create([
            'title' => 'CAMP',
            'content' => 'CAMP',
        ]);
        Pages::create([
            'title' => 'Cara Registrasi',
            'content' => 'Cara Registrasi',
        ]);
        Pages::create([
            'title' => 'Berita',
            'content' => 'Berita',
        ]);
        Pages::create([
            'title' => 'Riset/Laporan',
            'content' => 'Riset/Laporan',
        ]);
        Pages::create([
            'title' => 'Open Courseware',
            'content' => 'Open Courseware',
        ]);
        Pages::create([
            'title' => 'Acara',
            'content' => 'Acara',
        ]);
        Pages::create([
            'title' => 'Kontak',
            'content' => 'Kontak',
        ]);
    }
}
