<?php
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class MicroKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = [
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new AppBundle\AppBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Knp\Bundle\TimeBundle\KnpTimeBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            // new FOS\UserBundle\FOSUserBundle(),
        ];

//        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
//        }

        return $bundles;
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->import('@AppBundle', '/', 'annotation');

//        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
             $routes->import('@WebProfilerBundle/Resources/config/routing/wdt.xml', '/_wdt');
             $routes->import('@WebProfilerBundle/Resources/config/routing/profiler.xml', '/_profiler');
//        }
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
//        $c
//            ->loadFromExtension('fos_user', [
//                'db_driver' => 'orm',
//                'firewall_name' => 'secured_area',
//                'user_class' => 'AppBundle\Entity\User',
//            ]);
//            ->loadFromExtension('swiftmailer', [
//                'transport', 'mail',
//                'host' => null,
//                'username' => null,
//                'password' => null,
//            ])
//      ;

        // $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
        $loader->load(__DIR__.'/config/config_' . $this->getEnvironment() . '.yml');
//        $loader->load(__DIR__.'/config/routing_' . $this->getEnvironment() . '.yml');
    }
}