<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'nama_lengkap' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'no_handphone' => '123123123',
            'password' => Hash::make('password'),
        ]);
        \App\Models\User::factory()->create([
            'nama_lengkap' => 'Mohammad Kahfi',
            'username' => 'kahfie',
            'email' => 'kahfie@gmail.com',
            'no_handphone' => '22222',
            'password' => Hash::make('password'),
        ]);

        // Create permissions
        Permission::firstOrCreate(['name' => 'permission_admin']);
        Permission::firstOrCreate(['name' => 'permission_user']);

        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Give permission to certain role
        $admin->givePermissionTo(['permission_admin']);
        $user->givePermissionTo(['permission_user']);

        // Assign role to user
        User::find(1)->assignRole(['admin']);
        User::find(2)->assignRole(['user']);
    }
}
