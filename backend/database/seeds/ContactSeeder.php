<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'phone' => '06 51 14 07 56',
            'mail' => 'cuisinelontan974@gmail.com',
            'facebook' => 'https://www.facebook.com/Cuisine-dan-tan-lontan-974-109778123964453',
            'instagram' => 'https://www.instagram.com/cuisinedantanlontan/?hl=fr',
            'created_at' => new \DateTime(),
        ]);
    }
}
