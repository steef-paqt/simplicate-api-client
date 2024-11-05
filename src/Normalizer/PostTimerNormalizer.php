<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostTimer;
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

class PostTimerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostTimer::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostTimer::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostTimer();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (array_key_exists('projectservice_id', $data)) {
            $object->setProjectserviceId($data['projectservice_id']);
        }
        if (array_key_exists('hourstype_id', $data)) {
            $object->setHourstypeId($data['hourstype_id']);
        }
        if (array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (array_key_exists('metadata', $data)) {
            $object->setMetadata($data['metadata']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
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
        if ($object->isInitialized('hourstypeId') && null !== $object->getHourstypeId()) {
            $data['hourstype_id'] = $object->getHourstypeId();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $data['metadata'] = $object->getMetadata();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostTimer::class => false];
    }
}
