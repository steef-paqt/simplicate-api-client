<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetSalesService;
use Paqtcom\Simplicate\Model\GetSalesServiceCostType;
use Paqtcom\Simplicate\Model\GetSalesServiceHoursType;
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
use function is_int;

class GetSalesServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetSalesService::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetSalesService::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetSalesService();
        if (array_key_exists('amount', $data) && is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (array_key_exists('price', $data) && is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('invoice_date', $data)) {
            $object->setInvoiceDate($data['invoice_date']);
        }
        if (array_key_exists('hour_types', $data)) {
            $values = [];
            foreach ($data['hour_types'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetSalesServiceHoursType::class, 'json', $context);
            }
            $object->setHourTypes($values);
        }
        if (array_key_exists('cost_types', $data)) {
            $values_1 = [];
            foreach ($data['cost_types'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, GetSalesServiceCostType::class, 'json', $context);
            }
            $object->setCostTypes($values_1);
        }
        if (array_key_exists('subscription_cycle', $data)) {
            $object->setSubscriptionCycle($data['subscription_cycle']);
        }
        if (array_key_exists('track_cost', $data)) {
            $object->setTrackCost($data['track_cost']);
        }
        if (array_key_exists('vat_class', $data)) {
            $object->setVatClass($this->denormalizer->denormalize($data['vat_class'], VatClass::class, 'json', $context));
        }
        if (array_key_exists('created_at', $data)) {
            $values_2 = [];
            foreach ($data['created_at'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, GetSalesServiceHoursType::class, 'json', $context);
            }
            $object->setCreatedAt($values_2);
        }
        if (array_key_exists('updated_at', $data)) {
            $values_3 = [];
            foreach ($data['updated_at'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, GetSalesServiceHoursType::class, 'json', $context);
            }
            $object->setUpdatedAt($values_3);
        }
        if (array_key_exists('sales_id', $data)) {
            $object->setSalesId($data['sales_id']);
        }
        if (array_key_exists('default_service_id', $data)) {
            $object->setDefaultServiceId($data['default_service_id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('invoice_method', $data)) {
            $object->setInvoiceMethod($data['invoice_method']);
        }
        if (array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (array_key_exists('show_itemtype', $data)) {
            $object->setShowItemtype($data['show_itemtype']);
        }
        if (array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (array_key_exists('explanation', $data)) {
            $object->setExplanation($data['explanation']);
        }
        if (array_key_exists('track_hours', $data)) {
            $object->setTrackHours($data['track_hours']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('invoiceDate') && null !== $object->getInvoiceDate()) {
            $data['invoice_date'] = $object->getInvoiceDate();
        }
        if ($object->isInitialized('hourTypes') && null !== $object->getHourTypes()) {
            $values = [];
            foreach ($object->getHourTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['hour_types'] = $values;
        }
        if ($object->isInitialized('costTypes') && null !== $object->getCostTypes()) {
            $values_1 = [];
            foreach ($object->getCostTypes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['cost_types'] = $values_1;
        }
        if ($object->isInitialized('subscriptionCycle') && null !== $object->getSubscriptionCycle()) {
            $data['subscription_cycle'] = $object->getSubscriptionCycle();
        }
        if ($object->isInitialized('trackCost') && null !== $object->getTrackCost()) {
            $data['track_cost'] = $object->getTrackCost();
        }
        if ($object->isInitialized('vatClass') && null !== $object->getVatClass()) {
            $data['vat_class'] = $this->normalizer->normalize($object->getVatClass(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $values_2 = [];
            foreach ($object->getCreatedAt() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['created_at'] = $values_2;
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $values_3 = [];
            foreach ($object->getUpdatedAt() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['updated_at'] = $values_3;
        }
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
        if ($object->isInitialized('explanation') && null !== $object->getExplanation()) {
            $data['explanation'] = $object->getExplanation();
        }
        if ($object->isInitialized('trackHours') && null !== $object->getTrackHours()) {
            $data['track_hours'] = $object->getTrackHours();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetSalesService::class => false];
    }
}
