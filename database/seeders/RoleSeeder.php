<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (PermissionEnum::cases() as $case) {
            Permission::create(['name' => $case->value]);
        }


        foreach (RoleEnum::cases() as $case) {
            Role::create(['name' => $case->value]);
        }

        $role = Role::where('name', RoleEnum::Admin->value)->first();
        $role->syncPermissions(PermissionEnum::cases());
    }
}
