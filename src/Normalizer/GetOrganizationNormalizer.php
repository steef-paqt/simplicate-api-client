<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Accountancy;
use Paqtcom\Simplicate\Model\ContactPerson;
use Paqtcom\Simplicate\Model\CustomerGroup;
use Paqtcom\Simplicate\Model\Employee;
use Paqtcom\Simplicate\Model\GetAddress;
use Paqtcom\Simplicate\Model\GetCustomField;
use Paqtcom\Simplicate\Model\GetDebtor;
use Paqtcom\Simplicate\Model\GetOrganization;
use Paqtcom\Simplicate\Model\GetTeamSimple;
use Paqtcom\Simplicate\Model\Industry;
use Paqtcom\Simplicate\Model\Interest;
use Paqtcom\Simplicate\Model\OrganizationSize;
use Paqtcom\Simplicate\Model\RelationType;
use Paqtcom\Simplicate\Model\SbiCode;
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

class GetOrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetOrganization::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetOrganization::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetOrganization();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('visiting_address', $data)) {
            $object->setVisitingAddress($this->denormalizer->denormalize($data['visiting_address'], GetAddress::class, 'json', $context));
        }
        if (array_key_exists('postal_address', $data)) {
            $object->setPostalAddress($this->denormalizer->denormalize($data['postal_address'], GetAddress::class, 'json', $context));
        }
        if (array_key_exists('relation_type', $data)) {
            $object->setRelationType($this->denormalizer->denormalize($data['relation_type'], RelationType::class, 'json', $context));
        }
        if (array_key_exists('relation_manager', $data)) {
            $object->setRelationManager($this->denormalizer->denormalize($data['relation_manager'], Employee::class, 'json', $context));
        }
        if (array_key_exists('customer_group', $data)) {
            $object->setCustomerGroup($this->denormalizer->denormalize($data['customer_group'], CustomerGroup::class, 'json', $context));
        }
        if (array_key_exists('teams', $data)) {
            $values = [];
            foreach ($data['teams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetTeamSimple::class, 'json', $context);
            }
            $object->setTeams($values);
        }
        if (array_key_exists('debtor', $data)) {
            $object->setDebtor($this->denormalizer->denormalize($data['debtor'], GetDebtor::class, 'json', $context));
        }
        if (array_key_exists('organizationsize', $data)) {
            $object->setOrganizationsize($this->denormalizer->denormalize($data['organizationsize'], OrganizationSize::class, 'json', $context));
        }
        if (array_key_exists('linked_persons_contacts', $data)) {
            $values_1 = [];
            foreach ($data['linked_persons_contacts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ContactPerson::class, 'json', $context);
            }
            $object->setLinkedPersonsContacts($values_1);
        }
        if (array_key_exists('interests', $data)) {
            $values_2 = [];
            foreach ($data['interests'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, Interest::class, 'json', $context);
            }
            $object->setInterests($values_2);
        }
        if (array_key_exists('accountancy', $data)) {
            $object->setAccountancy($this->denormalizer->denormalize($data['accountancy'], Accountancy::class, 'json', $context));
        }
        if (array_key_exists('custom_fields', $data)) {
            $values_3 = [];
            foreach ($data['custom_fields'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, GetCustomField::class, 'json', $context);
            }
            $object->setCustomFields($values_3);
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
        if (array_key_exists('sbi_codes', $data)) {
            $values_4 = [];
            foreach ($data['sbi_codes'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, SbiCode::class, 'json', $context);
            }
            $object->setSbiCodes($values_4);
        }
        if (array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('coc_code', $data)) {
            $object->setCocCode($data['coc_code']);
        }
        if (array_key_exists('vat_number', $data)) {
            $object->setVatNumber($data['vat_number']);
        }
        if (array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('linkedin_url', $data)) {
            $object->setLinkedinUrl($data['linkedin_url']);
        }
        if (array_key_exists('has_different_postal_address', $data)) {
            $object->setHasDifferentPostalAddress($data['has_different_postal_address']);
        }
        if (array_key_exists('industry', $data)) {
            $object->setIndustry($this->denormalizer->denormalize($data['industry'], Industry::class, 'json', $context));
        }
        if (array_key_exists('invoice_receiver', $data)) {
            $object->setInvoiceReceiver($data['invoice_receiver']);
        }
        if (array_key_exists('allow_autocollect', $data)) {
            $object->setAllowAutocollect((bool) $data['allow_autocollect']);
        }
        if (array_key_exists('bank_account', $data)) {
            $object->setBankAccount($data['bank_account']);
        }
        if (array_key_exists('bank_bic', $data)) {
            $object->setBankBic($data['bank_bic']);
        }
        if (array_key_exists('relation_number', $data)) {
            $object->setRelationNumber($data['relation_number']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('visitingAddress') && null !== $object->getVisitingAddress()) {
            $data['visiting_address'] = $this->normalizer->normalize($object->getVisitingAddress(), 'json', $context);
        }
        if ($object->isInitialized('postalAddress') && null !== $object->getPostalAddress()) {
            $data['postal_address'] = $this->normalizer->normalize($object->getPostalAddress(), 'json', $context);
        }
        if ($object->isInitialized('relationType') && null !== $object->getRelationType()) {
            $data['relation_type'] = $this->normalizer->normalize($object->getRelationType(), 'json', $context);
        }
        if ($object->isInitialized('relationManager') && null !== $object->getRelationManager()) {
            $data['relation_manager'] = $this->normalizer->normalize($object->getRelationManager(), 'json', $context);
        }
        if ($object->isInitialized('customerGroup') && null !== $object->getCustomerGroup()) {
            $data['customer_group'] = $this->normalizer->normalize($object->getCustomerGroup(), 'json', $context);
        }
        if ($object->isInitialized('teams') && null !== $object->getTeams()) {
            $values = [];
            foreach ($object->getTeams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['teams'] = $values;
        }
        if ($object->isInitialized('debtor') && null !== $object->getDebtor()) {
            $data['debtor'] = $this->normalizer->normalize($object->getDebtor(), 'json', $context);
        }
        if ($object->isInitialized('organizationsize') && null !== $object->getOrganizationsize()) {
            $data['organizationsize'] = $this->normalizer->normalize($object->getOrganizationsize(), 'json', $context);
        }
        if ($object->isInitialized('linkedPersonsContacts') && null !== $object->getLinkedPersonsContacts()) {
            $values_1 = [];
            foreach ($object->getLinkedPersonsContacts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_persons_contacts'] = $values_1;
        }
        if ($object->isInitialized('interests') && null !== $object->getInterests()) {
            $values_2 = [];
            foreach ($object->getInterests() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['interests'] = $values_2;
        }
        if ($object->isInitialized('accountancy') && null !== $object->getAccountancy()) {
            $data['accountancy'] = $this->normalizer->normalize($object->getAccountancy(), 'json', $context);
        }
        if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
            $values_3 = [];
            foreach ($object->getCustomFields() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['custom_fields'] = $values_3;
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
        if ($object->isInitialized('sbiCodes') && null !== $object->getSbiCodes()) {
            $values_4 = [];
            foreach ($object->getSbiCodes() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['sbi_codes'] = $values_4;
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('cocCode') && null !== $object->getCocCode()) {
            $data['coc_code'] = $object->getCocCode();
        }
        if ($object->isInitialized('vatNumber') && null !== $object->getVatNumber()) {
            $data['vat_number'] = $object->getVatNumber();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('linkedinUrl') && null !== $object->getLinkedinUrl()) {
            $data['linkedin_url'] = $object->getLinkedinUrl();
        }
        if ($object->isInitialized('hasDifferentPostalAddress') && null !== $object->getHasDifferentPostalAddress()) {
            $data['has_different_postal_address'] = $object->getHasDifferentPostalAddress();
        }
        if ($object->isInitialized('industry') && null !== $object->getIndustry()) {
            $data['industry'] = $this->normalizer->normalize($object->getIndustry(), 'json', $context);
        }
        if ($object->isInitialized('invoiceReceiver') && null !== $object->getInvoiceReceiver()) {
            $data['invoice_receiver'] = $object->getInvoiceReceiver();
        }
        if ($object->isInitialized('allowAutocollect') && null !== $object->getAllowAutocollect()) {
            $data['allow_autocollect'] = $object->getAllowAutocollect();
        }
        if ($object->isInitialized('bankAccount') && null !== $object->getBankAccount()) {
            $data['bank_account'] = $object->getBankAccount();
        }
        if ($object->isInitialized('bankBic') && null !== $object->getBankBic()) {
            $data['bank_bic'] = $object->getBankBic();
        }
        if ($object->isInitialized('relationNumber') && null !== $object->getRelationNumber()) {
            $data['relation_number'] = $object->getRelationNumber();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetOrganization::class => false];
    }
}
