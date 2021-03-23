<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PropertyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $count = 16;

        for($i = 1; $i<$count; $i++){
            
            $p = new Property();
            $p->setTitle("Maison " . $i);
            $p->setDescription("Description de la maison " . $i);
            $p->setImagePath("250x180");

            $manager->persist($p);
        }

        $manager->flush();
    }
}
