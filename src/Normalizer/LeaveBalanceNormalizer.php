<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetEmployeeSimple;
use Paqtcom\Simplicate\Model\HrmGetLeaveType;
use Paqtcom\Simplicate\Model\LeaveBalance;
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

class LeaveBalanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === LeaveBalance::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === LeaveBalance::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new LeaveBalance();
        if (array_key_exists('balance', $data) && is_int($data['balance'])) {
            $data['balance'] = (float) $data['balance'];
        }
        if (array_key_exists('last_change', $data) && is_int($data['last_change'])) {
            $data['last_change'] = (float) $data['last_change'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], GetEmployeeSimple::class, 'json', $context));
        }
        if (array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
        }
        if (array_key_exists('first_change', $data)) {
            $object->setFirstChange($data['first_change']);
        }
        if (array_key_exists('last_change', $data)) {
            $object->setLastChange($data['last_change']);
        }
        if (array_key_exists('year', $data)) {
            $object->setYear($data['year']);
        }
        if (array_key_exists('leavetype', $data)) {
            $object->setLeavetype($this->denormalizer->denormalize($data['leavetype'], HrmGetLeaveType::class, 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('balance') && null !== $object->getBalance()) {
            $data['balance'] = $object->getBalance();
        }
        if ($object->isInitialized('firstChange') && null !== $object->getFirstChange()) {
            $data['first_change'] = $object->getFirstChange();
        }
        if ($object->isInitialized('lastChange') && null !== $object->getLastChange()) {
            $data['last_change'] = $object->getLastChange();
        }
        if ($object->isInitialized('year') && null !== $object->getYear()) {
            $data['year'] = $object->getYear();
        }
        if ($object->isInitialized('leavetype') && null !== $object->getLeavetype()) {
            $data['leavetype'] = $this->normalizer->normalize($object->getLeavetype(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LeaveBalance::class => false];
    }
}
