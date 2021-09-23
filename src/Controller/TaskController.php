<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\TaskType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends AbstractController
{
    /**
     * @Route("/article/new")
     */
    public function new(
        Request $request,
        EntityManagerInterface $em
    ) {
        $article = new Article();
        $form = $this->createForm(TaskType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $em->persist($article);
            $em->flush();
            $this->addFlash('success', 'Added new task');

            return $this->redirectToRoute('todo_list');
        }

        return $this->render('/articles/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/article/edit/{id}", name="edit_task")
     * @IsGranted("ROLE_ADMIN")
     */
    public function edit(
        Request $request,
        Article $article,
        EntityManagerInterface $em
    ) {
        $form = $this->createForm(TaskType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            $this->addFlash('success', 'Updated task');

            return $this->redirectToRoute('todo_list');
        }

        return $this->render('articles/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="task_delete")
     */
    public function delete(
        Article $id,
        EntityManagerInterface $em
    ) {
        $em->remove($id);
        $em->flush();
        $this->addFlash('success','Deleted successfully');

        return $this->redirectToRoute('todo_list');
    }

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show(Article $article)
    {
        return $this->render('articles/show.html.twig', array(
            'article' => $article
        ));
    }
}