<?php

namespace App\Service;

class MessageGenerator
{
    public function getHappyMessage(): string
    {
        $messages = ['Test 1', 'Test 2', 'Test 3'];

        $index = array_rand($messages);

        return $messages[$index];
    }
}