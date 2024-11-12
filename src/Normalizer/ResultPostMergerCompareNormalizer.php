<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ResultPostMergerCompare;
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

class ResultPostMergerCompareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ResultPostMergerCompare::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ResultPostMergerCompare::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResultPostMergerCompare();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('is_valid', $data)) {
            $object->setIsValid($data['is_valid']);
        }
        if (array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        if (array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (array_key_exists('swap_lock', $data)) {
            $object->setSwapLock($data['swap_lock']);
        }
        if (array_key_exists('source_id', $data)) {
            $object->setSourceId($data['source_id']);
        }
        if (array_key_exists('target_id', $data)) {
            $object->setTargetId($data['target_id']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
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
        return [ResultPostMergerCompare::class => false];
    }
}
