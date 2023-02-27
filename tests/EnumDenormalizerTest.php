<?php

namespace Krak\EnumNormalizer;

use PHPUnit\Framework\TestCase;

final class EnumDenormalizerTest extends TestCase
{
    public function test_compatability_with_symfony() {
        $this->assertInstanceOf(EnumDenormalizer::class, new EnumDenormalizer());
    }
}