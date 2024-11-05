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

class PostDefaultServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PostDefaultService::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PostDefaultService::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\PostDefaultService();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('vat_class_id', $data)) {
            $object->setVatClassId($data['vat_class_id']);
        }
        if (\array_key_exists('revenue_group_id', $data)) {
            $object->setRevenueGroupId($data['revenue_group_id']);
        }
        if (\array_key_exists('my_organization_profile_id', $data)) {
            $object->setMyOrganizationProfileId($data['my_organization_profile_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('price_editable', $data)) {
            $object->setPriceEditable($data['price_editable']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('vatClassId') && null !== $object->getVatClassId()) {
            $data['vat_class_id'] = $object->getVatClassId();
        }
        if ($object->isInitialized('revenueGroupId') && null !== $object->getRevenueGroupId()) {
            $data['revenue_group_id'] = $object->getRevenueGroupId();
        }
        if ($object->isInitialized('myOrganizationProfileId') && null !== $object->getMyOrganizationProfileId()) {
            $data['my_organization_profile_id'] = $object->getMyOrganizationProfileId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('priceEditable') && null !== $object->getPriceEditable()) {
            $data['price_editable'] = $object->getPriceEditable();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\PostDefaultService::class => false];
    }
}
