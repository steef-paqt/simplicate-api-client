<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetEmployeeSimple;
use Paqtcom\Simplicate\Model\GetTimetable;
use Paqtcom\Simplicate\Model\TimetableWeek;
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
use function is_int;

class GetTimetableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetTimetable::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetTimetable::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetTimetable();
        if (array_key_exists('hourly_sales_tariff', $data) && is_int($data['hourly_sales_tariff'])) {
            $data['hourly_sales_tariff'] = (float) $data['hourly_sales_tariff'];
        }
        if (array_key_exists('hourly_cost_tariff', $data) && is_int($data['hourly_cost_tariff'])) {
            $data['hourly_cost_tariff'] = (float) $data['hourly_cost_tariff'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], GetEmployeeSimple::class, 'json', $context));
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('hourly_sales_tariff', $data)) {
            $object->setHourlySalesTariff($data['hourly_sales_tariff']);
        }
        if (array_key_exists('hourly_cost_tariff', $data)) {
            $object->setHourlyCostTariff($data['hourly_cost_tariff']);
        }
        if (array_key_exists('even_week', $data)) {
            $object->setEvenWeek($this->denormalizer->denormalize($data['even_week'], TimetableWeek::class, 'json', $context));
        }
        if (array_key_exists('odd_week', $data)) {
            $object->setOddWeek($this->denormalizer->denormalize($data['odd_week'], TimetableWeek::class, 'json', $context));
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (array_key_exists('productivity_target', $data)) {
            $object->setProductivityTarget($data['productivity_target']);
        }
        if (array_key_exists('should_write_hours', $data)) {
            $object->setShouldWriteHours($data['should_write_hours']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('hourlySalesTariff') && null !== $object->getHourlySalesTariff()) {
            $data['hourly_sales_tariff'] = $object->getHourlySalesTariff();
        }
        if ($object->isInitialized('hourlyCostTariff') && null !== $object->getHourlyCostTariff()) {
            $data['hourly_cost_tariff'] = $object->getHourlyCostTariff();
        }
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
        return [GetTimetable::class => false];
    }
}
