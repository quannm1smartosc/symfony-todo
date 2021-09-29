<?php

namespace App\MessageHandler;

use App\Message\SmsNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SmsNotificationHandler implements MessageHandlerInterface
{
    /**
     * @param SmsNotification $message
     */
    public function __invoke(SmsNotification $message)
    {
        // TODO: Implement __invoke() method.
        foreach ($message->getUsers() as $users) {
            echo 'Send notification to '. $users,"\n";
        }
    }
}