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

class PostEmployeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PostEmployee::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PostEmployee::class;
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
        $object = new \Steefdw\Simplicate\Model\PostEmployee();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (\array_key_exists('supervisor', $data)) {
            $object->setSupervisor($this->denormalizer->denormalize($data['supervisor'], \Steefdw\Simplicate\Model\PostEmployeeFk::class, 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], \Steefdw\Simplicate\Model\PostEmployeeStatusFk::class, 'json', $context));
        }
        if (\array_key_exists('custom_fields', $data)) {
            $values = [];
            foreach ($data['custom_fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\PostCustomFieldValue::class, 'json', $context);
            }
            $object->setCustomFields($values);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('supervisor') && null !== $object->getSupervisor()) {
            $data['supervisor'] = $this->normalizer->normalize($object->getSupervisor(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom_fields'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\PostEmployee::class => false];
    }
}
