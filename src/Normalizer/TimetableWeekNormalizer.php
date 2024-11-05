<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\TimetableWeek;
use Paqtcom\Simplicate\Model\TimetableWeekDay;
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

class TimetableWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === TimetableWeek::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === TimetableWeek::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new TimetableWeek();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('day_1', $data)) {
            $object->setDay1($this->denormalizer->denormalize($data['day_1'], TimetableWeekDay::class, 'json', $context));
        }
        if (array_key_exists('day_2', $data)) {
            $object->setDay2($this->denormalizer->denormalize($data['day_2'], TimetableWeekDay::class, 'json', $context));
        }
        if (array_key_exists('day_3', $data)) {
            $object->setDay3($this->denormalizer->denormalize($data['day_3'], TimetableWeekDay::class, 'json', $context));
        }
        if (array_key_exists('day_4', $data)) {
            $object->setDay4($this->denormalizer->denormalize($data['day_4'], TimetableWeekDay::class, 'json', $context));
        }
        if (array_key_exists('day_5', $data)) {
            $object->setDay5($this->denormalizer->denormalize($data['day_5'], TimetableWeekDay::class, 'json', $context));
        }
        if (array_key_exists('day_6', $data)) {
            $object->setDay6($this->denormalizer->denormalize($data['day_6'], TimetableWeekDay::class, 'json', $context));
        }
        if (array_key_exists('day_7', $data)) {
            $object->setDay7($this->denormalizer->denormalize($data['day_7'], TimetableWeekDay::class, 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('day1') && null !== $object->getDay1()) {
            $data['day_1'] = $this->normalizer->normalize($object->getDay1(), 'json', $context);
        }
        if ($object->isInitialized('day2') && null !== $object->getDay2()) {
            $data['day_2'] = $this->normalizer->normalize($object->getDay2(), 'json', $context);
        }
        if ($object->isInitialized('day3') && null !== $object->getDay3()) {
            $data['day_3'] = $this->normalizer->normalize($object->getDay3(), 'json', $context);
        }
        if ($object->isInitialized('day4') && null !== $object->getDay4()) {
            $data['day_4'] = $this->normalizer->normalize($object->getDay4(), 'json', $context);
        }
        if ($object->isInitialized('day5') && null !== $object->getDay5()) {
            $data['day_5'] = $this->normalizer->normalize($object->getDay5(), 'json', $context);
        }
        if ($object->isInitialized('day6') && null !== $object->getDay6()) {
            $data['day_6'] = $this->normalizer->normalize($object->getDay6(), 'json', $context);
        }
        if ($object->isInitialized('day7') && null !== $object->getDay7()) {
            $data['day_7'] = $this->normalizer->normalize($object->getDay7(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [TimetableWeek::class => false];
    }
}
