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

class PostAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PostAddress::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PostAddress::class;
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
        $object = new \Paqtcom\Simplicate\Model\PostAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('line_1', $data)) {
            $object->setLine1($data['line_1']);
        }
        if (\array_key_exists('line_2', $data)) {
            $object->setLine2($data['line_2']);
        }
        if (\array_key_exists('postal_code', $data)) {
            $object->setPostalCode($data['postal_code']);
        }
        if (\array_key_exists('province', $data)) {
            $object->setProvince($data['province']);
        }
        if (\array_key_exists('locality', $data)) {
            $object->setLocality($data['locality']);
        }
        if (\array_key_exists('country_code', $data)) {
            $object->setCountryCode($data['country_code']);
        }
        if (\array_key_exists('country_id', $data)) {
            $object->setCountryId($data['country_id']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('line1') && null !== $object->getLine1()) {
            $data['line_1'] = $object->getLine1();
        }
        if ($object->isInitialized('line2') && null !== $object->getLine2()) {
            $data['line_2'] = $object->getLine2();
        }
        if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
            $data['postal_code'] = $object->getPostalCode();
        }
        if ($object->isInitialized('province') && null !== $object->getProvince()) {
            $data['province'] = $object->getProvince();
        }
        if ($object->isInitialized('locality') && null !== $object->getLocality()) {
            $data['locality'] = $object->getLocality();
        }
        if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
            $data['country_code'] = $object->getCountryCode();
        }
        if ($object->isInitialized('countryId') && null !== $object->getCountryId()) {
            $data['country_id'] = $object->getCountryId();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\PostAddress::class => false];
    }
}
