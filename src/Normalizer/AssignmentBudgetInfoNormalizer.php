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

class AssignmentBudgetInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\AssignmentBudgetInfo::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\AssignmentBudgetInfo::class;
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
        $object = new \Paqtcom\Simplicate\Model\AssignmentBudgetInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('assignmentsPlanned', $data)) {
            $object->setAssignmentsPlanned($this->denormalizer->denormalize($data['assignmentsPlanned'], \Paqtcom\Simplicate\Model\AssignmentBudgetInfoFuturePast::class, 'json', $context));
        }
        if (\array_key_exists('assignmentsUnplanned', $data)) {
            $object->setAssignmentsUnplanned($data['assignmentsUnplanned']);
        }
        if (\array_key_exists('assignmentsHoursWritten', $data)) {
            $object->setAssignmentsHoursWritten($this->denormalizer->denormalize($data['assignmentsHoursWritten'], \Paqtcom\Simplicate\Model\AssignmentBudgetInfoFuturePast::class, 'json', $context));
        }
        if (\array_key_exists('itemtypesHoursWritten', $data)) {
            $object->setItemtypesHoursWritten($this->denormalizer->denormalize($data['itemtypesHoursWritten'], \Paqtcom\Simplicate\Model\AssignmentBudgetInfoFuturePast::class, 'json', $context));
        }
        if (\array_key_exists('assignmentsHoursCorrections', $data)) {
            $object->setAssignmentsHoursCorrections($this->denormalizer->denormalize($data['assignmentsHoursCorrections'], \Paqtcom\Simplicate\Model\AssignmentBudgetInfoFuturePast::class, 'json', $context));
        }
        if (\array_key_exists('itemtypesHoursCorrections', $data)) {
            $object->setItemtypesHoursCorrections($this->denormalizer->denormalize($data['itemtypesHoursCorrections'], \Paqtcom\Simplicate\Model\AssignmentBudgetInfoFuturePast::class, 'json', $context));
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
        if ($object->isInitialized('assignmentsPlanned') && null !== $object->getAssignmentsPlanned()) {
            $data['assignmentsPlanned'] = $this->normalizer->normalize($object->getAssignmentsPlanned(), 'json', $context);
        }
        if ($object->isInitialized('assignmentsUnplanned') && null !== $object->getAssignmentsUnplanned()) {
            $data['assignmentsUnplanned'] = $object->getAssignmentsUnplanned();
        }
        if ($object->isInitialized('assignmentsHoursWritten') && null !== $object->getAssignmentsHoursWritten()) {
            $data['assignmentsHoursWritten'] = $this->normalizer->normalize($object->getAssignmentsHoursWritten(), 'json', $context);
        }
        if ($object->isInitialized('itemtypesHoursWritten') && null !== $object->getItemtypesHoursWritten()) {
            $data['itemtypesHoursWritten'] = $this->normalizer->normalize($object->getItemtypesHoursWritten(), 'json', $context);
        }
        if ($object->isInitialized('assignmentsHoursCorrections') && null !== $object->getAssignmentsHoursCorrections()) {
            $data['assignmentsHoursCorrections'] = $this->normalizer->normalize($object->getAssignmentsHoursCorrections(), 'json', $context);
        }
        if ($object->isInitialized('itemtypesHoursCorrections') && null !== $object->getItemtypesHoursCorrections()) {
            $data['itemtypesHoursCorrections'] = $this->normalizer->normalize($object->getItemtypesHoursCorrections(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\AssignmentBudgetInfo::class => false];
    }
}
