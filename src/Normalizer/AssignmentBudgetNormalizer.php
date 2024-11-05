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

class AssignmentBudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\AssignmentBudget::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\AssignmentBudget::class;
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
        $object = new \Steefdw\Simplicate\Model\AssignmentBudget();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assignment_id', $data)) {
            $object->setAssignmentId($data['assignment_id']);
        }
        if (\array_key_exists('range_start', $data)) {
            $object->setRangeStart($data['range_start']);
        }
        if (\array_key_exists('budget_range_start', $data)) {
            $object->setBudgetRangeStart($data['budget_range_start']);
        }
        if (\array_key_exists('range_end', $data)) {
            $object->setRangeEnd($data['range_end']);
        }
        if (\array_key_exists('budget_range_end', $data)) {
            $object->setBudgetRangeEnd($data['budget_range_end']);
        }
        if (\array_key_exists('planned_amount', $data)) {
            $object->setPlannedAmount($data['planned_amount']);
        }
        if (\array_key_exists('spent_amount', $data)) {
            $object->setSpentAmount($data['spent_amount']);
        }
        if (\array_key_exists('hours_type', $data)) {
            $object->setHoursType($data['hours_type']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('assignmentId') && null !== $object->getAssignmentId()) {
            $data['assignment_id'] = $object->getAssignmentId();
        }
        if ($object->isInitialized('rangeStart') && null !== $object->getRangeStart()) {
            $data['range_start'] = $object->getRangeStart();
        }
        if ($object->isInitialized('budgetRangeStart') && null !== $object->getBudgetRangeStart()) {
            $data['budget_range_start'] = $object->getBudgetRangeStart();
        }
        if ($object->isInitialized('rangeEnd') && null !== $object->getRangeEnd()) {
            $data['range_end'] = $object->getRangeEnd();
        }
        if ($object->isInitialized('budgetRangeEnd') && null !== $object->getBudgetRangeEnd()) {
            $data['budget_range_end'] = $object->getBudgetRangeEnd();
        }
        if ($object->isInitialized('plannedAmount') && null !== $object->getPlannedAmount()) {
            $data['planned_amount'] = $object->getPlannedAmount();
        }
        if ($object->isInitialized('spentAmount') && null !== $object->getSpentAmount()) {
            $data['spent_amount'] = $object->getSpentAmount();
        }
        if ($object->isInitialized('hoursType') && null !== $object->getHoursType()) {
            $data['hours_type'] = $object->getHoursType();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\AssignmentBudget::class => false];
    }
}
