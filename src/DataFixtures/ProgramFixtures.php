<?php

namespace App\DataFixtures;

use App\DataFixtures\CategoryFixtures;
use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking Dead');
        $program->setSynopsis('Synopsis of Walking Dead');
        $program->setCategory($this->getReference('category_' . 'Horreur'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The Mandalorian');
        $program->setSynopsis('Synopsis of The Mandalorian');
        $program->setCategory($this->getReference('category_' . 'Fantastique'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Les Simpson');
        $program->setSynopsis('Synopsis of Les Simpson');
        $program->setCategory($this->getReference('category_' . 'Animation'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The Witcher');
        $program->setSynopsis('Synopsis of The Witcher');
        $program->setCategory($this->getReference('category_' . 'Fantastique'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Avengers');
        $program->setSynopsis('Synopsis of Avengers');
        $program->setCategory($this->getReference('category_' . 'Action'));
        $manager->persist($program);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
