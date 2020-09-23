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
         DB::table('presentations')->insert([
            'description' => "Yannick et Rose. Nous sommes originaire de la Réunion.
                Yannick est de Saint Paul (savannah) et Rose de Saint Clotilde.
                Nous sommes tous les deux de très bon amis et c’est ainsi que nous avions voulu mettre en place ce concept de la cuisine Dan Tan Lontan pour faire partager notre passion et notre plaisir de cuisiner.

                A force de faire goûter nos bons petits plats créole à notre entourage, ils nous ont poussés à nous lancer dans cette aventure et l'envie n'y manquait pas.

                La naissance de ce projet est le résultat d'une refléxion de plus d'un an. Nous y pensions tous les deux car nous adorons cuisiner et qu'on a beaucoup appris par le biais de la cuisine de nos parents. Nos familles ont toujours cuisiné dans la tradition créole et c'était une passion pour nous d'être à leurs côtés.

                Nous proposons dans notre concept divers produits issus de la cuisine créole et nous vous invitons à parcourir notre beau menu. Nous proposons la restauration à emporter dans des barquettes comme à la Réunion.",
            'thumbnail' => 'a remplir',
            'bg_image' => 'https://images.pexels.com/photos/1340116/pexels-photo-1340116.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'command_info' => 'a remplir',
            'payment_info' => 'a remplir',
            'created_at' => new \DateTime(),
        ]);
    }
}
