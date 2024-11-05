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

class RestResultSalesStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\RestResultSalesStatus::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\RestResultSalesStatus::class;
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
        $object = new \Steefdw\Simplicate\Model\RestResultSalesStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data)) {
            $object->setData($this->denormalizer->denormalize($data['data'], \Steefdw\Simplicate\Model\SalesStatus::class, 'json', $context));
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], \Steefdw\Simplicate\Model\MetaData::class, 'json', $context));
        }
        if (\array_key_exists('errors', $data)) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $value;
            }
            $object->setErrors($values);
        }
        if (\array_key_exists('debug', $data)) {
            $values_1 = [];
            foreach ($data['debug'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDebug($values_1);
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
            $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $values = [];
            foreach ($object->getErrors() as $value) {
                $values[] = $value;
            }
            $data['errors'] = $values;
        }
        if ($object->isInitialized('debug') && null !== $object->getDebug()) {
            $values_1 = [];
            foreach ($object->getDebug() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['debug'] = $values_1;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\RestResultSalesStatus::class => false];
    }
}
