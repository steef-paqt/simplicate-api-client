<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ContactPerson;
use Paqtcom\Simplicate\Model\GetCustomField;
use Paqtcom\Simplicate\Model\GetEmployeeSimple;
use Paqtcom\Simplicate\Model\GetOrganizationSimple;
use Paqtcom\Simplicate\Model\GetPersonSimple;
use Paqtcom\Simplicate\Model\GetProjectSimple;
use Paqtcom\Simplicate\Model\GetSales;
use Paqtcom\Simplicate\Model\GetSeparateInvoiceRecipient;
use Paqtcom\Simplicate\Model\GetTeamSimple;
use Paqtcom\Simplicate\Model\LostToCompetitor;
use Paqtcom\Simplicate\Model\SalesProgress;
use Paqtcom\Simplicate\Model\SalesReason;
use Paqtcom\Simplicate\Model\SalesSource;
use Paqtcom\Simplicate\Model\SalesStatus;
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

class GetSalesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetSales::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetSales::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetSales();
        if (array_key_exists('expected_revenue', $data) && is_int($data['expected_revenue'])) {
            $data['expected_revenue'] = (float) $data['expected_revenue'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('responsible_employee', $data)) {
            $object->setResponsibleEmployee($this->denormalizer->denormalize($data['responsible_employee'], GetEmployeeSimple::class, 'json', $context));
        }
        if (array_key_exists('person', $data)) {
            $object->setPerson($this->denormalizer->denormalize($data['person'], GetPersonSimple::class, 'json', $context));
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], GetOrganizationSimple::class, 'json', $context));
        }
        if (array_key_exists('progress', $data)) {
            $object->setProgress($this->denormalizer->denormalize($data['progress'], SalesProgress::class, 'json', $context));
        }
        if (array_key_exists('source', $data)) {
            $object->setSource($this->denormalizer->denormalize($data['source'], SalesSource::class, 'json', $context));
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], SalesStatus::class, 'json', $context));
        }
        if (array_key_exists('separate_invoice_recipient', $data)) {
            $object->setSeparateInvoiceRecipient($this->denormalizer->denormalize($data['separate_invoice_recipient'], GetSeparateInvoiceRecipient::class, 'json', $context));
        }
        if (array_key_exists('teams', $data)) {
            $values = [];
            foreach ($data['teams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetTeamSimple::class, 'json', $context);
            }
            $object->setTeams($values);
        }
        if (array_key_exists('custom_fields', $data)) {
            $values_1 = [];
            foreach ($data['custom_fields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, GetCustomField::class, 'json', $context);
            }
            $object->setCustomFields($values_1);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('status_updated_at', $data)) {
            $object->setStatusUpdatedAt($data['status_updated_at']);
        }
        if (array_key_exists('simplicate_url', $data)) {
            $object->setSimplicateUrl($data['simplicate_url']);
        }
        if (array_key_exists('linked_project', $data)) {
            $object->setLinkedProject($this->denormalizer->denormalize($data['linked_project'], GetProjectSimple::class, 'json', $context));
        }
        if (array_key_exists('my_organization_profile_id', $data)) {
            $object->setMyOrganizationProfileId($data['my_organization_profile_id']);
        }
        if (array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }
        if (array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (array_key_exists('contact_id', $data)) {
            $object->setContactId($data['contact_id']);
        }
        if (array_key_exists('reason', $data)) {
            $object->setReason($this->denormalizer->denormalize($data['reason'], SalesReason::class, 'json', $context));
        }
        if (array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], ContactPerson::class, 'json', $context));
        }
        if (array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('expected_closing_date', $data)) {
            $object->setExpectedClosingDate($data['expected_closing_date']);
        }
        if (array_key_exists('expected_revenue', $data)) {
            $object->setExpectedRevenue($data['expected_revenue']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('chance_to_score', $data)) {
            $object->setChanceToScore($data['chance_to_score']);
        }
        if (array_key_exists('lost_to_competitor', $data)) {
            $object->setLostToCompetitor($this->denormalizer->denormalize($data['lost_to_competitor'], LostToCompetitor::class, 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('responsibleEmployee') && null !== $object->getResponsibleEmployee()) {
            $data['responsible_employee'] = $this->normalizer->normalize($object->getResponsibleEmployee(), 'json', $context);
        }
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('progress') && null !== $object->getProgress()) {
            $data['progress'] = $this->normalizer->normalize($object->getProgress(), 'json', $context);
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $this->normalizer->normalize($object->getSource(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('separateInvoiceRecipient') && null !== $object->getSeparateInvoiceRecipient()) {
            $data['separate_invoice_recipient'] = $this->normalizer->normalize($object->getSeparateInvoiceRecipient(), 'json', $context);
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
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('statusUpdatedAt') && null !== $object->getStatusUpdatedAt()) {
            $data['status_updated_at'] = $object->getStatusUpdatedAt();
        }
        if ($object->isInitialized('simplicateUrl') && null !== $object->getSimplicateUrl()) {
            $data['simplicate_url'] = $object->getSimplicateUrl();
        }
        if ($object->isInitialized('linkedProject') && null !== $object->getLinkedProject()) {
            $data['linked_project'] = $this->normalizer->normalize($object->getLinkedProject(), 'json', $context);
        }
        if ($object->isInitialized('myOrganizationProfileId') && null !== $object->getMyOrganizationProfileId()) {
            $data['my_organization_profile_id'] = $object->getMyOrganizationProfileId();
        }
        if ($object->isInitialized('organizationId') && null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $data['contact_id'] = $object->getContactId();
        }
        if ($object->isInitialized('reason') && null !== $object->getReason()) {
            $data['reason'] = $this->normalizer->normalize($object->getReason(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('expectedClosingDate') && null !== $object->getExpectedClosingDate()) {
            $data['expected_closing_date'] = $object->getExpectedClosingDate();
        }
        if ($object->isInitialized('expectedRevenue') && null !== $object->getExpectedRevenue()) {
            $data['expected_revenue'] = $object->getExpectedRevenue();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('chanceToScore') && null !== $object->getChanceToScore()) {
            $data['chance_to_score'] = $object->getChanceToScore();
        }
        if ($object->isInitialized('lostToCompetitor') && null !== $object->getLostToCompetitor()) {
            $data['lost_to_competitor'] = $this->normalizer->normalize($object->getLostToCompetitor(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetSales::class => false];
    }
}