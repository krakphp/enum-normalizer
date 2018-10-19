<?php

namespace Krak\EnumNormalizer\Bridge\Symfony\DependencyInjection;

use Krak\EnumNormalizer\EnumDenormalizer;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class EnumNormalizerExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container) {
        $container->register(EnumDenormalizer::class)->addTag('serializer.normalizer');
    }
}
