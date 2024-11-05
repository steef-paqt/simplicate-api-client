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

class SalesServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\SalesService::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\SalesService::class;
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
        $object = new \Steefdw\Simplicate\Model\SalesService();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sales_id', $data)) {
            $object->setSalesId($data['sales_id']);
        }
        if (\array_key_exists('default_service_id', $data)) {
            $object->setDefaultServiceId($data['default_service_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('invoice_method', $data)) {
            $object->setInvoiceMethod($data['invoice_method']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('show_itemtype', $data)) {
            $object->setShowItemtype($data['show_itemtype']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('subscription_cycle', $data)) {
            $object->setSubscriptionCycle($data['subscription_cycle']);
        }
        if (\array_key_exists('explanation', $data)) {
            $object->setExplanation($data['explanation']);
        }
        if (\array_key_exists('track_hours', $data)) {
            $object->setTrackHours($data['track_hours']);
        }
        if (\array_key_exists('track_cost', $data)) {
            $object->setTrackCost($data['track_cost']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('salesId') && null !== $object->getSalesId()) {
            $data['sales_id'] = $object->getSalesId();
        }
        if ($object->isInitialized('defaultServiceId') && null !== $object->getDefaultServiceId()) {
            $data['default_service_id'] = $object->getDefaultServiceId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('invoiceMethod') && null !== $object->getInvoiceMethod()) {
            $data['invoice_method'] = $object->getInvoiceMethod();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('showItemtype') && null !== $object->getShowItemtype()) {
            $data['show_itemtype'] = $object->getShowItemtype();
        }
        if ($object->isInitialized('total') && null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('subscriptionCycle') && null !== $object->getSubscriptionCycle()) {
            $data['subscription_cycle'] = $object->getSubscriptionCycle();
        }
        if ($object->isInitialized('explanation') && null !== $object->getExplanation()) {
            $data['explanation'] = $object->getExplanation();
        }
        if ($object->isInitialized('trackHours') && null !== $object->getTrackHours()) {
            $data['track_hours'] = $object->getTrackHours();
        }
        if ($object->isInitialized('trackCost') && null !== $object->getTrackCost()) {
            $data['track_cost'] = $object->getTrackCost();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\SalesService::class => false];
    }
}
