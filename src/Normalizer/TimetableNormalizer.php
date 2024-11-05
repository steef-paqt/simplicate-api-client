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

class TimetableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\Timetable::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\Timetable::class;
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
        $object = new \Steefdw\Simplicate\Model\Timetable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('even_week', $data)) {
            $object->setEvenWeek($this->denormalizer->denormalize($data['even_week'], \Steefdw\Simplicate\Model\TimetableWeek::class, 'json', $context));
        }
        if (\array_key_exists('odd_week', $data)) {
            $object->setOddWeek($this->denormalizer->denormalize($data['odd_week'], \Steefdw\Simplicate\Model\TimetableWeek::class, 'json', $context));
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (\array_key_exists('productivity_target', $data)) {
            $object->setProductivityTarget($data['productivity_target']);
        }
        if (\array_key_exists('should_write_hours', $data)) {
            $object->setShouldWriteHours($data['should_write_hours']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('evenWeek') && null !== $object->getEvenWeek()) {
            $data['even_week'] = $this->normalizer->normalize($object->getEvenWeek(), 'json', $context);
        }
        if ($object->isInitialized('oddWeek') && null !== $object->getOddWeek()) {
            $data['odd_week'] = $this->normalizer->normalize($object->getOddWeek(), 'json', $context);
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('productivityTarget') && null !== $object->getProductivityTarget()) {
            $data['productivity_target'] = $object->getProductivityTarget();
        }
        if ($object->isInitialized('shouldWriteHours') && null !== $object->getShouldWriteHours()) {
            $data['should_write_hours'] = $object->getShouldWriteHours();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\Timetable::class => false];
    }
}
