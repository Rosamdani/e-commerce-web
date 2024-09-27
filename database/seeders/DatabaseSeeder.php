<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 = User::firstOrCreate([
            'name' => 'Rosyamdani',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user2 = User::firstOrCreate([
            'name' => 'Rosyamdani',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $role1 = Role::firstOrCreate([
            'name' => 'Admin'
        ]);
        $role2 = Role::firstOrCreate([
            'name' => 'User'
        ]);

        $user1->assignRole($role1);
        $user2->assignRole($role2);
    }
}
