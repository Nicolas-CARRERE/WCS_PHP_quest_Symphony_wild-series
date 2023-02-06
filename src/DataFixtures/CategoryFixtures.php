<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

const CATEGORIES = [
    'Action',
    'Aventure',
    'Animation',
    'Comédie',
    'Fantastique',
    'Horreur',
];

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        foreach (CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category_' . $categoryName, $category);
        }
        $manager->flush();
    }
}
