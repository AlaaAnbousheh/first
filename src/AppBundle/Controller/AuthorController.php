<?php
/**
 * Created by PhpStorm.
 * User: Alaa Anbousheh
 * Date: 25/01/2019
 * Time: 15:25
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use FOS\RestBundle\Controller\Annotations as Rest;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends   AbstractFOSRestController

{

    /**
     *
     * @Rest\Get("/api/authors",name="author_name")
     * @return View
     */
    public function getAuthor( )
    {

        $entityManger= $this->getDoctrine()->getManager();

        $author=$entityManger->getRepository(Author::class)->findAll();
        return View::create($author,Response::HTTP_OK);


    }

    /**
     * @param $id
     * @Rest\Get("/api/authors/{id}",name="get_one_article_by_id")
     * @return View
     */
    public function getArticleById($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Author1 = $entityManager->getRepository(Author::class)->find($id);

        return View::create($Author1,Response::HTTP_OK);

    }

/**
* @Rest\Post("/api/authors",name="create_authors")
* @param Request $request
* @return View
*/

    public  function createAuthors(Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();

        $authors = new Author();
        $authors->setName($request->get('name'));
        $authors->setLastname($request->get('lastname'));
        $authors->setDateOfbirth($request->get('dateofbirth'));

        $entityManager->persist($authors);

        $entityManager->flush();

        return View::create($authors,Response::HTTP_CREATED);
        ddd

    }










}