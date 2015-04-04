<?php

namespace Rottenwood\NexusBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\Config\FileLocator;

class RottenwoodNexusBundle extends Bundle {

    public function build(ContainerBuilder $containerBuilder) {
        $loader = new Loader\YamlFileLoader($containerBuilder, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
