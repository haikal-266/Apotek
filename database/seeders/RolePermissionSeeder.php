<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = Role::create([
            'name' => 'owner'
        ]);

        $owner = Role::create([
            'name' => 'buyer'
        ]);

        $user = User::create([
            'name'=> 'Haikal Pramudya',
            'email'=> 'haikaltri266@gmail.com',
            'password'=> bcrypt('11223344'),
        ]);

        $user->assignRole($owner);


    }
}
