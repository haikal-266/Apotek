<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([ "name"=> "owner"]);

        $ownerRole = Role::create([ "name"=> "buyer"]);

        $user = User::create([
            "name"=> "Haikal Pramudya",
            "email"=> "@haikaltri266@gmail.com",
            "password"=> bcrypt("shikabukeste_yatta"),
        ]);

        $user->assignRole($ownerRole);


    }
}
