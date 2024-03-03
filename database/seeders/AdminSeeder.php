<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = new \App\Models\User;
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->role = 'admin';
        $admin->password = bcrypt('admin');
        $admin->save();
    }
}
