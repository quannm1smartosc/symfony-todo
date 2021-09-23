<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SiteUpdateManager
{
    private $messageGenerator;
    private $mailer;
    private $adminEmail;

    public function __construct(
        MessageGenerator $messageGenerator,
        MailerInterface $mailer,
        string $adminEmail
    ) {

        $this->messageGenerator = $messageGenerator;
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
    }

    public function notifyOfSiteUpdate(): bool
    {
        $happyMessage = $this->messageGenerator->getHappyMessage();

        $email = (new Email())
            ->from('test@gmail.com')
            ->to($this->adminEmail)
            ->subject('Using Service')
            ->text('Test Service ' .$happyMessage);

        $this->mailer->send($email);

        return true;
    }
}