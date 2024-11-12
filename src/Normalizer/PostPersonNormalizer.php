<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PersonMailingList;
use Paqtcom\Simplicate\Model\PostAddress;
use Paqtcom\Simplicate\Model\PostContactOrganizationFk;
use Paqtcom\Simplicate\Model\PostCustomFieldValue;
use Paqtcom\Simplicate\Model\PostInterest;
use Paqtcom\Simplicate\Model\PostPerson;
use Paqtcom\Simplicate\Model\PostTeam;
use Paqtcom\Simplicate\Model\RelationType;
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

class PostPersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostPerson::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostPerson::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostPerson();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('interests', $data)) {
            $values = [];
            foreach ($data['interests'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PostInterest::class, 'json', $context);
            }
            $object->setInterests($values);
        }
        if (array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], PostAddress::class, 'json', $context));
        }
        if (array_key_exists('linked_as_contact_to_organization', $data)) {
            $values_1 = [];
            foreach ($data['linked_as_contact_to_organization'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, PostContactOrganizationFk::class, 'json', $context);
            }
            $object->setLinkedAsContactToOrganization($values_1);
        }
        if (array_key_exists('gender_id', $data)) {
            $object->setGenderId($data['gender_id']);
        }
        if (array_key_exists('teams', $data)) {
            $values_2 = [];
            foreach ($data['teams'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, PostTeam::class, 'json', $context);
            }
            $object->setTeams($values_2);
        }
        if (array_key_exists('custom_fields', $data)) {
            $values_3 = [];
            foreach ($data['custom_fields'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, PostCustomFieldValue::class, 'json', $context);
            }
            $object->setCustomFields($values_3);
        }
        if (array_key_exists('relation_type', $data)) {
            $object->setRelationType($this->denormalizer->denormalize($data['relation_type'], RelationType::class, 'json', $context));
        }
        if (array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (array_key_exists('initials', $data)) {
            $object->setInitials($data['initials']);
        }
        if (array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (array_key_exists('family_name_prefix', $data)) {
            $object->setFamilyNamePrefix($data['family_name_prefix']);
        }
        if (array_key_exists('family_name', $data)) {
            $object->setFamilyName($data['family_name']);
        }
        if (array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
        }
        if (array_key_exists('date_of_birth', $data)) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (array_key_exists('website_url', $data)) {
            $object->setWebsiteUrl($data['website_url']);
        }
        if (array_key_exists('twitter_url', $data)) {
            $object->setTwitterUrl($data['twitter_url']);
        }
        if (array_key_exists('linkedin_url', $data)) {
            $object->setLinkedinUrl($data['linkedin_url']);
        }
        if (array_key_exists('facebook_url', $data)) {
            $object->setFacebookUrl($data['facebook_url']);
        }
        if (array_key_exists('relation_number', $data)) {
            $object->setRelationNumber($data['relation_number']);
        }
        if (array_key_exists('bank_account', $data)) {
            $object->setBankAccount($data['bank_account']);
        }
        if (array_key_exists('bank_bic', $data)) {
            $object->setBankBic($data['bank_bic']);
        }
        if (array_key_exists('invoice_receiver', $data)) {
            $object->setInvoiceReceiver($data['invoice_receiver']);
        }
        if (array_key_exists('mailing_list_email', $data)) {
            $object->setMailingListEmail($data['mailing_list_email']);
        }
        if (array_key_exists('mailing_lists', $data)) {
            $values_4 = [];
            foreach ($data['mailing_lists'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, PersonMailingList::class, 'json', $context);
            }
            $object->setMailingLists($values_4);
        }
        if (array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('interests') && null !== $object->getInterests()) {
            $values = [];
            foreach ($object->getInterests() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['interests'] = $values;
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('linkedAsContactToOrganization') && null !== $object->getLinkedAsContactToOrganization()) {
            $values_1 = [];
            foreach ($object->getLinkedAsContactToOrganization() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_as_contact_to_organization'] = $values_1;
        }
        if ($object->isInitialized('genderId') && null !== $object->getGenderId()) {
            $data['gender_id'] = $object->getGenderId();
        }
        if ($object->isInitialized('teams') && null !== $object->getTeams()) {
            $values_2 = [];
            foreach ($object->getTeams() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['teams'] = $values_2;
        }
        if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
            $values_3 = [];
            foreach ($object->getCustomFields() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['custom_fields'] = $values_3;
        }
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
        if ($object->isInitialized('mailingListEmail') && null !== $object->getMailingListEmail()) {
            $data['mailing_list_email'] = $object->getMailingListEmail();
        }
        if ($object->isInitialized('mailingLists') && null !== $object->getMailingLists()) {
            $values_4 = [];
            foreach ($object->getMailingLists() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['mailing_lists'] = $values_4;
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostPerson::class => false];
    }
}
