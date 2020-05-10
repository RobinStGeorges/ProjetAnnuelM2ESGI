<?php
use App\Entity\Cours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CoursFixtures extends Fixture{

    /**
     * Load data fixtures with the passed EntityManager
     * @param \Doctrine\Persistence\ObjectManager $manager
     */
    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        for ($count = 0; $count < 20; $count++) {
            $cours = new Cours();
            $cours->setTitle("Titre " . $count);
            $cours->setContent("content" . $count);
            $cours->setPicturePath("imgDefault");
            $cours->setVideoPath("videoDefault");
            $manager->persist($cours);
        }
        $manager->flush();
    }
}
