<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $des;

    public function getId(): ?int
    {
        return $this->id;
    }

    //Getter and Setter Methods

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getDes() {
        return $this->des;
    }

    public function setDes($des) {
        $this->des = $des;
    }
}
