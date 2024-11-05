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

class RruleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\Rrule::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\Rrule::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\Rrule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dtstart', $data)) {
            $object->setDtstart($data['dtstart']);
        }
        if (\array_key_exists('freq', $data)) {
            $object->setFreq($data['freq']);
        }
        if (\array_key_exists('until', $data)) {
            $object->setUntil($data['until']);
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($data['interval']);
        }
        if (\array_key_exists('wkst', $data)) {
            $object->setWkst($data['wkst']);
        }
        if (\array_key_exists('byday', $data)) {
            $object->setByday($data['byday']);
        }
        if (\array_key_exists('bysetpos', $data)) {
            $object->setBysetpos($data['bysetpos']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('dtstart') && null !== $object->getDtstart()) {
            $data['dtstart'] = $object->getDtstart();
        }
        if ($object->isInitialized('freq') && null !== $object->getFreq()) {
            $data['freq'] = $object->getFreq();
        }
        if ($object->isInitialized('until') && null !== $object->getUntil()) {
            $data['until'] = $object->getUntil();
        }
        if ($object->isInitialized('count') && null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if ($object->isInitialized('interval') && null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if ($object->isInitialized('wkst') && null !== $object->getWkst()) {
            $data['wkst'] = $object->getWkst();
        }
        if ($object->isInitialized('byday') && null !== $object->getByday()) {
            $data['byday'] = $object->getByday();
        }
        if ($object->isInitialized('bysetpos') && null !== $object->getBysetpos()) {
            $data['bysetpos'] = $object->getBysetpos();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\Rrule::class => false];
    }
}
