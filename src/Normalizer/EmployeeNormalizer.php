<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Avatar;
use Paqtcom\Simplicate\Model\Employee;
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

class EmployeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Employee::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Employee::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Employee();
        if (array_key_exists('hourly_sales_tariff', $data) && is_int($data['hourly_sales_tariff'])) {
            $data['hourly_sales_tariff'] = (float) $data['hourly_sales_tariff'];
        }
        if (array_key_exists('hourly_cost_tariff', $data) && is_int($data['hourly_cost_tariff'])) {
            $data['hourly_cost_tariff'] = (float) $data['hourly_cost_tariff'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('bank_account', $data)) {
            $object->setBankAccount($data['bank_account']);
        }
        if (array_key_exists('function', $data)) {
            $object->setFunction($data['function']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (array_key_exists('employment_status', $data)) {
            $object->setEmploymentStatus($data['employment_status']);
        }
        if (array_key_exists('civil_status', $data)) {
            $object->setCivilStatus($data['civil_status']);
        }
        if (array_key_exists('work_phone', $data)) {
            $object->setWorkPhone($data['work_phone']);
        }
        if (array_key_exists('work_mobile', $data)) {
            $object->setWorkMobile($data['work_mobile']);
        }
        if (array_key_exists('work_email', $data)) {
            $object->setWorkEmail($data['work_email']);
        }
        if (array_key_exists('hourly_sales_tariff', $data)) {
            $object->setHourlySalesTariff($data['hourly_sales_tariff']);
        }
        if (array_key_exists('hourly_cost_tariff', $data)) {
            $object->setHourlyCostTariff($data['hourly_cost_tariff']);
        }
        if (array_key_exists('avatar', $data)) {
            $object->setAvatar($this->denormalizer->denormalize($data['avatar'], Avatar::class, 'json', $context));
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('simplicate_url', $data)) {
            $object->setSimplicateUrl($data['simplicate_url']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('bankAccount') && null !== $object->getBankAccount()) {
            $data['bank_account'] = $object->getBankAccount();
        }
        if ($object->isInitialized('function') && null !== $object->getFunction()) {
            $data['function'] = $object->getFunction();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('employmentStatus') && null !== $object->getEmploymentStatus()) {
            $data['employment_status'] = $object->getEmploymentStatus();
        }
        if ($object->isInitialized('civilStatus') && null !== $object->getCivilStatus()) {
            $data['civil_status'] = $object->getCivilStatus();
        }
        if ($object->isInitialized('workPhone') && null !== $object->getWorkPhone()) {
            $data['work_phone'] = $object->getWorkPhone();
        }
        if ($object->isInitialized('workMobile') && null !== $object->getWorkMobile()) {
            $data['work_mobile'] = $object->getWorkMobile();
        }
        if ($object->isInitialized('workEmail') && null !== $object->getWorkEmail()) {
            $data['work_email'] = $object->getWorkEmail();
        }
        if ($object->isInitialized('hourlySalesTariff') && null !== $object->getHourlySalesTariff()) {
            $data['hourly_sales_tariff'] = $object->getHourlySalesTariff();
        }
        if ($object->isInitialized('hourlyCostTariff') && null !== $object->getHourlyCostTariff()) {
            $data['hourly_cost_tariff'] = $object->getHourlyCostTariff();
        }
        if ($object->isInitialized('avatar') && null !== $object->getAvatar()) {
            $data['avatar'] = $this->normalizer->normalize($object->getAvatar(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('simplicateUrl') && null !== $object->getSimplicateUrl()) {
            $data['simplicate_url'] = $object->getSimplicateUrl();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Employee::class => false];
    }
}
