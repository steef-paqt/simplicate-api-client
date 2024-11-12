<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetTimesheetRow;
use Paqtcom\Simplicate\Model\GetTimesheetRowItemtype;
use Paqtcom\Simplicate\Model\GetTimesheetRowOrganizationRelation;
use Paqtcom\Simplicate\Model\GetTimesheetRowPersonRelation;
use Paqtcom\Simplicate\Model\GetTimesheetRowProject;
use Paqtcom\Simplicate\Model\GetTimesheetRowProjectService;
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

class GetTimesheetRowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetTimesheetRow::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetTimesheetRow::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetTimesheetRow();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], GetTimesheetRowProject::class, 'json', $context));
        }
        if (array_key_exists('project_service', $data)) {
            $object->setProjectService($this->denormalizer->denormalize($data['project_service'], GetTimesheetRowProjectService::class, 'json', $context));
        }
        if (array_key_exists('itemtype', $data)) {
            $object->setItemtype($this->denormalizer->denormalize($data['itemtype'], GetTimesheetRowItemtype::class, 'json', $context));
        }
        if (array_key_exists('person', $data)) {
            $object->setPerson($this->denormalizer->denormalize($data['person'], GetTimesheetRowPersonRelation::class, 'json', $context));
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], GetTimesheetRowOrganizationRelation::class, 'json', $context));
        }
        if (array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (array_key_exists('project_service_id', $data)) {
            $object->setProjectServiceId($data['project_service_id']);
        }
        if (array_key_exists('itemtype_id', $data)) {
            $object->setItemtypeId($data['itemtype_id']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('order') && null !== $object->getOrder()) {
            $data['order'] = $object->getOrder();
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('projectService') && null !== $object->getProjectService()) {
            $data['project_service'] = $this->normalizer->normalize($object->getProjectService(), 'json', $context);
        }
        if ($object->isInitialized('itemtype') && null !== $object->getItemtype()) {
            $data['itemtype'] = $this->normalizer->normalize($object->getItemtype(), 'json', $context);
        }
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('projectServiceId') && null !== $object->getProjectServiceId()) {
            $data['project_service_id'] = $object->getProjectServiceId();
        }
        if ($object->isInitialized('itemtypeId') && null !== $object->getItemtypeId()) {
            $data['itemtype_id'] = $object->getItemtypeId();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetTimesheetRow::class => false];
    }
}
