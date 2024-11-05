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

class SalesProgressHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\SalesProgressHistory::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\SalesProgressHistory::class;
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
        $object = new \Steefdw\Simplicate\Model\SalesProgressHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('sales', $data)) {
            $object->setSales($data['sales']);
        }
        if (\array_key_exists('sales_id', $data)) {
            $object->setSalesId($data['sales_id']);
        }
        if (\array_key_exists('from_sales_progress', $data)) {
            $object->setFromSalesProgress($this->denormalizer->denormalize($data['from_sales_progress'], \Steefdw\Simplicate\Model\SalesProgress::class, 'json', $context));
        }
        if (\array_key_exists('from_sales_progress_id', $data)) {
            $object->setFromSalesProgressId($data['from_sales_progress_id']);
        }
        if (\array_key_exists('to_sales_progress', $data)) {
            $object->setToSalesProgress($this->denormalizer->denormalize($data['to_sales_progress'], \Steefdw\Simplicate\Model\SalesProgress::class, 'json', $context));
        }
        if (\array_key_exists('to_sales_progress_id', $data)) {
            $object->setToSalesProgressId($data['to_sales_progress_id']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('sales') && null !== $object->getSales()) {
            $data['sales'] = $object->getSales();
        }
        if ($object->isInitialized('salesId') && null !== $object->getSalesId()) {
            $data['sales_id'] = $object->getSalesId();
        }
        if ($object->isInitialized('fromSalesProgress') && null !== $object->getFromSalesProgress()) {
            $data['from_sales_progress'] = $this->normalizer->normalize($object->getFromSalesProgress(), 'json', $context);
        }
        if ($object->isInitialized('fromSalesProgressId') && null !== $object->getFromSalesProgressId()) {
            $data['from_sales_progress_id'] = $object->getFromSalesProgressId();
        }
        if ($object->isInitialized('toSalesProgress') && null !== $object->getToSalesProgress()) {
            $data['to_sales_progress'] = $this->normalizer->normalize($object->getToSalesProgress(), 'json', $context);
        }
        if ($object->isInitialized('toSalesProgressId') && null !== $object->getToSalesProgressId()) {
            $data['to_sales_progress_id'] = $object->getToSalesProgressId();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\SalesProgressHistory::class => false];
    }
}
