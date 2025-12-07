<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin MI Nurul Iman',
            'username' => 'admin', // Ini yang dipakai buat Login nanti
            'password' => Hash::make('#minuruliman01'), // Password sesuai request
            'role' => 'admin',
        ]);
        
        $this->command->info('User Admin berhasil dibuat!');
        $this->command->info('Username: admin');
        $this->command->info('Password: #minuruliman01');
    }
}