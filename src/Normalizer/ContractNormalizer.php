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

class ContractNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\Contract::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\Contract::class;
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
        $object = new \Steefdw\Simplicate\Model\Contract();
        if (\array_key_exists('salary_fulltime', $data) && \is_int($data['salary_fulltime'])) {
            $data['salary_fulltime'] = (float) $data['salary_fulltime'];
        }
        if (\array_key_exists('parttime_percentage', $data) && \is_int($data['parttime_percentage'])) {
            $data['parttime_percentage'] = (float) $data['parttime_percentage'];
        }
        if (\array_key_exists('days_off', $data) && \is_int($data['days_off'])) {
            $data['days_off'] = (float) $data['days_off'];
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
        if (\array_key_exists('salary_fulltime', $data)) {
            $object->setSalaryFulltime($data['salary_fulltime']);
        }
        if (\array_key_exists('parttime_percentage', $data)) {
            $object->setParttimePercentage($data['parttime_percentage']);
        }
        if (\array_key_exists('days_off', $data)) {
            $object->setDaysOff($data['days_off']);
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
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('salaryFulltime') && null !== $object->getSalaryFulltime()) {
            $data['salary_fulltime'] = $object->getSalaryFulltime();
        }
        if ($object->isInitialized('parttimePercentage') && null !== $object->getParttimePercentage()) {
            $data['parttime_percentage'] = $object->getParttimePercentage();
        }
        if ($object->isInitialized('daysOff') && null !== $object->getDaysOff()) {
            $data['days_off'] = $object->getDaysOff();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\Contract::class => false];
    }
}
