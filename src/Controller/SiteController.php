<?php

namespace App\Controller;

use App\Service\SiteUpdateManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("testMailer")
     * @param SiteUpdateManager $siteUpdateManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function new(SiteUpdateManager $siteUpdateManager)
    {
        if($siteUpdateManager->notifyOfSiteUpdate()) {
            $this->addFlash('success', 'Notification sent');
        }

        return $this->redirectToRoute('todo_list');
    }
}