<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetPurchaseType;
use Paqtcom\Simplicate\Model\GetServiceCostType;
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

class GetServiceCostTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetServiceCostType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetServiceCostType::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetServiceCostType();
        if (array_key_exists('budgeted_amount', $data) && is_int($data['budgeted_amount'])) {
            $data['budgeted_amount'] = (float) $data['budgeted_amount'];
        }
        if (array_key_exists('tariff', $data) && is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (array_key_exists('purchase_margin', $data) && is_int($data['purchase_margin'])) {
            $data['purchase_margin'] = (float) $data['purchase_margin'];
        }
        if (array_key_exists('purchase_tariff', $data) && is_int($data['purchase_tariff'])) {
            $data['purchase_tariff'] = (float) $data['purchase_tariff'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('costtype', $data)) {
            $object->setCosttype($this->denormalizer->denormalize($data['costtype'], GetPurchaseType::class, 'json', $context));
        }
        if (array_key_exists('budgeted_amount', $data)) {
            $object->setBudgetedAmount($data['budgeted_amount']);
        }
        if (array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (array_key_exists('purchase_margin', $data)) {
            $object->setPurchaseMargin($data['purchase_margin']);
        }
        if (array_key_exists('purchase_tariff', $data)) {
            $object->setPurchaseTariff($data['purchase_tariff']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('costtype') && null !== $object->getCosttype()) {
            $data['costtype'] = $this->normalizer->normalize($object->getCosttype(), 'json', $context);
        }
        if ($object->isInitialized('budgetedAmount') && null !== $object->getBudgetedAmount()) {
            $data['budgeted_amount'] = $object->getBudgetedAmount();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('purchaseMargin') && null !== $object->getPurchaseMargin()) {
            $data['purchase_margin'] = $object->getPurchaseMargin();
        }
        if ($object->isInitialized('purchaseTariff') && null !== $object->getPurchaseTariff()) {
            $data['purchase_tariff'] = $object->getPurchaseTariff();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetServiceCostType::class => false];
    }
}
