<?php

namespace Application\Sonata\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Application\Sonata\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->setEmail('admin@admin.org');
        $userAdmin->setEnabled(true);
        $userAdmin->setEnabled(true);
        $userAdmin->addRole('ROLE_ADMIN');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
