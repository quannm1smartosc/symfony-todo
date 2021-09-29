<?php

namespace App\Message;

class SmsNotification
{
    /**
     * @var string
     */
    private $message;
    private $users;

    public function __construct(string $message, array $users)
    {

        $this->message = $message;
        $this->users = $users;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        return $this->message = $message;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers($users)
    {
        return $this->users = $users;
    }
}