<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),

            // sonata foundation bundles
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            // User-related bundles
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),

            // sonata admin
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),

            // fixtures
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),

            // vich uploader
            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
            new Vich\UploaderBundle\VichUploaderBundle(),

            // sandbox bundles
            new KPhoen\Bundle\SingleUploadableBundle\KPhoenSingleUploadableBundle(),
            new KPhoen\Bundle\MultipleUploadableBundle\KPhoenMultipleUploadableBundle(),
            new KPhoen\Bundle\SandboxBundle\KPhoenSandboxBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
