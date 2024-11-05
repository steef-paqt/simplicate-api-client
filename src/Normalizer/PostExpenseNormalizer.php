<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostExpense;
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

class PostExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostExpense::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostExpense::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostExpense();
        if (array_key_exists('amount', $data) && is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (array_key_exists('service_id', $data)) {
            $object->setServiceId($data['service_id']);
        }
        if (array_key_exists('costtype_id', $data)) {
            $object->setCosttypeId($data['costtype_id']);
        }
        if (array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
            $data['service_id'] = $object->getServiceId();
        }
        if ($object->isInitialized('costtypeId') && null !== $object->getCosttypeId()) {
            $data['costtype_id'] = $object->getCosttypeId();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostExpense::class => false];
    }
}
