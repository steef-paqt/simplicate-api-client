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

class GetTimesheetRowItemtypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetTimesheetRowItemtype::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetTimesheetRowItemtype::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetTimesheetRowItemtype();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('unit_name', $data)) {
            $object->setUnitName($data['unit_name']);
        }
        if (\array_key_exists('is_unit_tariff', $data)) {
            $object->setIsUnitTariff($data['is_unit_tariff']);
        }
        if (\array_key_exists('is_attachment_allowed', $data)) {
            $object->setIsAttachmentAllowed($data['is_attachment_allowed']);
        }
        if (\array_key_exists('has_workflow', $data)) {
            $object->setHasWorkflow($data['has_workflow']);
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
        if ($object->isInitialized('unitName') && null !== $object->getUnitName()) {
            $data['unit_name'] = $object->getUnitName();
        }
        if ($object->isInitialized('isUnitTariff') && null !== $object->getIsUnitTariff()) {
            $data['is_unit_tariff'] = $object->getIsUnitTariff();
        }
        if ($object->isInitialized('isAttachmentAllowed') && null !== $object->getIsAttachmentAllowed()) {
            $data['is_attachment_allowed'] = $object->getIsAttachmentAllowed();
        }
        if ($object->isInitialized('hasWorkflow') && null !== $object->getHasWorkflow()) {
            $data['has_workflow'] = $object->getHasWorkflow();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetTimesheetRowItemtype::class => false];
    }
}
