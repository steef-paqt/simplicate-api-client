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

class GetReviewByWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetReviewByWeek::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetReviewByWeek::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetReviewByWeek();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (\array_key_exists('employee_name', $data)) {
            $object->setEmployeeName($data['employee_name']);
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

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('employeeName') && null !== $object->getEmployeeName()) {
            $data['employee_name'] = $object->getEmployeeName();
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

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetReviewByWeek::class => false];
    }
}
