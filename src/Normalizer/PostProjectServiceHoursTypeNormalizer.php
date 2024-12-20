<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostProjectServiceHoursType;
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

class PostProjectServiceHoursTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostProjectServiceHoursType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostProjectServiceHoursType::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostProjectServiceHoursType();
        if (array_key_exists('budgeted_amount', $data) && is_int($data['budgeted_amount'])) {
            $data['budgeted_amount'] = (float) $data['budgeted_amount'];
        }
        if (array_key_exists('tariff', $data) && is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('hourstype_id', $data)) {
            $object->setHourstypeId($data['hourstype_id']);
        }
        if (array_key_exists('budgeted_amount', $data)) {
            $object->setBudgetedAmount($data['budgeted_amount']);
        }
        if (array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('hourstypeId') && null !== $object->getHourstypeId()) {
            $data['hourstype_id'] = $object->getHourstypeId();
        }
        if ($object->isInitialized('budgetedAmount') && null !== $object->getBudgetedAmount()) {
            $data['budgeted_amount'] = $object->getBudgetedAmount();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('billable') && null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostProjectServiceHoursType::class => false];
    }
}
