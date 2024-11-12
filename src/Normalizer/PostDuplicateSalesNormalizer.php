<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostDuplicateSales;
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

class PostDuplicateSalesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostDuplicateSales::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostDuplicateSales::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostDuplicateSales();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('is_new_subject', $data)) {
            $object->setIsNewSubject($data['is_new_subject']);
        }
        if (array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (array_key_exists('is_new_responsible_employee', $data)) {
            $object->setIsNewResponsibleEmployee($data['is_new_responsible_employee']);
        }
        if (array_key_exists('responsible_employee_id', $data)) {
            $object->setResponsibleEmployeeId($data['responsible_employee_id']);
        }
        if (array_key_exists('is_new_organization_or_person', $data)) {
            $object->setIsNewOrganizationOrPerson($data['is_new_organization_or_person']);
        }
        if (array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }
        if (array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('isNewSubject') && null !== $object->getIsNewSubject()) {
            $data['is_new_subject'] = $object->getIsNewSubject();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('isNewResponsibleEmployee') && null !== $object->getIsNewResponsibleEmployee()) {
            $data['is_new_responsible_employee'] = $object->getIsNewResponsibleEmployee();
        }
        if ($object->isInitialized('responsibleEmployeeId') && null !== $object->getResponsibleEmployeeId()) {
            $data['responsible_employee_id'] = $object->getResponsibleEmployeeId();
        }
        if ($object->isInitialized('isNewOrganizationOrPerson') && null !== $object->getIsNewOrganizationOrPerson()) {
            $data['is_new_organization_or_person'] = $object->getIsNewOrganizationOrPerson();
        }
        if ($object->isInitialized('organizationId') && null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostDuplicateSales::class => false];
    }
}
