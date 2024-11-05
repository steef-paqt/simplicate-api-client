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

class ProjectServiceHoursTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\ProjectServiceHoursType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\ProjectServiceHoursType::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\ProjectServiceHoursType();
        if (\array_key_exists('budgeted_amount', $data) && \is_int($data['budgeted_amount'])) {
            $data['budgeted_amount'] = (float) $data['budgeted_amount'];
        }
        if (\array_key_exists('tariff', $data) && \is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('budgeted_amount', $data)) {
            $object->setBudgetedAmount($data['budgeted_amount']);
        }
        if (\array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
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
        return [\Paqtcom\Simplicate\Model\ProjectServiceHoursType::class => false];
    }
}
