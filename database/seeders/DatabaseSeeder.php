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

        $user1 = User::factory()->create([
            'name' => 'mousa',
            'email' => 'mousa@imousart.com',
        ]);
         User::factory()->create([
            'name' => 'user',
            'email' => 'user@imousart.com',
        ]);
        $role = Role::create(['name' => 'Admin']);
        $user1->assignRole($role);
    }
}
