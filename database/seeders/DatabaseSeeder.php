<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'is_supervisor' => '0001',
            'username' => 'chamacoPerro',
            'clave'=>Hash::make('finn'),
            'correo'=>'test@example.com',
            'estado'=>'0',
            'rol'=>'admin'
        ]); 

        Supervisor::factory()->create([
            
        ]);
    }
}
