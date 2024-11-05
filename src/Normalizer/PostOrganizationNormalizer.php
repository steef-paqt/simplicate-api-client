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

class PostOrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PostOrganization::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PostOrganization::class;
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
        $object = new \Steefdw\Simplicate\Model\PostOrganization();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('visiting_address', $data)) {
            $object->setVisitingAddress($this->denormalizer->denormalize($data['visiting_address'], \Steefdw\Simplicate\Model\PostAddress::class, 'json', $context));
        }
        if (\array_key_exists('postal_address', $data)) {
            $object->setPostalAddress($this->denormalizer->denormalize($data['postal_address'], \Steefdw\Simplicate\Model\PostAddress::class, 'json', $context));
        }
        if (\array_key_exists('relation_type', $data)) {
            $object->setRelationType($this->denormalizer->denormalize($data['relation_type'], \Steefdw\Simplicate\Model\RelationType::class, 'json', $context));
        }
        if (\array_key_exists('relation_manager', $data)) {
            $object->setRelationManager($this->denormalizer->denormalize($data['relation_manager'], \Steefdw\Simplicate\Model\PostEmployeeFk::class, 'json', $context));
        }
        if (\array_key_exists('customer_group', $data)) {
            $object->setCustomerGroup($this->denormalizer->denormalize($data['customer_group'], \Steefdw\Simplicate\Model\PostOrganizationFk::class, 'json', $context));
        }
        if (\array_key_exists('linked_persons_contacts', $data)) {
            $values = [];
            foreach ($data['linked_persons_contacts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\PostContactPersonFk::class, 'json', $context);
            }
            $object->setLinkedPersonsContacts($values);
        }
        if (\array_key_exists('interests', $data)) {
            $values_1 = [];
            foreach ($data['interests'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Steefdw\Simplicate\Model\PostInterest::class, 'json', $context);
            }
            $object->setInterests($values_1);
        }
        if (\array_key_exists('debtor', $data)) {
            $object->setDebtor($this->denormalizer->denormalize($data['debtor'], \Steefdw\Simplicate\Model\PostDebtor::class, 'json', $context));
        }
        if (\array_key_exists('teams', $data)) {
            $values_2 = [];
            foreach ($data['teams'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Steefdw\Simplicate\Model\PostTeam::class, 'json', $context);
            }
            $object->setTeams($values_2);
        }
        if (\array_key_exists('accountancy', $data)) {
            $object->setAccountancy($this->denormalizer->denormalize($data['accountancy'], \Steefdw\Simplicate\Model\Accountancy::class, 'json', $context));
        }
        if (\array_key_exists('custom_fields', $data)) {
            $values_3 = [];
            foreach ($data['custom_fields'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Steefdw\Simplicate\Model\PostCustomFieldValue::class, 'json', $context);
            }
            $object->setCustomFields($values_3);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('coc_code', $data)) {
            $object->setCocCode($data['coc_code']);
        }
        if (\array_key_exists('vat_number', $data)) {
            $object->setVatNumber($data['vat_number']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('linkedin_url', $data)) {
            $object->setLinkedinUrl($data['linkedin_url']);
        }
        if (\array_key_exists('has_different_postal_address', $data)) {
            $object->setHasDifferentPostalAddress($data['has_different_postal_address']);
        }
        if (\array_key_exists('industry', $data)) {
            $object->setIndustry($this->denormalizer->denormalize($data['industry'], \Steefdw\Simplicate\Model\Industry::class, 'json', $context));
        }
        if (\array_key_exists('organizationsize', $data)) {
            $object->setOrganizationsize($this->denormalizer->denormalize($data['organizationsize'], \Steefdw\Simplicate\Model\OrganizationSize::class, 'json', $context));
        }
        if (\array_key_exists('invoice_receiver', $data)) {
            $object->setInvoiceReceiver($data['invoice_receiver']);
        }
        if (\array_key_exists('allow_autocollect', $data)) {
            $object->setAllowAutocollect($data['allow_autocollect']);
        }
        if (\array_key_exists('bank_account', $data)) {
            $object->setBankAccount($data['bank_account']);
        }
        if (\array_key_exists('bank_bic', $data)) {
            $object->setBankBic($data['bank_bic']);
        }
        if (\array_key_exists('relation_number', $data)) {
            $object->setRelationNumber($data['relation_number']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
        if ($object->isInitialized('linkedPersonsContacts') && null !== $object->getLinkedPersonsContacts()) {
            $values = [];
            foreach ($object->getLinkedPersonsContacts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['linked_persons_contacts'] = $values;
        }
        if ($object->isInitialized('interests') && null !== $object->getInterests()) {
            $values_1 = [];
            foreach ($object->getInterests() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['interests'] = $values_1;
        }
        if ($object->isInitialized('debtor') && null !== $object->getDebtor()) {
            $data['debtor'] = $this->normalizer->normalize($object->getDebtor(), 'json', $context);
        }
        if ($object->isInitialized('teams') && null !== $object->getTeams()) {
            $values_2 = [];
            foreach ($object->getTeams() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['teams'] = $values_2;
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
        if ($object->isInitialized('organizationsize') && null !== $object->getOrganizationsize()) {
            $data['organizationsize'] = $this->normalizer->normalize($object->getOrganizationsize(), 'json', $context);
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
        return [\Steefdw\Simplicate\Model\PostOrganization::class => false];
    }
}
