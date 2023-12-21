<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionSeeder extends Seeder
{
    public function run(): void
    {

        $superAdminPermissons = [
            1 => 1,
            2 => 1,
            3 => 1,
            4 => 1,
            5 => 1,
            6 => 1,
            7 => 1,
            8 => 1,
            9 => 1,
            10 => 1,
            11 => 1,
            12 => 1,
        ];
        $adminPermissons = [
            1 => 2,
            2 => 2,
            3 => 2,
            4 => 2,
            5 => 2,
            6 => 2,
            7 => 2,
            8 => 2,
            9 => 2,
            10 => 2,
            11 => 2,
            12 => 2,
        ];

        foreach ($superAdminPermissons as $permission_id => $role_id) {
            DB::table('role_has_permissions')->insert([
                'permission_id' => $permission_id,
                'role_id' => $role_id,
            ]);
        }
        foreach ($adminPermissons as $permission_id => $role_id) {
            DB::table('role_has_permissions')->insert([
                'permission_id' => $permission_id,
                'role_id' => $role_id,
            ]);
        }
    }
}

