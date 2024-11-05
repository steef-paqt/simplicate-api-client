<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Address;
use Paqtcom\Simplicate\Model\GetHoursSimple;
use Paqtcom\Simplicate\Model\Recurrence;
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

class GetHoursSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetHoursSimple::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetHoursSimple::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetHoursSimple();
        if (array_key_exists('hours', $data) && is_int($data['hours'])) {
            $data['hours'] = (float) $data['hours'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (array_key_exists('duration_in_minutes', $data)) {
            $object->setDurationInMinutes($data['duration_in_minutes']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (array_key_exists('is_time_defined', $data)) {
            $object->setIsTimeDefined($data['is_time_defined']);
        }
        if (array_key_exists('is_recurring', $data)) {
            $object->setIsRecurring($data['is_recurring']);
        }
        if (array_key_exists('recurrence', $data)) {
            $object->setRecurrence($this->denormalizer->denormalize($data['recurrence'], Recurrence::class, 'json', $context));
        }
        if (array_key_exists('is_external', $data)) {
            $object->setIsExternal($data['is_external']);
        }
        if (array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], Address::class, 'json', $context));
        }
        if (array_key_exists('assignment_id', $data)) {
            $object->setAssignmentId($data['assignment_id']);
        }
        if (array_key_exists('should_sync_to_cronofy', $data)) {
            $object->setShouldSyncToCronofy($data['should_sync_to_cronofy']);
        }
        if (array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
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
        return [GetHoursSimple::class => false];
    }
}
