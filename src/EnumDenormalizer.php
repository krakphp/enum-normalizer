<?php

namespace Krak\EnumNormalizer;

use MyCLabs\Enum\Enum;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EnumDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, $class, $format = null, array $context = array()) {
        return new $class($data);
    }

    public function supportsDenormalization($data, $type, $format = null) {
        return \is_subclass_of($type, Enum::class);
    }
}
