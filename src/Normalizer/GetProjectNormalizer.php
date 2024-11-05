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

class GetProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetProject::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetProject::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetProject();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('project_manager', $data)) {
            $object->setProjectManager($this->denormalizer->denormalize($data['project_manager'], \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('project_status', $data)) {
            $object->setProjectStatus($this->denormalizer->denormalize($data['project_status'], \Paqtcom\Simplicate\Model\ProjectStatus::class, 'json', $context));
        }
        if (\array_key_exists('hours_rate_type', $data)) {
            $object->setHoursRateType($data['hours_rate_type']);
        }
        if (\array_key_exists('abnormal_address', $data)) {
            $object->setAbnormalAddress($data['abnormal_address']);
        }
        if (\array_key_exists('abnormal_person_id', $data)) {
            $object->setAbnormalPersonId($data['abnormal_person_id']);
        }
        if (\array_key_exists('abnormal_organization_id', $data)) {
            $object->setAbnormalOrganizationId($data['abnormal_organization_id']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], \Paqtcom\Simplicate\Model\GetOrganizationSimple::class, 'json', $context));
        }
        if (\array_key_exists('person', $data)) {
            $object->setPerson($this->denormalizer->denormalize($data['person'], \Paqtcom\Simplicate\Model\GetPersonSimple::class, 'json', $context));
        }
        if (\array_key_exists('separate_invoice_recipient', $data)) {
            $object->setSeparateInvoiceRecipient($this->denormalizer->denormalize($data['separate_invoice_recipient'], \Paqtcom\Simplicate\Model\GetSeparateInvoiceRecipient::class, 'json', $context));
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Paqtcom\Simplicate\Model\GetContactSimple::class, 'json', $context));
        }
        if (\array_key_exists('my_organization_profile', $data)) {
            $object->setMyOrganizationProfile($this->denormalizer->denormalize($data['my_organization_profile'], \Paqtcom\Simplicate\Model\GetMyOrganizationProfileSimple::class, 'json', $context));
        }
        if (\array_key_exists('divergent_payment_term', $data)) {
            $object->setDivergentPaymentTerm($this->denormalizer->denormalize($data['divergent_payment_term'], \Paqtcom\Simplicate\Model\GetPaymentTerm::class, 'json', $context));
        }
        if (\array_key_exists('employees', $data)) {
            $values = [];
            foreach ($data['employees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context);
            }
            $object->setEmployees($values);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = [];
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Paqtcom\Simplicate\Model\GetTeamSimple::class, 'json', $context);
            }
            $object->setTeams($values_1);
        }
        if (\array_key_exists('budget', $data)) {
            $object->setBudget($this->denormalizer->denormalize($data['budget'], \Paqtcom\Simplicate\Model\Budget::class, 'json', $context));
        }
        if (\array_key_exists('abnormal_contact_id', $data)) {
            $object->setAbnormalContactId($data['abnormal_contact_id']);
        }
        if (\array_key_exists('custom_fields', $data)) {
            $values_2 = [];
            foreach ($data['custom_fields'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Paqtcom\Simplicate\Model\GetCustomField::class, 'json', $context);
            }
            $object->setCustomFields($values_2);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('simplicate_url', $data)) {
            $object->setSimplicateUrl($data['simplicate_url']);
        }
        if (\array_key_exists('is_reverse_billing', $data)) {
            $object->setIsReverseBilling($data['is_reverse_billing']);
        }
        if (\array_key_exists('is_invoice_approval', $data)) {
            $object->setIsInvoiceApproval($data['is_invoice_approval']);
        }
        if (\array_key_exists('copied_from_project', $data)) {
            $object->setCopiedFromProject($this->denormalizer->denormalize($data['copied_from_project'], \Paqtcom\Simplicate\Model\GetProjectSimple::class, 'json', $context));
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('projectManager') && null !== $object->getProjectManager()) {
            $data['project_manager'] = $this->normalizer->normalize($object->getProjectManager(), 'json', $context);
        }
        if ($object->isInitialized('projectStatus') && null !== $object->getProjectStatus()) {
            $data['project_status'] = $this->normalizer->normalize($object->getProjectStatus(), 'json', $context);
        }
        if ($object->isInitialized('hoursRateType') && null !== $object->getHoursRateType()) {
            $data['hours_rate_type'] = $object->getHoursRateType();
        }
        if ($object->isInitialized('abnormalAddress') && null !== $object->getAbnormalAddress()) {
            $data['abnormal_address'] = $object->getAbnormalAddress();
        }
        if ($object->isInitialized('abnormalPersonId') && null !== $object->getAbnormalPersonId()) {
            $data['abnormal_person_id'] = $object->getAbnormalPersonId();
        }
        if ($object->isInitialized('abnormalOrganizationId') && null !== $object->getAbnormalOrganizationId()) {
            $data['abnormal_organization_id'] = $object->getAbnormalOrganizationId();
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if ($object->isInitialized('separateInvoiceRecipient') && null !== $object->getSeparateInvoiceRecipient()) {
            $data['separate_invoice_recipient'] = $this->normalizer->normalize($object->getSeparateInvoiceRecipient(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('myOrganizationProfile') && null !== $object->getMyOrganizationProfile()) {
            $data['my_organization_profile'] = $this->normalizer->normalize($object->getMyOrganizationProfile(), 'json', $context);
        }
        if ($object->isInitialized('divergentPaymentTerm') && null !== $object->getDivergentPaymentTerm()) {
            $data['divergent_payment_term'] = $this->normalizer->normalize($object->getDivergentPaymentTerm(), 'json', $context);
        }
        if ($object->isInitialized('employees') && null !== $object->getEmployees()) {
            $values = [];
            foreach ($object->getEmployees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['employees'] = $values;
        }
        if ($object->isInitialized('teams') && null !== $object->getTeams()) {
            $values_1 = [];
            foreach ($object->getTeams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['teams'] = $values_1;
        }
        if ($object->isInitialized('budget') && null !== $object->getBudget()) {
            $data['budget'] = $this->normalizer->normalize($object->getBudget(), 'json', $context);
        }
        if ($object->isInitialized('abnormalContactId') && null !== $object->getAbnormalContactId()) {
            $data['abnormal_contact_id'] = $object->getAbnormalContactId();
        }
        if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
            $values_2 = [];
            foreach ($object->getCustomFields() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['custom_fields'] = $values_2;
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
        if ($object->isInitialized('isReverseBilling') && null !== $object->getIsReverseBilling()) {
            $data['is_reverse_billing'] = $object->getIsReverseBilling();
        }
        if ($object->isInitialized('isInvoiceApproval') && null !== $object->getIsInvoiceApproval()) {
            $data['is_invoice_approval'] = $object->getIsInvoiceApproval();
        }
        if ($object->isInitialized('copiedFromProject') && null !== $object->getCopiedFromProject()) {
            $data['copied_from_project'] = $this->normalizer->normalize($object->getCopiedFromProject(), 'json', $context);
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
        return [\Paqtcom\Simplicate\Model\GetProject::class => false];
    }
}
