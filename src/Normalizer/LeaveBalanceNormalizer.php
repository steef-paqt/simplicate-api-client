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

class LeaveBalanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\LeaveBalance::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\LeaveBalance::class;
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
        $object = new \Steefdw\Simplicate\Model\LeaveBalance();
        if (\array_key_exists('balance', $data) && \is_int($data['balance'])) {
            $data['balance'] = (float) $data['balance'];
        }
        if (\array_key_exists('last_change', $data) && \is_int($data['last_change'])) {
            $data['last_change'] = (float) $data['last_change'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], \Steefdw\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
        }
        if (\array_key_exists('first_change', $data)) {
            $object->setFirstChange($data['first_change']);
        }
        if (\array_key_exists('last_change', $data)) {
            $object->setLastChange($data['last_change']);
        }
        if (\array_key_exists('year', $data)) {
            $object->setYear($data['year']);
        }
        if (\array_key_exists('leavetype', $data)) {
            $object->setLeavetype($this->denormalizer->denormalize($data['leavetype'], \Steefdw\Simplicate\Model\HrmGetLeaveType::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
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
        return [\Steefdw\Simplicate\Model\LeaveBalance::class => false];
    }
}
