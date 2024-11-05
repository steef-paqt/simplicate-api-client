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

class ResultPostMergerCompareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\ResultPostMergerCompare::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\ResultPostMergerCompare::class;
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
        $object = new \Steefdw\Simplicate\Model\ResultPostMergerCompare();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_valid', $data)) {
            $object->setIsValid($data['is_valid']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('swap_lock', $data)) {
            $object->setSwapLock($data['swap_lock']);
        }
        if (\array_key_exists('source_id', $data)) {
            $object->setSourceId($data['source_id']);
        }
        if (\array_key_exists('target_id', $data)) {
            $object->setTargetId($data['target_id']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('isValid') && null !== $object->getIsValid()) {
            $data['is_valid'] = $object->getIsValid();
        }
        if ($object->isInitialized('token') && null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        if ($object->isInitialized('message') && null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if ($object->isInitialized('swapLock') && null !== $object->getSwapLock()) {
            $data['swap_lock'] = $object->getSwapLock();
        }
        if ($object->isInitialized('sourceId') && null !== $object->getSourceId()) {
            $data['source_id'] = $object->getSourceId();
        }
        if ($object->isInitialized('targetId') && null !== $object->getTargetId()) {
            $data['target_id'] = $object->getTargetId();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\ResultPostMergerCompare::class => false];
    }
}
