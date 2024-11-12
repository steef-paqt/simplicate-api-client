<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ExternalItemMetadata;
use Paqtcom\Simplicate\Model\ExternalItemMetadataConfiguration;
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

class ExternalItemMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ExternalItemMetadata::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ExternalItemMetadata::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ExternalItemMetadata();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('configuration', $data)) {
            $object->setConfiguration($this->denormalizer->denormalize($data['configuration'], ExternalItemMetadataConfiguration::class, 'json', $context));
        }
        if (array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        if (array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
        }
        if (array_key_exists('offset', $data)) {
            $object->setOffset($data['offset']);
        }
        if (array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (array_key_exists('upper_limit', $data)) {
            $object->setUpperLimit($data['upper_limit']);
        }
        if (array_key_exists('nocleanup', $data)) {
            $object->setNocleanup($data['nocleanup']);
        }
        if (array_key_exists('checksum', $data)) {
            $object->setChecksum($data['checksum']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
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
        return [ExternalItemMetadata::class => false];
    }
}
