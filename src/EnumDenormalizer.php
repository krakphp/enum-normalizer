<?php

namespace Krak\EnumNormalizer;

use MyCLabs\Enum\Enum;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EnumDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $type, string $format = null, array $context = array()) {
        return new $type($data);
    }

    public function supportsDenormalization($data, string $type, string $format = null) {
        return \is_subclass_of($type, Enum::class);
    }
}
