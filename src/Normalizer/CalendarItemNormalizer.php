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

class CalendarItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\CalendarItem::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\CalendarItem::class;
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
        $object = new \Paqtcom\Simplicate\Model\CalendarItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('is_recurring', $data)) {
            $object->setIsRecurring($data['is_recurring']);
        }
        if (\array_key_exists('is_read_only', $data)) {
            $object->setIsReadOnly($data['is_read_only']);
        }
        if (\array_key_exists('is_time_defined', $data)) {
            $object->setIsTimeDefined($data['is_time_defined']);
        }
        if (\array_key_exists('organizer_email', $data)) {
            $object->setOrganizerEmail($data['organizer_email']);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
        }
        if (\array_key_exists('obfuscate', $data)) {
            $object->setObfuscate($data['obfuscate']);
        }
        if (\array_key_exists('hours_id', $data)) {
            $object->setHoursId($data['hours_id']);
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
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('hours') && null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('isRecurring') && null !== $object->getIsRecurring()) {
            $data['is_recurring'] = $object->getIsRecurring();
        }
        if ($object->isInitialized('isReadOnly') && null !== $object->getIsReadOnly()) {
            $data['is_read_only'] = $object->getIsReadOnly();
        }
        if ($object->isInitialized('isTimeDefined') && null !== $object->getIsTimeDefined()) {
            $data['is_time_defined'] = $object->getIsTimeDefined();
        }
        if ($object->isInitialized('organizerEmail') && null !== $object->getOrganizerEmail()) {
            $data['organizer_email'] = $object->getOrganizerEmail();
        }
        if ($object->isInitialized('private') && null !== $object->getPrivate()) {
            $data['private'] = $object->getPrivate();
        }
        if ($object->isInitialized('obfuscate') && null !== $object->getObfuscate()) {
            $data['obfuscate'] = $object->getObfuscate();
        }
        if ($object->isInitialized('hoursId') && null !== $object->getHoursId()) {
            $data['hours_id'] = $object->getHoursId();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\CalendarItem::class => false];
    }
}
