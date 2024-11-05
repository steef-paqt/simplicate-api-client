<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PutMileage;
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

class PutMileageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PutMileage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PutMileage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PutMileage();
        if (array_key_exists('mileage', $data) && is_int($data['mileage'])) {
            $data['mileage'] = (float) $data['mileage'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('approvalstatus_id', $data)) {
            $object->setApprovalstatusId($data['approvalstatus_id']);
        }
        if (array_key_exists('mileage', $data)) {
            $object->setMileage($data['mileage']);
        }
        if (array_key_exists('related_hours_id', $data)) {
            $object->setRelatedHoursId($data['related_hours_id']);
        }
        if (array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('approvalstatusId') && null !== $object->getApprovalstatusId()) {
            $data['approvalstatus_id'] = $object->getApprovalstatusId();
        }
        if ($object->isInitialized('mileage') && null !== $object->getMileage()) {
            $data['mileage'] = $object->getMileage();
        }
        if ($object->isInitialized('relatedHoursId') && null !== $object->getRelatedHoursId()) {
            $data['related_hours_id'] = $object->getRelatedHoursId();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PutMileage::class => false];
    }
}
