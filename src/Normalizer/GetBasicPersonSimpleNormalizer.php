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

class GetBasicPersonSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\GetBasicPersonSimple::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\GetBasicPersonSimple::class;
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
        $object = new \Steefdw\Simplicate\Model\GetBasicPersonSimple();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date_of_birth', $data)) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        if (\array_key_exists('gender_id', $data)) {
            $object->setGenderId($data['gender_id']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Steefdw\Simplicate\Model\GetAddress::class, 'json', $context));
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
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
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
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
        if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
            $data['date_of_birth'] = $object->getDateOfBirth();
        }
        if ($object->isInitialized('genderId') && null !== $object->getGenderId()) {
            $data['gender_id'] = $object->getGenderId();
        }
        if ($object->isInitialized('gender') && null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
            $data['full_name'] = $object->getFullName();
        }
        if ($object->isInitialized('relationNumber') && null !== $object->getRelationNumber()) {
            $data['relation_number'] = $object->getRelationNumber();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\GetBasicPersonSimple::class => false];
    }
}
