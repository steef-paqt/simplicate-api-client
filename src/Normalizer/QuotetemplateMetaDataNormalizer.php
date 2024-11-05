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

class QuotetemplateMetaDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\QuotetemplateMetaData::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\QuotetemplateMetaData::class;
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
        $object = new \Steefdw\Simplicate\Model\QuotetemplateMetaData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('configuration', $data)) {
            $object->setConfiguration($this->denormalizer->denormalize($data['configuration'], \Steefdw\Simplicate\Model\QuotetemplateConfigurationMetaData::class, 'json', $context));
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
        }
        if (\array_key_exists('offset', $data)) {
            $object->setOffset($data['offset']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('upper_limit', $data)) {
            $object->setUpperLimit($data['upper_limit']);
        }
        if (\array_key_exists('nocleanup', $data)) {
            $object->setNocleanup($data['nocleanup']);
        }
        if (\array_key_exists('checksum', $data)) {
            $object->setChecksum($data['checksum']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('configuration') && null !== $object->getConfiguration()) {
            $data['configuration'] = $this->normalizer->normalize($object->getConfiguration(), 'json', $context);
        }
        if ($object->isInitialized('count') && null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if ($object->isInitialized('totalCount') && null !== $object->getTotalCount()) {
            $data['total_count'] = $object->getTotalCount();
        }
        if ($object->isInitialized('offset') && null !== $object->getOffset()) {
            $data['offset'] = $object->getOffset();
        }
        if ($object->isInitialized('limit') && null !== $object->getLimit()) {
            $data['limit'] = $object->getLimit();
        }
        if ($object->isInitialized('upperLimit') && null !== $object->getUpperLimit()) {
            $data['upper_limit'] = $object->getUpperLimit();
        }
        if ($object->isInitialized('nocleanup') && null !== $object->getNocleanup()) {
            $data['nocleanup'] = $object->getNocleanup();
        }
        if ($object->isInitialized('checksum') && null !== $object->getChecksum()) {
            $data['checksum'] = $object->getChecksum();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\QuotetemplateMetaData::class => false];
    }
}
