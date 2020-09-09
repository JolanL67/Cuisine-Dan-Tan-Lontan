<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'Plats chaud' => [
                'Rougail saucisse' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Rougail la morue' => [
                    'price' => 9.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Rougail boucané' => [
                    'price' => 9.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry poulet' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry crevette aux combava' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry poissons aux gingembres' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry poulet massalé' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry ti jacque' => [
                    'price' => 9.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Cari patte cochon aux pois cap' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté boeuf aux oignons' => [
                    'price' => 9.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté choux vert aux poulets' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté poulet aux chouchou' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté porc aux légumes' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté boeuf aux brèdes chinois' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Cabri massalé' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Massalé le thon' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Riz cantonnais à la réunionnaise' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Brède manioc' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Shop suey poulet' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Daube citrouille' => [
                    'price' => 8.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Accompagnements' => [
                'Riz' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pois cap' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Lentilles' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Haricots rouge' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Haricots blanc' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Haricots noir' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauce piment' => [
                    'price' => 0,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Apéritif Créole' => [
                'Samoussa' => [
                    'price' => 0.60,
                    'ingredient' => 'Boeuf, Poulet, Fromage',
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.60,
                ],
                'Bouchon' => [
                    'price' => 0.70,
                    'ingredient' => 'Poulet, Porc et Combava',
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.20,
                ],
                'Nems' => [
                    'price' => 0.70,
                    'ingredient' => 'Poulet, Porc, Crevette',
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.20,
                ],
                'Bonbons piments' => [
                    'price' => 0.60,
                    'ingredient' => 'blabla',
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.60,
                ],
                'Croquettes de poulet' => [
                    'price' => 1,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Piments farcis' => [
                    'price' => 1,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Achards de légumes (la barquette)' => [
                    'price' => 3,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sarcive (la barquette)' => [
                    'price' => 3,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Gâteaux fait Maison' => [
                'Gâteaux patate douce (la part)' => [
                    'price' => 2,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Gâteaux manioc (la part)' => [
                    'price' => 2,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Boucherie' => [
                'Boucanée fumée' => [
                    'price' => 13,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Saucisse fraîche' => [
                    'price' => 10.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Saucisse fumée' => [
                    'price' => 11.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Nos sandwichs réunionnais' => [
                'Pain dakatine' => [
                    'price' => 3,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain achards' => [
                    'price' => 3,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain avec fromage de tête' => [
                    'price' => 4,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain bouchon / ou gratinée' => [
                    'price' => 4.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain thon maïs' => [
                    'price' => 3,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain Sarcive' => [
                    'price' => 5.50,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain Américain' => [
                    'price' => 5,
                    'ingredient' => 'blabla',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ]
        ];

        foreach ( $array as $index => $subArray) {

            $typeName = $index;

            foreach ( $subArray as $name => $data ) {
                DB::table('menus')->insert([
                    'type' => $typeName,
                    'name' => $name,
                    'price' => $data['price'],
                    'ingredient' => $data['ingredient'],
                    'is_discount' => $data['is_discount'],
                    'nb_unit' => $data['nb_unit'],
                    'discount_price' => $data['discount_price'],
                    'created_at' => new \DateTime(),
                ]);
            }
        }


    }
}
