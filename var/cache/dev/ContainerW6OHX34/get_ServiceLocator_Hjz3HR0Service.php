<?php

namespace ContainerW6OHX34;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hjz3HR0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hjz3HR0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hjz3HR0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'entityManager' => '?',
            'slugger' => '?',
        ]);
    }
}
