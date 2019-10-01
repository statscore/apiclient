<?php

namespace Statscore\Service\Serializer;

use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class DateTimeNullNormalizer implements NormalizerInterface, DenormalizerInterface
{
    private $dateTimeNormalizer;

    public function __construct(DateTimeNormalizer $dateTimeNormalizer)
    {
        $this->dateTimeNormalizer = $dateTimeNormalizer;
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->dateTimeNormalizer->supportsDenormalization($data, $type, $format);
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->dateTimeNormalizer->supportsNormalization($data, $format);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if ($data === '') {
            $data = null;
        }

        if ($data === null) {
            return $data;
        }

        return $this->dateTimeNormalizer->denormalize($data, $class, $format, $context);
    }

    public function normalize($object, $format = null, array $context = array())
    {
        return $this->dateTimeNormalizer->normalize($object, $format, $context);
    }
}
