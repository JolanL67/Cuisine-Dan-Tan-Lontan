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
        DB::table('contact')->insert([
            'phone' => '06.51.14.07.56',
            'mail' => 'test@test.fr',
            'facebook' => 'url facebook',
            'twitter' => 'url twitter',
            'created_at' => new \DateTime(),
        ]);
    }
}
