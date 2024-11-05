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

class PersonContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PersonContact::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PersonContact::class;
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
        $object = new \Steefdw\Simplicate\Model\PersonContact();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
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
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('work_function', $data)) {
            $object->setWorkFunction($data['work_function']);
        }
        if (\array_key_exists('work_email', $data)) {
            $object->setWorkEmail($data['work_email']);
        }
        if (\array_key_exists('work_phone', $data)) {
            $object->setWorkPhone($data['work_phone']);
        }
        if (\array_key_exists('work_mobile', $data)) {
            $object->setWorkMobile($data['work_mobile']);
        }
        if (\array_key_exists('interests', $data)) {
            $values = [];
            foreach ($data['interests'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\Interest::class, 'json', $context);
            }
            $object->setInterests($values);
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
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
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
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if ($object->isInitialized('workFunction') && null !== $object->getWorkFunction()) {
            $data['work_function'] = $object->getWorkFunction();
        }
        if ($object->isInitialized('workEmail') && null !== $object->getWorkEmail()) {
            $data['work_email'] = $object->getWorkEmail();
        }
        if ($object->isInitialized('workPhone') && null !== $object->getWorkPhone()) {
            $data['work_phone'] = $object->getWorkPhone();
        }
        if ($object->isInitialized('workMobile') && null !== $object->getWorkMobile()) {
            $data['work_mobile'] = $object->getWorkMobile();
        }
        if ($object->isInitialized('interests') && null !== $object->getInterests()) {
            $values = [];
            foreach ($object->getInterests() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['interests'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\PersonContact::class => false];
    }
}
