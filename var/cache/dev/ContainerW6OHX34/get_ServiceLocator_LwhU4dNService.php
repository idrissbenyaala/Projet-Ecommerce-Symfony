<?php

namespace ContainerW6OHX34;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LwhU4dNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lwhU4dN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lwhU4dN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'UserRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
