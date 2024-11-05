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

class PostHoursNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PostHours::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PostHours::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\PostHours();
        if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
            $data['hours'] = (float) $data['hours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('projectservice_id', $data)) {
            $object->setProjectserviceId($data['projectservice_id']);
        }
        if (\array_key_exists('type_id', $data)) {
            $object->setTypeId($data['type_id']);
        }
        if (\array_key_exists('approvalstatus_id', $data)) {
            $object->setApprovalstatusId($data['approvalstatus_id']);
        }
        if (\array_key_exists('external_item', $data)) {
            $object->setExternalItem($this->denormalizer->denormalize($data['external_item'], \Paqtcom\Simplicate\Model\PostCalendarItem::class, 'json', $context));
        }
        if (\array_key_exists('assignment_id', $data)) {
            $object->setAssignmentId($data['assignment_id']);
        }
        if (\array_key_exists('address_id', $data)) {
            $object->setAddressId($data['address_id']);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('duration_in_minutes', $data)) {
            $object->setDurationInMinutes($data['duration_in_minutes']);
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('is_time_defined', $data)) {
            $object->setIsTimeDefined($data['is_time_defined']);
        }
        if (\array_key_exists('is_recurring', $data)) {
            $object->setIsRecurring($data['is_recurring']);
        }
        if (\array_key_exists('recurrence', $data)) {
            $object->setRecurrence($this->denormalizer->denormalize($data['recurrence'], \Paqtcom\Simplicate\Model\Recurrence::class, 'json', $context));
        }
        if (\array_key_exists('is_external', $data)) {
            $object->setIsExternal($data['is_external']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Paqtcom\Simplicate\Model\Address::class, 'json', $context));
        }
        if (\array_key_exists('should_sync_to_cronofy', $data)) {
            $object->setShouldSyncToCronofy($data['should_sync_to_cronofy']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('projectserviceId') && null !== $object->getProjectserviceId()) {
            $data['projectservice_id'] = $object->getProjectserviceId();
        }
        if ($object->isInitialized('typeId') && null !== $object->getTypeId()) {
            $data['type_id'] = $object->getTypeId();
        }
        if ($object->isInitialized('approvalstatusId') && null !== $object->getApprovalstatusId()) {
            $data['approvalstatus_id'] = $object->getApprovalstatusId();
        }
        if ($object->isInitialized('externalItem') && null !== $object->getExternalItem()) {
            $data['external_item'] = $this->normalizer->normalize($object->getExternalItem(), 'json', $context);
        }
        if ($object->isInitialized('assignmentId') && null !== $object->getAssignmentId()) {
            $data['assignment_id'] = $object->getAssignmentId();
        }
        if ($object->isInitialized('addressId') && null !== $object->getAddressId()) {
            $data['address_id'] = $object->getAddressId();
        }
        if ($object->isInitialized('hours') && null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if ($object->isInitialized('durationInMinutes') && null !== $object->getDurationInMinutes()) {
            $data['duration_in_minutes'] = $object->getDurationInMinutes();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('isTimeDefined') && null !== $object->getIsTimeDefined()) {
            $data['is_time_defined'] = $object->getIsTimeDefined();
        }
        if ($object->isInitialized('isRecurring') && null !== $object->getIsRecurring()) {
            $data['is_recurring'] = $object->getIsRecurring();
        }
        if ($object->isInitialized('recurrence') && null !== $object->getRecurrence()) {
            $data['recurrence'] = $this->normalizer->normalize($object->getRecurrence(), 'json', $context);
        }
        if ($object->isInitialized('isExternal') && null !== $object->getIsExternal()) {
            $data['is_external'] = $object->getIsExternal();
        }
        if ($object->isInitialized('billable') && null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('shouldSyncToCronofy') && null !== $object->getShouldSyncToCronofy()) {
            $data['should_sync_to_cronofy'] = $object->getShouldSyncToCronofy();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\PostHours::class => false];
    }
}
