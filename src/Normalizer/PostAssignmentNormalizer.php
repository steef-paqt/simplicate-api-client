<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostAssignment;
use Paqtcom\Simplicate\Model\PostEmployeeFk;
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

class PostAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostAssignment::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostAssignment::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostAssignment();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (array_key_exists('projecthourstype_id', $data)) {
            $object->setProjecthourstypeId($data['projecthourstype_id']);
        }
        if (array_key_exists('employees', $data)) {
            $values = [];
            foreach ($data['employees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PostEmployeeFk::class, 'json', $context);
            }
            $object->setEmployees($values);
        }
        if (array_key_exists('status_id', $data)) {
            $object->setStatusId($data['status_id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('use_spread', $data)) {
            $object->setUseSpread($data['use_spread']);
        }
        if (array_key_exists('hours_type', $data)) {
            $object->setHoursType($data['hours_type']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('projecthourstypeId') && null !== $object->getProjecthourstypeId()) {
            $data['projecthourstype_id'] = $object->getProjecthourstypeId();
        }
        if ($object->isInitialized('employees') && null !== $object->getEmployees()) {
            $values = [];
            foreach ($object->getEmployees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['employees'] = $values;
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['status_id'] = $object->getStatusId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('useSpread') && null !== $object->getUseSpread()) {
            $data['use_spread'] = $object->getUseSpread();
        }
        if ($object->isInitialized('hoursType') && null !== $object->getHoursType()) {
            $data['hours_type'] = $object->getHoursType();
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
        return [PostAssignment::class => false];
    }
}
