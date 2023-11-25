<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'user']);
        Role::create(['name' => 'moderator']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'analyst']);
        Role::create(['name' => 'free user']);
        Role::create(['name' => 'paid user']);
        Role::create(['name' => 'new user']);
    }
}
