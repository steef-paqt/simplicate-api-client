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

class GetAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetAssignment::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetAssignment::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\GetAssignment();
        if (\array_key_exists('hours_total', $data) && \is_int($data['hours_total'])) {
            $data['hours_total'] = (float) $data['hours_total'];
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
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('hours_total', $data)) {
            $object->setHoursTotal($data['hours_total']);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('hours_type', $data)) {
            $object->setHoursType($data['hours_type']);
        }
        if (\array_key_exists('spread', $data)) {
            $values = [];
            foreach ($data['spread'] as $value) {
                $values[] = $value;
            }
            $object->setSpread($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], \Paqtcom\Simplicate\Model\GetAssignmentStatus::class, 'json', $context));
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \Paqtcom\Simplicate\Model\GetProjectSimple::class, 'json', $context));
        }
        if (\array_key_exists('projectservice', $data)) {
            $object->setProjectservice($this->denormalizer->denormalize($data['projectservice'], \Paqtcom\Simplicate\Model\GetProjectServiceSimple::class, 'json', $context));
        }
        if (\array_key_exists('projecthourstype', $data)) {
            $object->setProjecthourstype($this->denormalizer->denormalize($data['projecthourstype'], \Paqtcom\Simplicate\Model\GetProjectServiceHoursType::class, 'json', $context));
        }
        if (\array_key_exists('employees', $data)) {
            $values_1 = [];
            foreach ($data['employees'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context);
            }
            $object->setEmployees($values_1);
        }
        if (\array_key_exists('spent_amount', $data)) {
            $object->setSpentAmount($data['spent_amount']);
        }
        if (\array_key_exists('is_planned', $data)) {
            $object->setIsPlanned($data['is_planned']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('use_spread', $data)) {
            $object->setUseSpread($data['use_spread']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('hoursTotal') && null !== $object->getHoursTotal()) {
            $data['hours_total'] = $object->getHoursTotal();
        }
        if ($object->isInitialized('hours') && null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if ($object->isInitialized('hoursType') && null !== $object->getHoursType()) {
            $data['hours_type'] = $object->getHoursType();
        }
        if ($object->isInitialized('spread') && null !== $object->getSpread()) {
            $values = [];
            foreach ($object->getSpread() as $value) {
                $values[] = $value;
            }
            $data['spread'] = $values;
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('projectservice') && null !== $object->getProjectservice()) {
            $data['projectservice'] = $this->normalizer->normalize($object->getProjectservice(), 'json', $context);
        }
        if ($object->isInitialized('projecthourstype') && null !== $object->getProjecthourstype()) {
            $data['projecthourstype'] = $this->normalizer->normalize($object->getProjecthourstype(), 'json', $context);
        }
        if ($object->isInitialized('employees') && null !== $object->getEmployees()) {
            $values_1 = [];
            foreach ($object->getEmployees() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['employees'] = $values_1;
        }
        if ($object->isInitialized('spentAmount') && null !== $object->getSpentAmount()) {
            $data['spent_amount'] = $object->getSpentAmount();
        }
        if ($object->isInitialized('isPlanned') && null !== $object->getIsPlanned()) {
            $data['is_planned'] = $object->getIsPlanned();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('useSpread') && null !== $object->getUseSpread()) {
            $data['use_spread'] = $object->getUseSpread();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetAssignment::class => false];
    }
}
