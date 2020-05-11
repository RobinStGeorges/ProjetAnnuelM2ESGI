<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use App\Entity\Exercice;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        for ($count = 0; $count < 8; $count++) {
            $cours = new Cours();
            $cours->setTitle("Titre " . $count);
            $cours->setContent("content" . $count);
            $cours->setPicturePath("imgDefault.png");
            $cours->setVideoPath("videoDefault");
            $manager->persist($cours);
        }


        for ($count = 0; $count < 8; $count++) {
            $exercice = new Exercice();
            $exercice->setTitle("Titre " . $count);
            $exercice->setContent("content" . $count);
            $exercice->setImagePath("imgDefault.png");
            $exercice->setVideoPath("videoDefault");
            $manager->persist($exercice);
        }
        $manager->flush();
    }
}
