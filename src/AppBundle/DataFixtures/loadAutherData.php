<?php
/**
 * Created by PhpStorm.
 * User: Alaa Anbousheh
 * Date: 25/01/2019
 * Time: 14:43
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class loadAutherData extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $date = new \DateTime();
        $date->setDate(1989, 2, 3);

        $author1= new Author();
        $author1->setName("Fadoa");
        $author1->setDateOfbirth($date);
        $author1->setLastname("Tokan");
        $manager->persist($author1);
        $manager->flush();

        $date = date_create('1930-04-01');

        $author2= new Author();
        $author2->setName("Nizar");
        $author2->setDateOfbirth($date);
        $author2->setLastname("Kabani");
        $manager->persist($author2);
        $manager->flush();
        $date = date_create('1970-01-01');
        $author3= new Author();
        $author3->setName("Jobran");
        $author3->setDateOfbirth($date);
        $author3->setLastname("Khalil Jobran");
        $manager->persist($author3);
        $manager->flush();
    }
}