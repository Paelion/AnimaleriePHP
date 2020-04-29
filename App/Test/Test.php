<?php
namespace App\Test;
// DATABASE
use Database\CreateDatabase;


class Test
{
    public function __construct()
    {


        $db = new createDatabase();
        // $db->create();


        $db->createTable('animal', ['id' => 'INT PRIMARY KEY NOT NULL AUTO_INCREMENT',
            'nom' => 'VARCHAR(100) NOT NULL',
            'type' => 'INT NOT NULL',
            'race' => 'VARCHAR(100) NOT NULL',
            'taille' => 'INT NOT NULL',
            'poid' => 'INT NOT NULL',
            'age' => 'INT NOT NULL'
        ]);

        $db->createTable('user', ['id' => 'INT PRIMARY KEY NOT NULL AUTO_INCREMENT',
            'nom' => 'VARCHAR(100) NOT NULL',
            'prenom' => 'VARCHAR(100) NOT NULL',
            'adresse' => 'VARCHAR(100) NOT NULL',
            'postal' => 'VARCHAR(10) NOT NULL',
            'mail' => 'VARCHAR(100) NOT NULL',
            'telephone' => 'VARCHAR(100) NOT NULL',
            'role' => 'VARCHAR(100) NOT NULL'
        ]);

        $db->createTable('product', ['id' => 'INT PRIMARY KEY NOT NULL AUTO_INCREMENT',
            'nom' => 'VARCHAR(100) NOT NULL',
            'type' => 'INT NOT NULL',
            'animal' => 'VARCHAR(100) NOT NULL',
            'prix' => 'VARCHAR(100) NOT NULL',
            'stock' => 'VARCHAR(100) NOT NULL'
        ]);


        $db->createTable('dons',
            ["id" => "INT PRIMARY KEY NOT NULL AUTO_INCREMENT",
                "user_id" => "INT NOT NULL",
                "animal_id" => "INT NOT NULL",
                "date" => 'DATETIME NOT NULL'
            ],
            ['user_id' => 'user(id)',
                'animal_id' => 'animal(id)']
        );

        $db->createTable('commande',
            ["id" => "INT PRIMARY KEY NOT NULL AUTO_INCREMENT",
                "user_id" => "INT NOT NULL",
                "dateCommande" => 'DATETIME NOT NULL',
                "montantTotal" => 'VARCHAR(100) NOT NULL',
                "etat" => 'VARCHAR(100) NOT NULL',
            ],
            ['user_id' => 'user(id)']
        );

        $db->createTable('ligneCommande',
            ["id" => "INT PRIMARY KEY NOT NULL AUTO_INCREMENT",
                "commande_id" => "INT NOT NULL",
                "product_id" => "INT NOT NULL",
                "quantite" => 'INT NOT NULL',
                "montant" => 'VARCHAR(100) NOT NULL'
            ],
            ['commande_id' => 'commande(id)',
                'product_id' => 'product(id)']
        );


        $db->createTable('reservation',
            ["id" => "INT PRIMARY KEY NOT NULL AUTO_INCREMENT",
                "user_id" => "INT NOT NULL",
                "animal_id" => "INT NOT NULL",
                "dateReservation" => 'DATETIME NOT NULL',
                "dateRdv" => 'DATETIME NOT NULL'
            ],
            ['user_id' => 'user(id)',
                'animal_id' => 'animal(id)']
        );
    }
}



include '../View/indexView.php';
