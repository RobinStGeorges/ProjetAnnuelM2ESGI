<?php

namespace App\DataFixtures;

use App\Entity\Cours;
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
        $manager->flush();
    }
}
