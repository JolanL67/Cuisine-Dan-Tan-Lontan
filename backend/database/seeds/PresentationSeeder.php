<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('presentation')->insert([
            'description' => 'a remplir',
            'thumbnail' => 'a remplir',
            'logo' => 'a remplir',
            'bg_image' => 'a remplir',
            'created_at' => new \DateTime(),
        ]);
    }
}
