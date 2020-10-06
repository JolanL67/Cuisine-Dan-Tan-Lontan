<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rose',
            'email' => env('ADMIN_MAIL'),
            'email_verified_at' => null,
            'password' => Hash::make(env('ADMIN_PASSWORD')),
            'remember_token' => null,
            'created_at' => new \DateTime(),
        ]);
    }
}
