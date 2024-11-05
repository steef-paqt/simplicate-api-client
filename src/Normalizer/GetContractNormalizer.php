<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ContractType;
use Paqtcom\Simplicate\Model\EmploymentType;
use Paqtcom\Simplicate\Model\GetContract;
use Paqtcom\Simplicate\Model\GetEmployee;
use Paqtcom\Simplicate\Model\GetOrganizationSimple;
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

class GetContractNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetContract::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetContract::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetContract();
        if (array_key_exists('salary_fulltime', $data) && is_int($data['salary_fulltime'])) {
            $data['salary_fulltime'] = (float) $data['salary_fulltime'];
        }
        if (array_key_exists('parttime_percentage', $data) && is_int($data['parttime_percentage'])) {
            $data['parttime_percentage'] = (float) $data['parttime_percentage'];
        }
        if (array_key_exists('days_off', $data) && is_int($data['days_off'])) {
            $data['days_off'] = (float) $data['days_off'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], GetEmployee::class, 'json', $context));
        }
        if (array_key_exists('employer', $data)) {
            $object->setEmployer($this->denormalizer->denormalize($data['employer'], GetOrganizationSimple::class, 'json', $context));
        }
        if (array_key_exists('employment_type', $data)) {
            $object->setEmploymentType($this->denormalizer->denormalize($data['employment_type'], EmploymentType::class, 'json', $context));
        }
        if (array_key_exists('contract_type', $data)) {
            $object->setContractType($this->denormalizer->denormalize($data['contract_type'], ContractType::class, 'json', $context));
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (array_key_exists('salary_fulltime', $data)) {
            $object->setSalaryFulltime($data['salary_fulltime']);
        }
        if (array_key_exists('parttime_percentage', $data)) {
            $object->setParttimePercentage($data['parttime_percentage']);
        }
        if (array_key_exists('days_off', $data)) {
            $object->setDaysOff($data['days_off']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('employer') && null !== $object->getEmployer()) {
            $data['employer'] = $this->normalizer->normalize($object->getEmployer(), 'json', $context);
        }
        if ($object->isInitialized('employmentType') && null !== $object->getEmploymentType()) {
            $data['employment_type'] = $this->normalizer->normalize($object->getEmploymentType(), 'json', $context);
        }
        if ($object->isInitialized('contractType') && null !== $object->getContractType()) {
            $data['contract_type'] = $this->normalizer->normalize($object->getContractType(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
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
        return [GetContract::class => false];
    }
}
