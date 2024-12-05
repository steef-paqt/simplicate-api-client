<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\HoursType;
use Paqtcom\Simplicate\Model\VatClass;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use function array_key_exists;
use function is_array;

class HoursTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === HoursType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === HoursType::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new HoursType();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (array_key_exists('blocked', $data)) {
            $object->setBlocked($data['blocked']);
        }
        if (array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (array_key_exists('vatclass', $data)) {
            $object->setVatclass($this->denormalizer->denormalize($data['vatclass'], VatClass::class, 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('blocked') && null !== $object->getBlocked()) {
            $data['blocked'] = $object->getBlocked();
        }
        if ($object->isInitialized('color') && null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [HoursType::class => false];
    }
}
