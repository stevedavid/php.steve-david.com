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
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->mount('/_wdt', $routes->import('@WebProfilerBundle/Resources/config/routing/wdt.xml'));
        $routes->mount('/_profiler', $routes->import('@WebProfilerBundle/Resources/config/routing/profiler.xml'));

        $routes->mount('/', $routes->import('@AppBundle', 'annotation'));
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $c
            ->loadFromExtension('framework', [
                'secret' => 'b16d6e5efe6200958bf330417500971d1ae7f871',
                'form' => null,
                'profiler' => null,
                'translator' => [
                    'fallback' => 'fr',
                ],
                'templating' => [
                    'engines' => ['twig']
            ],
        ])
            ->loadFromExtension('web_profiler', [
                'toolbar' => true,
                'position' => 'bottom',
            ])
//            ->loadFromExtension('swiftmailer', [
//                'transport', 'mail',
//                'host' => null,
//                'username' => null,
//                'password' => null,
//            ])
        ;

        // $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
        $loader->load(__DIR__.'/config/services.yml');
        $loader->load(__DIR__.'/config/security.yml');
    }
}