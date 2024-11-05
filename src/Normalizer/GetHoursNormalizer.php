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

class GetHoursNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetHours::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetHours::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\GetHours();
        if (\array_key_exists('tariff', $data) && \is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
            $data['hours'] = (float) $data['hours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \Paqtcom\Simplicate\Model\GetProjectSimple::class, 'json', $context));
        }
        if (\array_key_exists('projectservice', $data)) {
            $object->setProjectservice($this->denormalizer->denormalize($data['projectservice'], \Paqtcom\Simplicate\Model\GetHoursHoursProjectService::class, 'json', $context));
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('approvalstatus', $data)) {
            $object->setApprovalstatus($this->denormalizer->denormalize($data['approvalstatus'], \Paqtcom\Simplicate\Model\GetApprovalStatus::class, 'json', $context));
        }
        if (\array_key_exists('invoice_status', $data)) {
            $object->setInvoiceStatus($data['invoice_status']);
        }
        if (\array_key_exists('invoice_id', $data)) {
            $object->setInvoiceId($data['invoice_id']);
        }
        if (\array_key_exists('invoiceline_id', $data)) {
            $object->setInvoicelineId($data['invoiceline_id']);
        }
        if (\array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (\array_key_exists('custom_fields', $data)) {
            $values = [];
            foreach ($data['custom_fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\GetCustomField::class, 'json', $context);
            }
            $object->setCustomFields($values);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
        }
        if (\array_key_exists('is_editable', $data)) {
            $object->setIsEditable($this->denormalizer->denormalize($data['is_editable'], \Paqtcom\Simplicate\Model\IsSatisfied::class, 'json', $context));
        }
        if (\array_key_exists('is_deletable', $data)) {
            $object->setIsDeletable($this->denormalizer->denormalize($data['is_deletable'], \Paqtcom\Simplicate\Model\IsSatisfied::class, 'json', $context));
        }
        if (\array_key_exists('leave_status', $data)) {
            $object->setLeaveStatus($this->denormalizer->denormalize($data['leave_status'], \Paqtcom\Simplicate\Model\LeaveStatus::class, 'json', $context));
        }
        if (\array_key_exists('leave_id', $data)) {
            $object->setLeaveId($data['leave_id']);
        }
        if (\array_key_exists('absence_id', $data)) {
            $object->setAbsenceId($data['absence_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('corrections', $data)) {
            $object->setCorrections($this->denormalizer->denormalize($data['corrections'], \Paqtcom\Simplicate\Model\Correction::class, 'json', $context));
        }
        if (\array_key_exists('mileage', $data)) {
            $object->setMileage($this->denormalizer->denormalize($data['mileage'], \Paqtcom\Simplicate\Model\GetMileageSimple::class, 'json', $context));
        }
        if (\array_key_exists('is_productive', $data)) {
            $object->setIsProductive($data['is_productive']);
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
        if (\array_key_exists('assignment_id', $data)) {
            $object->setAssignmentId($data['assignment_id']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('projectservice') && null !== $object->getProjectservice()) {
            $data['projectservice'] = $this->normalizer->normalize($object->getProjectservice(), 'json', $context);
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('approvalstatus') && null !== $object->getApprovalstatus()) {
            $data['approvalstatus'] = $this->normalizer->normalize($object->getApprovalstatus(), 'json', $context);
        }
        if ($object->isInitialized('invoiceStatus') && null !== $object->getInvoiceStatus()) {
            $data['invoice_status'] = $object->getInvoiceStatus();
        }
        if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
            $data['invoice_id'] = $object->getInvoiceId();
        }
        if ($object->isInitialized('invoicelineId') && null !== $object->getInvoicelineId()) {
            $data['invoiceline_id'] = $object->getInvoicelineId();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom_fields'] = $values;
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('locked') && null !== $object->getLocked()) {
            $data['locked'] = $object->getLocked();
        }
        if ($object->isInitialized('isEditable') && null !== $object->getIsEditable()) {
            $data['is_editable'] = $this->normalizer->normalize($object->getIsEditable(), 'json', $context);
        }
        if ($object->isInitialized('isDeletable') && null !== $object->getIsDeletable()) {
            $data['is_deletable'] = $this->normalizer->normalize($object->getIsDeletable(), 'json', $context);
        }
        if ($object->isInitialized('leaveStatus') && null !== $object->getLeaveStatus()) {
            $data['leave_status'] = $this->normalizer->normalize($object->getLeaveStatus(), 'json', $context);
        }
        if ($object->isInitialized('leaveId') && null !== $object->getLeaveId()) {
            $data['leave_id'] = $object->getLeaveId();
        }
        if ($object->isInitialized('absenceId') && null !== $object->getAbsenceId()) {
            $data['absence_id'] = $object->getAbsenceId();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('corrections') && null !== $object->getCorrections()) {
            $data['corrections'] = $this->normalizer->normalize($object->getCorrections(), 'json', $context);
        }
        if ($object->isInitialized('mileage') && null !== $object->getMileage()) {
            $data['mileage'] = $this->normalizer->normalize($object->getMileage(), 'json', $context);
        }
        if ($object->isInitialized('isProductive') && null !== $object->getIsProductive()) {
            $data['is_productive'] = $object->getIsProductive();
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
        if ($object->isInitialized('assignmentId') && null !== $object->getAssignmentId()) {
            $data['assignment_id'] = $object->getAssignmentId();
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
        return [\Paqtcom\Simplicate\Model\GetHours::class => false];
    }
}
