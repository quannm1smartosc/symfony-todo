<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{

    /**
     * @Route("/", name="todo_list")
     */
    public function index()
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', array(
            'articles' => $articles
        ));
    }

    /**
     * @Route("/admin", name="admin_panel")
     */
    public function apanel()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('articles/test.html.twig');
    }

    /**
     * @Route("/login/test")
     */
    public function loginTest()
    {
        return $this->render('/articles/logintest.html.twig');
    }
}
/**
 * voter, service, message
 */