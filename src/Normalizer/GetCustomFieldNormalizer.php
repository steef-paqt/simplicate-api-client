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

class GetCustomFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetCustomField::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetCustomField::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetCustomField();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('render_type', $data)) {
            $object->setRenderType($data['render_type']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('filterable', $data)) {
            $object->setFilterable($data['filterable']);
        }
        if (\array_key_exists('searchable', $data)) {
            $object->setSearchable($data['searchable']);
        }
        if (\array_key_exists('mandatory', $data)) {
            $object->setMandatory($data['mandatory']);
        }
        if (\array_key_exists('value_type', $data)) {
            $object->setValueType($data['value_type']);
        }
        if (\array_key_exists('custom_field_group', $data)) {
            $object->setCustomFieldGroup($this->denormalizer->denormalize($data['custom_field_group'], \Paqtcom\Simplicate\Model\CustomFieldGroup::class, 'json', $context));
        }
        if (\array_key_exists('options', $data)) {
            $values = [];
            foreach ($data['options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\CustomFieldOption::class, 'json', $context);
            }
            $object->setOptions($values);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('value') && null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('renderType') && null !== $object->getRenderType()) {
            $data['render_type'] = $object->getRenderType();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('filterable') && null !== $object->getFilterable()) {
            $data['filterable'] = $object->getFilterable();
        }
        if ($object->isInitialized('searchable') && null !== $object->getSearchable()) {
            $data['searchable'] = $object->getSearchable();
        }
        if ($object->isInitialized('mandatory') && null !== $object->getMandatory()) {
            $data['mandatory'] = $object->getMandatory();
        }
        if ($object->isInitialized('valueType') && null !== $object->getValueType()) {
            $data['value_type'] = $object->getValueType();
        }
        if ($object->isInitialized('customFieldGroup') && null !== $object->getCustomFieldGroup()) {
            $data['custom_field_group'] = $this->normalizer->normalize($object->getCustomFieldGroup(), 'json', $context);
        }
        if ($object->isInitialized('options') && null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['options'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetCustomField::class => false];
    }
}
