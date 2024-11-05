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

class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\Person::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\Person::class;
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
        $object = new \Paqtcom\Simplicate\Model\Person();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('relation_type', $data)) {
            $object->setRelationType($this->denormalizer->denormalize($data['relation_type'], \Paqtcom\Simplicate\Model\RelationType::class, 'json', $context));
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (\array_key_exists('initials', $data)) {
            $object->setInitials($data['initials']);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (\array_key_exists('family_name_prefix', $data)) {
            $object->setFamilyNamePrefix($data['family_name_prefix']);
        }
        if (\array_key_exists('family_name', $data)) {
            $object->setFamilyName($data['family_name']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
        }
        if (\array_key_exists('date_of_birth', $data)) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('website_url', $data)) {
            $object->setWebsiteUrl($data['website_url']);
        }
        if (\array_key_exists('twitter_url', $data)) {
            $object->setTwitterUrl($data['twitter_url']);
        }
        if (\array_key_exists('linkedin_url', $data)) {
            $object->setLinkedinUrl($data['linkedin_url']);
        }
        if (\array_key_exists('facebook_url', $data)) {
            $object->setFacebookUrl($data['facebook_url']);
        }
        if (\array_key_exists('relation_number', $data)) {
            $object->setRelationNumber($data['relation_number']);
        }
        if (\array_key_exists('bank_account', $data)) {
            $object->setBankAccount($data['bank_account']);
        }
        if (\array_key_exists('bank_bic', $data)) {
            $object->setBankBic($data['bank_bic']);
        }
        if (\array_key_exists('invoice_receiver', $data)) {
            $object->setInvoiceReceiver($data['invoice_receiver']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Paqtcom\Simplicate\Model\Address::class, 'json', $context));
        }
        if (\array_key_exists('mailing_list_email', $data)) {
            $object->setMailingListEmail($data['mailing_list_email']);
        }
        if (\array_key_exists('mailing_lists', $data)) {
            $values = [];
            foreach ($data['mailing_lists'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\PersonMailingList::class, 'json', $context);
            }
            $object->setMailingLists($values);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('relationType') && null !== $object->getRelationType()) {
            $data['relation_type'] = $this->normalizer->normalize($object->getRelationType(), 'json', $context);
        }
        if ($object->isInitialized('gender') && null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if ($object->isInitialized('initials') && null !== $object->getInitials()) {
            $data['initials'] = $object->getInitials();
        }
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if ($object->isInitialized('familyNamePrefix') && null !== $object->getFamilyNamePrefix()) {
            $data['family_name_prefix'] = $object->getFamilyNamePrefix();
        }
        if ($object->isInitialized('familyName') && null !== $object->getFamilyName()) {
            $data['family_name'] = $object->getFamilyName();
        }
        if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
            $data['full_name'] = $object->getFullName();
        }
        if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
            $data['date_of_birth'] = $object->getDateOfBirth();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('websiteUrl') && null !== $object->getWebsiteUrl()) {
            $data['website_url'] = $object->getWebsiteUrl();
        }
        if ($object->isInitialized('twitterUrl') && null !== $object->getTwitterUrl()) {
            $data['twitter_url'] = $object->getTwitterUrl();
        }
        if ($object->isInitialized('linkedinUrl') && null !== $object->getLinkedinUrl()) {
            $data['linkedin_url'] = $object->getLinkedinUrl();
        }
        if ($object->isInitialized('facebookUrl') && null !== $object->getFacebookUrl()) {
            $data['facebook_url'] = $object->getFacebookUrl();
        }
        if ($object->isInitialized('relationNumber') && null !== $object->getRelationNumber()) {
            $data['relation_number'] = $object->getRelationNumber();
        }
        if ($object->isInitialized('bankAccount') && null !== $object->getBankAccount()) {
            $data['bank_account'] = $object->getBankAccount();
        }
        if ($object->isInitialized('bankBic') && null !== $object->getBankBic()) {
            $data['bank_bic'] = $object->getBankBic();
        }
        if ($object->isInitialized('invoiceReceiver') && null !== $object->getInvoiceReceiver()) {
            $data['invoice_receiver'] = $object->getInvoiceReceiver();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('mailingListEmail') && null !== $object->getMailingListEmail()) {
            $data['mailing_list_email'] = $object->getMailingListEmail();
        }
        if ($object->isInitialized('mailingLists') && null !== $object->getMailingLists()) {
            $values = [];
            foreach ($object->getMailingLists() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['mailing_lists'] = $values;
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\Person::class => false];
    }
}
