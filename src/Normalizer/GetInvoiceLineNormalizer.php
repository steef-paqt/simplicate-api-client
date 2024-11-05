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

class GetInvoiceLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\GetInvoiceLine::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\GetInvoiceLine::class;
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
        $object = new \Steefdw\Simplicate\Model\GetInvoiceLine();
        if (\array_key_exists('total_vat', $data) && \is_int($data['total_vat'])) {
            $data['total_vat'] = (float) $data['total_vat'];
        }
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('revenue_group', $data)) {
            $object->setRevenueGroup($this->denormalizer->denormalize($data['revenue_group'], \Steefdw\Simplicate\Model\RevenueGroup::class, 'json', $context));
        }
        if (\array_key_exists('default_service_id', $data)) {
            $object->setDefaultServiceId($data['default_service_id']);
        }
        if (\array_key_exists('vat_class', $data)) {
            $object->setVatClass($this->denormalizer->denormalize($data['vat_class'], \Steefdw\Simplicate\Model\VatClass::class, 'json', $context));
        }
        if (\array_key_exists('total_vat', $data)) {
            $object->setTotalVat($data['total_vat']);
        }
        if (\array_key_exists('service_id', $data)) {
            $object->setServiceId($data['service_id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
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
        if ($object->isInitialized('revenueGroup') && null !== $object->getRevenueGroup()) {
            $data['revenue_group'] = $this->normalizer->normalize($object->getRevenueGroup(), 'json', $context);
        }
        if ($object->isInitialized('defaultServiceId') && null !== $object->getDefaultServiceId()) {
            $data['default_service_id'] = $object->getDefaultServiceId();
        }
        if ($object->isInitialized('vatClass') && null !== $object->getVatClass()) {
            $data['vat_class'] = $this->normalizer->normalize($object->getVatClass(), 'json', $context);
        }
        if ($object->isInitialized('totalVat') && null !== $object->getTotalVat()) {
            $data['total_vat'] = $object->getTotalVat();
        }
        if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
            $data['service_id'] = $object->getServiceId();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\GetInvoiceLine::class => false];
    }
}
