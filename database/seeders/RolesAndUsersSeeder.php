<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesAndUsersSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['slug' => 'admin'], [
            'name' => 'Admin',
            'description' => 'Administrator'
        ]);

        $employeeRole = Role::firstOrCreate(['slug' => 'employee'], [
            'name' => 'Employee',
            'description' => 'Employee role'
        ]);

        // Create permission for dashboard viewing
        $dashboardPerm = Permission::firstOrCreate(['slug' => 'dashboard.view'], [
            'name' => 'View Dashboard',
            'description' => 'Access to dashboard'
        ]);

        // Attach permission only to admin role
        $adminRole->permissions()->syncWithoutDetaching([$dashboardPerm->id]);

        // Create admin user
        $admin = User::firstOrCreate(['email' => 'admin@example.com'], [
            'name' => 'Admin User',
            'password' => Hash::make('12345678'),
        ]);
        $admin->roles()->syncWithoutDetaching([$adminRole->id]);

        // Create employee user
        $employee = User::firstOrCreate(['email' => 'employee@example.com'], [
            'name' => 'Employee User',
            'password' => Hash::make('12345678'),
        ]);
        $employee->roles()->syncWithoutDetaching([$employeeRole->id]);

        $this->command->info('Seeded admin and employee users with roles, permissions.');
    }
}
