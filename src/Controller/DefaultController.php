<?php

namespace App\Controller;

use App\Message\SmsNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/testM")
     */
    public function index(MessageBusInterface $bus, Request $request)
    {
        $users = ['Quan', 'Nhat', 'Test'];

        $bus->dispatch(new SmsNotification(
            $request->query->get('', 'Hello'),
            $users
        ));

        return new Response('<html><body>Ok.</body></html>');
    }
}