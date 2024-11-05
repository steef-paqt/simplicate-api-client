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

class PostMessageLinkedToNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PostMessageLinkedTo::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PostMessageLinkedTo::class;
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
        $object = new \Steefdw\Simplicate\Model\PostMessageLinkedTo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sales_id', $data)) {
            $object->setSalesId($data['sales_id']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (\array_key_exists('invoice_id', $data)) {
            $object->setInvoiceId($data['invoice_id']);
        }
        if (\array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('salesId') && null !== $object->getSalesId()) {
            $data['sales_id'] = $object->getSalesId();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
            $data['invoice_id'] = $object->getInvoiceId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('organizationId') && null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\PostMessageLinkedTo::class => false];
    }
}
