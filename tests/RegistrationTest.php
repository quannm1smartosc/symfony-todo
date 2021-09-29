<?php

namespace App\Tests;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
    /** @var EntityManagerInterface */

    private $entityManager;

    public function test_registration_screen_can_be_render()
    {
        $this->assertTrue(true);
    }

    public function can_create_user_into_database()
    {
        $article = new Article();
        $article->setAuthor('Minh Quan');
        $article->setDes('Test 1');
        $article->setTitle('Test Title');

        $this->entityManager->persist($article);
        $this->entityManager->flush();

        $record = $this->entityManager->getRepository(Article::class)->findOneBy([
            'title' => 'Test Title',
        ]);

        $this->assertEquals('Minh Quan', $record->getAuthor());
        $this->assertEquals('Test 1', $record->getDes());
        $this->assertEquals('Test Title', $record->getTitle());


    }
}