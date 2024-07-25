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
        //
        // membuat beberapa role
        // membuat default user untuk superadmin
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);

        $userOwner = User::create([
            'name' => 'Ihsan ahmad',
            'occupation' => 'Educator',
            'avatar' => 'images/default-avatar.png',
            'email' => 'ihsan@owner.com',
            'password' => bcrypt('12345678')
        ]);

        $userOwner->assignRole($ownerRole);
    }
}