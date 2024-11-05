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

class GetReviewByWeekDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\GetReviewByWeekDetails::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\GetReviewByWeekDetails::class;
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
        $object = new \Steefdw\Simplicate\Model\GetReviewByWeekDetails();
        if (\array_key_exists('raster_hours', $data) && \is_int($data['raster_hours'])) {
            $data['raster_hours'] = (float) $data['raster_hours'];
        }
        if (\array_key_exists('written_hours', $data) && \is_int($data['written_hours'])) {
            $data['written_hours'] = (float) $data['written_hours'];
        }
        if (\array_key_exists('overtime', $data) && \is_int($data['overtime'])) {
            $data['overtime'] = (float) $data['overtime'];
        }
        if (\array_key_exists('leave', $data) && \is_int($data['leave'])) {
            $data['leave'] = (float) $data['leave'];
        }
        if (\array_key_exists('absence', $data) && \is_int($data['absence'])) {
            $data['absence'] = (float) $data['absence'];
        }
        if (\array_key_exists('mileage', $data) && \is_int($data['mileage'])) {
            $data['mileage'] = (float) $data['mileage'];
        }
        if (\array_key_exists('costs', $data) && \is_int($data['costs'])) {
            $data['costs'] = (float) $data['costs'];
        }
        if (\array_key_exists('declarability', $data) && \is_int($data['declarability'])) {
            $data['declarability'] = (float) $data['declarability'];
        }
        if (\array_key_exists('productivity', $data) && \is_int($data['productivity'])) {
            $data['productivity'] = (float) $data['productivity'];
        }
        if (\array_key_exists('productivity_target', $data) && \is_int($data['productivity_target'])) {
            $data['productivity_target'] = (float) $data['productivity_target'];
        }
        if (\array_key_exists('productivity_value', $data) && \is_int($data['productivity_value'])) {
            $data['productivity_value'] = (float) $data['productivity_value'];
        }
        if (\array_key_exists('productivity_value_target', $data) && \is_int($data['productivity_value_target'])) {
            $data['productivity_value_target'] = (float) $data['productivity_value_target'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], \Steefdw\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('status_id', $data)) {
            $object->setStatusId($data['status_id']);
        }
        if (\array_key_exists('status_category', $data)) {
            $object->setStatusCategory($data['status_category']);
        }
        if (\array_key_exists('status_label', $data)) {
            $object->setStatusLabel($data['status_label']);
        }
        if (\array_key_exists('raster_hours', $data)) {
            $object->setRasterHours($data['raster_hours']);
        }
        if (\array_key_exists('written_hours', $data)) {
            $object->setWrittenHours($data['written_hours']);
        }
        if (\array_key_exists('overtime', $data)) {
            $object->setOvertime($data['overtime']);
        }
        if (\array_key_exists('leave', $data)) {
            $object->setLeave($data['leave']);
        }
        if (\array_key_exists('absence', $data)) {
            $object->setAbsence($data['absence']);
        }
        if (\array_key_exists('mileage', $data)) {
            $object->setMileage($data['mileage']);
        }
        if (\array_key_exists('costs', $data)) {
            $object->setCosts($data['costs']);
        }
        if (\array_key_exists('declarability', $data)) {
            $object->setDeclarability($data['declarability']);
        }
        if (\array_key_exists('productivity', $data)) {
            $object->setProductivity($data['productivity']);
        }
        if (\array_key_exists('productivity_target', $data)) {
            $object->setProductivityTarget($data['productivity_target']);
        }
        if (\array_key_exists('productivity_value', $data)) {
            $object->setProductivityValue($data['productivity_value']);
        }
        if (\array_key_exists('productivity_value_target', $data)) {
            $object->setProductivityValueTarget($data['productivity_value_target']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['status_id'] = $object->getStatusId();
        }
        if ($object->isInitialized('statusCategory') && null !== $object->getStatusCategory()) {
            $data['status_category'] = $object->getStatusCategory();
        }
        if ($object->isInitialized('statusLabel') && null !== $object->getStatusLabel()) {
            $data['status_label'] = $object->getStatusLabel();
        }
        if ($object->isInitialized('rasterHours') && null !== $object->getRasterHours()) {
            $data['raster_hours'] = $object->getRasterHours();
        }
        if ($object->isInitialized('writtenHours') && null !== $object->getWrittenHours()) {
            $data['written_hours'] = $object->getWrittenHours();
        }
        if ($object->isInitialized('overtime') && null !== $object->getOvertime()) {
            $data['overtime'] = $object->getOvertime();
        }
        if ($object->isInitialized('leave') && null !== $object->getLeave()) {
            $data['leave'] = $object->getLeave();
        }
        if ($object->isInitialized('absence') && null !== $object->getAbsence()) {
            $data['absence'] = $object->getAbsence();
        }
        if ($object->isInitialized('mileage') && null !== $object->getMileage()) {
            $data['mileage'] = $object->getMileage();
        }
        if ($object->isInitialized('costs') && null !== $object->getCosts()) {
            $data['costs'] = $object->getCosts();
        }
        if ($object->isInitialized('declarability') && null !== $object->getDeclarability()) {
            $data['declarability'] = $object->getDeclarability();
        }
        if ($object->isInitialized('productivity') && null !== $object->getProductivity()) {
            $data['productivity'] = $object->getProductivity();
        }
        if ($object->isInitialized('productivityTarget') && null !== $object->getProductivityTarget()) {
            $data['productivity_target'] = $object->getProductivityTarget();
        }
        if ($object->isInitialized('productivityValue') && null !== $object->getProductivityValue()) {
            $data['productivity_value'] = $object->getProductivityValue();
        }
        if ($object->isInitialized('productivityValueTarget') && null !== $object->getProductivityValueTarget()) {
            $data['productivity_value_target'] = $object->getProductivityValueTarget();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\GetReviewByWeekDetails::class => false];
    }
}
