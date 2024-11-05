<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PostProject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PostProject::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\PostProject();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project_manager_id', $data)) {
            $object->setProjectManagerId($data['project_manager_id']);
        }
        if (\array_key_exists('project_status_id', $data)) {
            $object->setProjectStatusId($data['project_status_id']);
        }
        if (\array_key_exists('separate_invoice_recipient', $data)) {
            $object->setSeparateInvoiceRecipient($this->denormalizer->denormalize($data['separate_invoice_recipient'], \Paqtcom\Simplicate\Model\PostSeparateInvoiceRecipient::class, 'json', $context));
        }
        if (\array_key_exists('divergent_payment_term_id', $data)) {
            $object->setDivergentPaymentTermId($data['divergent_payment_term_id']);
        }
        if (\array_key_exists('teams', $data)) {
            $values = [];
            foreach ($data['teams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\PostTeam::class, 'json', $context);
            }
            $object->setTeams($values);
        }
        if (\array_key_exists('custom_fields', $data)) {
            $values_1 = [];
            foreach ($data['custom_fields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Paqtcom\Simplicate\Model\PostCustomFieldValue::class, 'json', $context);
            }
            $object->setCustomFields($values_1);
        }
        if (\array_key_exists('my_organization_profile_id', $data)) {
            $object->setMyOrganizationProfileId($data['my_organization_profile_id']);
        }
        if (\array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }
        if (\array_key_exists('contact_id', $data)) {
            $object->setContactId($data['contact_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (\array_key_exists('can_register_mileage', $data)) {
            $object->setCanRegisterMileage($data['can_register_mileage']);
        }
        if (\array_key_exists('project_number', $data)) {
            $object->setProjectNumber($data['project_number']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('invoice_reference', $data)) {
            $object->setInvoiceReference($data['invoice_reference']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('projectManagerId') && null !== $object->getProjectManagerId()) {
            $data['project_manager_id'] = $object->getProjectManagerId();
        }
        if ($object->isInitialized('projectStatusId') && null !== $object->getProjectStatusId()) {
            $data['project_status_id'] = $object->getProjectStatusId();
        }
        if ($object->isInitialized('separateInvoiceRecipient') && null !== $object->getSeparateInvoiceRecipient()) {
            $data['separate_invoice_recipient'] = $this->normalizer->normalize($object->getSeparateInvoiceRecipient(), 'json', $context);
        }
        if ($object->isInitialized('divergentPaymentTermId') && null !== $object->getDivergentPaymentTermId()) {
            $data['divergent_payment_term_id'] = $object->getDivergentPaymentTermId();
        }
        if ($object->isInitialized('teams') && null !== $object->getTeams()) {
            $values = [];
            foreach ($object->getTeams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['teams'] = $values;
        }
        if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
            $values_1 = [];
            foreach ($object->getCustomFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom_fields'] = $values_1;
        }
        if ($object->isInitialized('myOrganizationProfileId') && null !== $object->getMyOrganizationProfileId()) {
            $data['my_organization_profile_id'] = $object->getMyOrganizationProfileId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('organizationId') && null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $data['contact_id'] = $object->getContactId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('billable') && null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if ($object->isInitialized('canRegisterMileage') && null !== $object->getCanRegisterMileage()) {
            $data['can_register_mileage'] = $object->getCanRegisterMileage();
        }
        if ($object->isInitialized('projectNumber') && null !== $object->getProjectNumber()) {
            $data['project_number'] = $object->getProjectNumber();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('invoiceReference') && null !== $object->getInvoiceReference()) {
            $data['invoice_reference'] = $object->getInvoiceReference();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\PostProject::class => false];
    }
}
