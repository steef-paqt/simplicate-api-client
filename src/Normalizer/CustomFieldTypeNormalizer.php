<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CustomFieldTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\CustomFieldType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\CustomFieldType::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\CustomFieldType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('is_mandatory_configurable', $data)) {
            $object->setIsMandatoryConfigurable($data['is_mandatory_configurable']);
        }
        if (\array_key_exists('is_searchable_configurable', $data)) {
            $object->setIsSearchableConfigurable($data['is_searchable_configurable']);
        }
        if (\array_key_exists('is_filterable_configurable', $data)) {
            $object->setIsFilterableConfigurable($data['is_filterable_configurable']);
        }
        if (\array_key_exists('is_collective_mutatable_configurable', $data)) {
            $object->setIsCollectiveMutatableConfigurable($data['is_collective_mutatable_configurable']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('isMandatoryConfigurable') && null !== $object->getIsMandatoryConfigurable()) {
            $data['is_mandatory_configurable'] = $object->getIsMandatoryConfigurable();
        }
        if ($object->isInitialized('isSearchableConfigurable') && null !== $object->getIsSearchableConfigurable()) {
            $data['is_searchable_configurable'] = $object->getIsSearchableConfigurable();
        }
        if ($object->isInitialized('isFilterableConfigurable') && null !== $object->getIsFilterableConfigurable()) {
            $data['is_filterable_configurable'] = $object->getIsFilterableConfigurable();
        }
        if ($object->isInitialized('isCollectiveMutatableConfigurable') && null !== $object->getIsCollectiveMutatableConfigurable()) {
            $data['is_collective_mutatable_configurable'] = $object->getIsCollectiveMutatableConfigurable();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\CustomFieldType::class => false];
    }
}
