<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Steefdw\Simplicate\Runtime\Normalizer\CheckArray;
use Steefdw\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostPurchaseTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PostPurchaseType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PostPurchaseType::class;
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
        $object = new \Steefdw\Simplicate\Model\PostPurchaseType();
        if (\array_key_exists('tariff', $data) && \is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('blocked', $data)) {
            $object->setBlocked($data['blocked']);
        }
        if (\array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (\array_key_exists('is_unit_tariff', $data)) {
            $object->setIsUnitTariff($data['is_unit_tariff']);
        }
        if (\array_key_exists('unit_name', $data)) {
            $object->setUnitName($data['unit_name']);
        }
        if (\array_key_exists('is_attachment_allowed', $data)) {
            $object->setIsAttachmentAllowed($data['is_attachment_allowed']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('blocked') && null !== $object->getBlocked()) {
            $data['blocked'] = $object->getBlocked();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('isUnitTariff') && null !== $object->getIsUnitTariff()) {
            $data['is_unit_tariff'] = $object->getIsUnitTariff();
        }
        if ($object->isInitialized('unitName') && null !== $object->getUnitName()) {
            $data['unit_name'] = $object->getUnitName();
        }
        if ($object->isInitialized('isAttachmentAllowed') && null !== $object->getIsAttachmentAllowed()) {
            $data['is_attachment_allowed'] = $object->getIsAttachmentAllowed();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\PostPurchaseType::class => false];
    }
}
