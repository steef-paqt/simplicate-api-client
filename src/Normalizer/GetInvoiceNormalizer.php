<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetInvoice;
use Paqtcom\Simplicate\Model\GetInvoiceLine;
use Paqtcom\Simplicate\Model\GetInvoiceReminder;
use Paqtcom\Simplicate\Model\GetMyOrganizationProfileSimple;
use Paqtcom\Simplicate\Model\GetOrganizationSimple;
use Paqtcom\Simplicate\Model\GetPersonSimple;
use Paqtcom\Simplicate\Model\GetProjectSimple;
use Paqtcom\Simplicate\Model\PaymentTerm;
use Paqtcom\Simplicate\Model\SubscriptionCycle;
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

class GetInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetInvoice::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetInvoice::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetInvoice();
        if (array_key_exists('total_excluding_vat', $data) && is_int($data['total_excluding_vat'])) {
            $data['total_excluding_vat'] = (float) $data['total_excluding_vat'];
        }
        if (array_key_exists('total_vat', $data) && is_int($data['total_vat'])) {
            $data['total_vat'] = (float) $data['total_vat'];
        }
        if (array_key_exists('total_including_vat', $data) && is_int($data['total_including_vat'])) {
            $data['total_including_vat'] = (float) $data['total_including_vat'];
        }
        if (array_key_exists('total_outstanding', $data) && is_int($data['total_outstanding'])) {
            $data['total_outstanding'] = (float) $data['total_outstanding'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('contact_id', $data)) {
            $object->setContactId($data['contact_id']);
        }
        if (array_key_exists('payment_term', $data)) {
            $object->setPaymentTerm($this->denormalizer->denormalize($data['payment_term'], PaymentTerm::class, 'json', $context));
        }
        if (array_key_exists('invoice_lines', $data)) {
            $values = [];
            foreach ($data['invoice_lines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetInvoiceLine::class, 'json', $context);
            }
            $object->setInvoiceLines($values);
        }
        if (array_key_exists('invoice_number', $data)) {
            $object->setInvoiceNumber($data['invoice_number']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (array_key_exists('total_excluding_vat', $data)) {
            $object->setTotalExcludingVat($data['total_excluding_vat']);
        }
        if (array_key_exists('total_vat', $data)) {
            $object->setTotalVat($data['total_vat']);
        }
        if (array_key_exists('total_including_vat', $data)) {
            $object->setTotalIncludingVat($data['total_including_vat']);
        }
        if (array_key_exists('total_outstanding', $data)) {
            $object->setTotalOutstanding($data['total_outstanding']);
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], GetOrganizationSimple::class, 'json', $context));
        }
        if (array_key_exists('person', $data)) {
            $object->setPerson($this->denormalizer->denormalize($data['person'], GetPersonSimple::class, 'json', $context));
        }
        if (array_key_exists('my_organization_profile', $data)) {
            $object->setMyOrganizationProfile($this->denormalizer->denormalize($data['my_organization_profile'], GetMyOrganizationProfileSimple::class, 'json', $context));
        }
        if (array_key_exists('subscription_cycle', $data)) {
            $object->setSubscriptionCycle($this->denormalizer->denormalize($data['subscription_cycle'], SubscriptionCycle::class, 'json', $context));
        }
        if (array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], GetProjectSimple::class, 'json', $context));
        }
        if (array_key_exists('projects', $data)) {
            $values_1 = [];
            foreach ($data['projects'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, GetProjectSimple::class, 'json', $context);
            }
            $object->setProjects($values_1);
        }
        if (array_key_exists('sending_method', $data)) {
            $object->setSendingMethod($data['sending_method']);
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
        if (array_key_exists('reminder', $data)) {
            $object->setReminder($this->denormalizer->denormalize($data['reminder'], GetInvoiceReminder::class, 'json', $context));
        }
        if (array_key_exists('composition_type', $data)) {
            $object->setCompositionType($data['composition_type']);
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
        if (array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $data['contact_id'] = $object->getContactId();
        }
        if ($object->isInitialized('paymentTerm') && null !== $object->getPaymentTerm()) {
            $data['payment_term'] = $this->normalizer->normalize($object->getPaymentTerm(), 'json', $context);
        }
        if ($object->isInitialized('invoiceLines') && null !== $object->getInvoiceLines()) {
            $values = [];
            foreach ($object->getInvoiceLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['invoice_lines'] = $values;
        }
        if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
            $data['invoice_number'] = $object->getInvoiceNumber();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('totalExcludingVat') && null !== $object->getTotalExcludingVat()) {
            $data['total_excluding_vat'] = $object->getTotalExcludingVat();
        }
        if ($object->isInitialized('totalVat') && null !== $object->getTotalVat()) {
            $data['total_vat'] = $object->getTotalVat();
        }
        if ($object->isInitialized('totalIncludingVat') && null !== $object->getTotalIncludingVat()) {
            $data['total_including_vat'] = $object->getTotalIncludingVat();
        }
        if ($object->isInitialized('totalOutstanding') && null !== $object->getTotalOutstanding()) {
            $data['total_outstanding'] = $object->getTotalOutstanding();
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if ($object->isInitialized('myOrganizationProfile') && null !== $object->getMyOrganizationProfile()) {
            $data['my_organization_profile'] = $this->normalizer->normalize($object->getMyOrganizationProfile(), 'json', $context);
        }
        if ($object->isInitialized('subscriptionCycle') && null !== $object->getSubscriptionCycle()) {
            $data['subscription_cycle'] = $this->normalizer->normalize($object->getSubscriptionCycle(), 'json', $context);
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('projects') && null !== $object->getProjects()) {
            $values_1 = [];
            foreach ($object->getProjects() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['projects'] = $values_1;
        }
        if ($object->isInitialized('sendingMethod') && null !== $object->getSendingMethod()) {
            $data['sending_method'] = $object->getSendingMethod();
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
        if ($object->isInitialized('reminder') && null !== $object->getReminder()) {
            $data['reminder'] = $this->normalizer->normalize($object->getReminder(), 'json', $context);
        }
        if ($object->isInitialized('compositionType') && null !== $object->getCompositionType()) {
            $data['composition_type'] = $object->getCompositionType();
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
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetInvoice::class => false];
    }
}
