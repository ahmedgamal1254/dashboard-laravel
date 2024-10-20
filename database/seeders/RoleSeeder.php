<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            ["name" => "Super Admin","status" => 1],
            ["name" => "Admin","status" => 1],
            ["name" => "Writer","status" => 1],
            ["name" => "Manager","status" => 1],
        ];

        Role::insert($roles);
    }
}
