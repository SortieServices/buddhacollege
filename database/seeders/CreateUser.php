<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin Seeder
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Developer',
            'email' => 'admin@sspl.com',
            'mobile' => '7004857557',
            'password' => bcrypt('12345678')
        ]);
    }
}
