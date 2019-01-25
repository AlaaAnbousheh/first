<?php
/**
 * Created by PhpStorm.
 * User: Alaa Anbousheh
 * Date: 25/01/2019
 * Time: 15:07
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class loadArticleData extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $article1= new Article();
        $article1->setName("Weather");
        $article1->setDescription("it is about the daily report");
        $manager->persist($article1);
        $manager->flush();


        $article2= new Article();
        $article2->setName("Security");
        $article2->setDescription("it is about hacking methods");
        $manager->persist($article2);
        $manager->flush();


        $article3= new Article();
        $article3->setName("eating");
        $article3->setDescription("it is about how to eat the right way");
        $manager->persist($article3);
        $manager->flush();



    }
}