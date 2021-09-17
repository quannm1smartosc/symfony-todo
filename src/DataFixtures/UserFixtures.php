<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('quannm1@smartosc.com');
        $user->setPassword($this->encoder->encodePassword($user, 'test'));
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $user1 = new User();
        $user1->setEmail('user@smartosc.com');
        $user1->setPassword($this->encoder->encodePassword($user1, 'test'));
        $user1->setRoles(['ROLE_USER']);
        $manager->persist($user1);

        $manager->flush();
    }
}
