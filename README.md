# Enum Normalizer

This contains a Symfony Denormalizer for the `myclabs/php-enum` `MyCLabs\Enum\Enum` class.

## Installation

Install with composer at `krak/enum-normalizer`.

## Usage

## EnumDenormalizer

```php
$denormalizer = new Krak\EnumNormalizer\EnumDenormalizer();
$enum = $denormalizer->denormalize('value', AcmeEnum::class);
```

## Symfony Integration

Register the EnumNormalizerBundle in your kernel in `config/bundles.php`:

```php
<?php

return [
  //...
  Krak\EnumNormalizer\Bridge\Symfony\EnumNormalizerBundle::class => ['all' => true],
];
```
