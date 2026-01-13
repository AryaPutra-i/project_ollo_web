<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $admin = [
            'nama_lengkap' => 'system admin',
            'username' => 'adminOllo1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'no_telepon' => '07123456789',
            'profesi' => 'administrator',
            'status' => true,
            'role' => 'admin'
        ];  

        DB::table('user_frelancers')->insert($admin);
    }
}
