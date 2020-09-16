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
            'email' => 'test@test.fr',
            // cuisinelontan974@gmail.com
            'email_verified_at' => null,
            'password' => Hash::make('lol'),
            // ReunionCuisine137313MK.
            'remember_token' => null,
            'created_at' => new \DateTime(),
        ]);
    }
}
