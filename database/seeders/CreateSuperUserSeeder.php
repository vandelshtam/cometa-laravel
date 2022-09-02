<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superUser = User::create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => Hash::make('1234567890'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $role = Role::create([
            'name' => 'super-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
            $superUser->assignRole('super-user');
    }
}
