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

class TimetableWeekDayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\TimetableWeekDay::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\TimetableWeekDay::class;
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
        $object = new \Steefdw\Simplicate\Model\TimetableWeekDay();
        if (\array_key_exists('start_time', $data) && \is_int($data['start_time'])) {
            $data['start_time'] = (float) $data['start_time'];
        }
        if (\array_key_exists('end_time', $data) && \is_int($data['end_time'])) {
            $data['end_time'] = (float) $data['end_time'];
        }
        if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
            $data['hours'] = (float) $data['hours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('start_time', $data)) {
            $object->setStartTime($data['start_time']);
        }
        if (\array_key_exists('end_time', $data)) {
            $object->setEndTime($data['end_time']);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('startTime') && null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime();
        }
        if ($object->isInitialized('endTime') && null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime();
        }
        if ($object->isInitialized('hours') && null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\TimetableWeekDay::class => false];
    }
}
