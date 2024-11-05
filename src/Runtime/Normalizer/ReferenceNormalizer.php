<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $ref = [];
        $ref['$ref'] = (string) $object->getReferenceUri();

        return $ref;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof Reference;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [];
    }
}
