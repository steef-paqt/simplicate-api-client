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

class PostProjectServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PostProjectService::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PostProjectService::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\PostProjectService();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('use_in_resource_planner', $data)) {
            $object->setUseInResourcePlanner($data['use_in_resource_planner']);
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('write_hours_start_date', $data)) {
            $object->setWriteHoursStartDate($data['write_hours_start_date']);
        }
        if (\array_key_exists('write_hours_end_date', $data)) {
            $object->setWriteHoursEndDate($data['write_hours_end_date']);
        }
        if (\array_key_exists('vat_class_id', $data)) {
            $object->setVatClassId($data['vat_class_id']);
        }
        if (\array_key_exists('revenue_group_id', $data)) {
            $object->setRevenueGroupId($data['revenue_group_id']);
        }
        if (\array_key_exists('invoice_method', $data)) {
            $object->setInvoiceMethod($data['invoice_method']);
        }
        if (\array_key_exists('hour_types', $data)) {
            $values = [];
            foreach ($data['hour_types'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\PostProjectServiceHoursType::class, 'json', $context);
            }
            $object->setHourTypes($values);
        }
        if (\array_key_exists('default_service_id', $data)) {
            $object->setDefaultServiceId($data['default_service_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('explanation', $data)) {
            $object->setExplanation($data['explanation']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('track_hours', $data)) {
            $object->setTrackHours($data['track_hours']);
        }
        if (\array_key_exists('track_cost', $data)) {
            $object->setTrackCost($data['track_cost']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('useInResourcePlanner') && null !== $object->getUseInResourcePlanner()) {
            $data['use_in_resource_planner'] = $object->getUseInResourcePlanner();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('writeHoursStartDate') && null !== $object->getWriteHoursStartDate()) {
            $data['write_hours_start_date'] = $object->getWriteHoursStartDate();
        }
        if ($object->isInitialized('writeHoursEndDate') && null !== $object->getWriteHoursEndDate()) {
            $data['write_hours_end_date'] = $object->getWriteHoursEndDate();
        }
        if ($object->isInitialized('vatClassId') && null !== $object->getVatClassId()) {
            $data['vat_class_id'] = $object->getVatClassId();
        }
        if ($object->isInitialized('revenueGroupId') && null !== $object->getRevenueGroupId()) {
            $data['revenue_group_id'] = $object->getRevenueGroupId();
        }
        if ($object->isInitialized('invoiceMethod') && null !== $object->getInvoiceMethod()) {
            $data['invoice_method'] = $object->getInvoiceMethod();
        }
        if ($object->isInitialized('hourTypes') && null !== $object->getHourTypes()) {
            $values = [];
            foreach ($object->getHourTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['hour_types'] = $values;
        }
        if ($object->isInitialized('defaultServiceId') && null !== $object->getDefaultServiceId()) {
            $data['default_service_id'] = $object->getDefaultServiceId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('explanation') && null !== $object->getExplanation()) {
            $data['explanation'] = $object->getExplanation();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
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
        return [\Paqtcom\Simplicate\Model\PostProjectService::class => false];
    }
}
