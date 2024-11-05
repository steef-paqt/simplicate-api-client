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

class GetSalesServiceCostTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\GetSalesServiceCostType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\GetSalesServiceCostType::class;
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
        $object = new \Steefdw\Simplicate\Model\GetSalesServiceCostType();
        if (\array_key_exists('budgeted_amount', $data) && \is_int($data['budgeted_amount'])) {
            $data['budgeted_amount'] = (float) $data['budgeted_amount'];
        }
        if (\array_key_exists('tariff', $data) && \is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (\array_key_exists('purchase_margin', $data) && \is_int($data['purchase_margin'])) {
            $data['purchase_margin'] = (float) $data['purchase_margin'];
        }
        if (\array_key_exists('purchase_tariff', $data) && \is_int($data['purchase_tariff'])) {
            $data['purchase_tariff'] = (float) $data['purchase_tariff'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('costtype', $data)) {
            $object->setCosttype($this->denormalizer->denormalize($data['costtype'], \Steefdw\Simplicate\Model\GetPurchaseType::class, 'json', $context));
        }
        if (\array_key_exists('budgeted_amount', $data)) {
            $object->setBudgetedAmount($data['budgeted_amount']);
        }
        if (\array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (\array_key_exists('purchase_margin', $data)) {
            $object->setPurchaseMargin($data['purchase_margin']);
        }
        if (\array_key_exists('purchase_tariff', $data)) {
            $object->setPurchaseTariff($data['purchase_tariff']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
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
        return [\Steefdw\Simplicate\Model\GetSalesServiceCostType::class => false];
    }
}
