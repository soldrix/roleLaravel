<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'admin']);
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'id_role' => 2
        ]);
        $user->assignRole($role2);
        $user2 = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'toto@example.com',
            'id_role' => 1
        ]);
        $user2->assignRole($role1);
    }
}
