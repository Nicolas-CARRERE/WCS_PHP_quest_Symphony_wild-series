<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking Dead');
        $program->setSynopsis('Synopsis of Walking Dead');
        $program->setCategory($this->getReference('category_' . 'Horreur'));
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/0020487.jpg');
        $program->setCountry('USA');
        $program->setYear(2010);
        $program->getSeasons();
        $manager->persist($program);
        $this->addReference('program_' . 0, $program);

        $program = new Program();
        $program->setTitle('The Mandalorian');
        $program->setSynopsis('Synopsis of The Mandalorian');
        $program->setCategory($this->getReference('category_' . 'Fantastique'));
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/20/11/19/09/59/0020487.jpg');
        $program->setCountry('USA');
        $program->setYear(2019);
        $program->getSeasons();
        $manager->persist($program);
        $this->addReference('program_' . 1, $program);


        $program = new Program();
        $program->setTitle('Les Simpson');
        $program->setSynopsis('Synopsis of Les Simpson');
        $program->setCategory($this->getReference('category_' . 'Animation'));
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/0020487.jpg');
        $program->setCountry('USA');
        $program->setYear(1989);
        $program->getSeasons();
        $manager->persist($program);
        $this->addReference('program_' . 2, $program);


        $program = new Program();
        $program->setTitle('The Witcher');
        $program->setSynopsis('Synopsis of The Witcher');
        $program->setCategory($this->getReference('category_' . 'Fantastique'));
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/20/11/19/09/59/0020487.jpg');
        $program->setCountry('USA');
        $program->setYear(2019);
        $program->getSeasons();
        $manager->persist($program);
        $this->addReference('program_' . 3, $program);


        $program = new Program();
        $program->setTitle('Avengers');
        $program->setSynopsis('Synopsis of Avengers');
        $program->setCategory($this->getReference('category_' . 'Action'));
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/0020487.jpg');
        $program->setCountry('USA');
        $program->setYear(2012);
        $program->getSeasons();
        $manager->persist($program);
        $this->addReference('program_' . 4, $program);


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
