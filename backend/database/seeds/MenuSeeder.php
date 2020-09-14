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
                    'ingredient' => 'Saucisse fraiche, tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Rougail la morue' => [
                    'price' => 9.50,
                    'ingredient' => 'Morue séchée, tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Rougail boucané' => [
                    'price' => 9.50,
                    'ingredient' => 'Boucané (viande de porc fumé), tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry poulet' => [
                    'price' => 8.50,
                    'ingredient' => 'Poulet, tomates, oignons, curcuma, épices divers, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry crevette aux combava' => [
                    'price' => 8.50,
                    'ingredient' => 'Crevettes, combava(citron), tomates, oignons, curcuma, épices divers, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry poissons aux gingembres' => [
                    'price' => 8.50,
                    'ingredient' => 'Poisson frais, tomates, oignons, curcuma, gingembre, épices divers, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry poulet massalé' => [
                    'price' => 8.50,
                    'ingredient' => 'Poulet (assaisonné avec massalé), tomates, oignons, curcuma, épices massalé, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry Ti Jacque' => [
                    'price' => 9.50,
                    'ingredient' => 'Ti jaque (fruit typique de la réunion), tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Carry patte de cochon aux pois' => [
                    'price' => 8.50,
                    'ingredient' => 'Patte de cochon, pois cap, tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté de boeuf aux oignons' => [
                    'price' => 9.50,
                    'ingredient' => 'Bœuf sauté, tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté choux vert aux poulets' => [
                    'price' => 8.50,
                    'ingredient' => 'Choux sauté, tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté poulet aux chouchou' => [
                    'price' => 8.50,
                    'ingredient' => 'Poulet sauté, chouchou (chayote), tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté de porc aux légumes' => [
                    'price' => 8.50,
                    'ingredient' => 'Porc sauté, légumes croquants, tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauté boeuf aux brèdes chinois' => [
                    'price' => 8.50,
                    'ingredient' => 'Bœuf sauté, brèdes chinoise (variété de choux chinois), tomates, oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Cabri massalé' => [
                    'price' => 8.50,
                    'ingredient' => 'Viande de cabri, tomates, oignons, épices massalés, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Massalé le thon' => [
                    'price' => 8.50,
                    'ingredient' => 'Thon, tomates, oignons, épices massalés, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Riz cantonnais à la réunionnaise' => [
                    'price' => 8.50,
                    'ingredient' => 'Riz, crevettes, œuf, carotte, épices.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Brède manioc' => [
                    'price' => 8.50,
                    'ingredient' => 'Feuilles de manioc (façon épinard), oignons, épices, accompagnés de riz.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Shop suey poulet' => [
                    'price' => 8.50,
                    'ingredient' => 'Poulet, sauté de légumes, sauce soja, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Daube citrouille' => [
                    'price' => 8.50,
                    'ingredient' => 'Citrouille, émincés d’oignons, épices, accompagnés de riz et de haricots ou de lentilles.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Accompagnements' => [
                'Riz' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pois cap' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Lentilles' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Haricots rouge' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Haricots blanc' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Haricots noir' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sauce piment' => [
                    'price' => 0,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Apéritif Créole' => [
                'Samoussa au boeuf' => [
                    'price' => 0.60,
                    'ingredient' => null,
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.60,
                ],
                'Samoussa au poulet' => [
                    'price' => 0.60,
                    'ingredient' => null,
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.60,
                ],
                'Samoussa au fromage' => [
                    'price' => 0.60,
                    'ingredient' => null,
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.60,
                ],
                'Bouchon' => [
                    'price' => 0.70,
                    'ingredient' => 'Bouchées de viande, poulet ou porc assaisonnées enveloppées dans une pâte de blé, cuites à la vapeur.',
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.20,
                ],
                'Nems au poulet' => [
                    'price' => 0.70,
                    'ingredient' => null,
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.20,
                ],
                'Nems au porc' => [
                    'price' => 0.70,
                    'ingredient' => null,
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.20,
                ],
                'Nems aux crevettes' => [
                    'price' => 0.70,
                    'ingredient' => null,
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.20,
                ],
                'Bonbons piments' => [
                    'price' => 0.60,
                    'ingredient' => 'Beignet fait à base de pois cap et d’un mélange d’herbes et d’épices.',
                    'is_discount' => true,
                    'nb_unit' => 6,
                    'discount_price' => 0.60,
                ],
                'Croquettes de poulet' => [
                    'price' => 1,
                    'ingredient' => 'Pilons de poulets mariner et cuits et ensuite cuits avec une pâte de beignets.',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Piments farcis' => [
                    'price' => 1,
                    'ingredient' => 'Gros piments remplie de farce de poulets ou bœufs',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Achards de légumes (la barquette)' => [
                    'price' => 3,
                    'ingredient' => 'Légumes croquants et colorés pour accompagner un plat ou garnir un sandwich (carotte, haricot verts, choux verts, citron)',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Sarcive (la barquette)' => [
                    'price' => 3,
                    'ingredient' => 'Viande (porc ou poulet) avec assaisonnement sucré(miel)/salée',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Gâteaux fait Maison' => [
                'Gâteaux patate douce (la part)' => [
                    'price' => 2,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Gâteaux manioc (la part)' => [
                    'price' => 2,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Boucherie' => [
                'Boucanée fumée' => [
                    'price' => 13,
                    'ingredient' => 'Poitrine de porc fumée',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Saucisse fraîche' => [
                    'price' => 10.50,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Saucisse fumée' => [
                    'price' => 11.50,
                    'ingredient' => null,
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
            ],
            'Nos sandwichs réunionnais' => [
                'Pain dakatine' => [
                    'price' => 3,
                    'ingredient' => 'Sandwich a base de beurre de cacahuète',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain achards' => [
                    'price' => 3,
                    'ingredient' => 'Sandwich à base de légumes coloré et croquant',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain avec fromage de tête' => [
                    'price' => 4,
                    'ingredient' => 'Sandwich avec charcuterie fromage de tête (porc)',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain bouchon / ou gratinée' => [
                    'price' => 4.50,
                    'ingredient' => 'Sandwich à base de bouchons (poulet ou porc ou fromage), fromage râpé, gratiné au four',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain thon maïs' => [
                    'price' => 3,
                    'ingredient' => 'Pain, thon, maïs, assaisonnement maison',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain Sarcive' => [
                    'price' => 5.50,
                    'ingredient' => 'Pain à base de viande (porc ou poulet) avec assaisonnement sucré(miel)/salée',
                    'is_discount' => false,
                    'nb_unit' => 0,
                    'discount_price' => 0,
                ],
                'Pain Américain' => [
                    'price' => 5,
                    'ingredient' => 'Pain à base de bouchons (poulet ou porc ou fromage) accompagner de frites',
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
