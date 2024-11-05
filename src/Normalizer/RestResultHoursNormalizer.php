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

class RestResultHoursNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\RestResultHours::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\RestResultHours::class;
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
        $object = new \Steefdw\Simplicate\Model\RestResultHours();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\GetHours::class, 'json', $context);
            }
            $object->setData($values);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], \Steefdw\Simplicate\Model\MetaData::class, 'json', $context));
        }
        if (\array_key_exists('errors', $data)) {
            $values_1 = [];
            foreach ($data['errors'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setErrors($values_1);
        }
        if (\array_key_exists('debug', $data)) {
            $values_2 = [];
            foreach ($data['debug'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDebug($values_2);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('data') && null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $values_1 = [];
            foreach ($object->getErrors() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['errors'] = $values_1;
        }
        if ($object->isInitialized('debug') && null !== $object->getDebug()) {
            $values_2 = [];
            foreach ($object->getDebug() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['debug'] = $values_2;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\RestResultHours::class => false];
    }
}
