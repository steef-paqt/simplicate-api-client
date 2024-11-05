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

class JournalLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\JournalLine::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\JournalLine::class;
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
        $object = new \Steefdw\Simplicate\Model\JournalLine();
        if (\array_key_exists('vat_percentage', $data) && \is_int($data['vat_percentage'])) {
            $data['vat_percentage'] = (float) $data['vat_percentage'];
        }
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('vat_id', $data)) {
            $object->setVatId($data['vat_id']);
        }
        if (\array_key_exists('vat_included', $data)) {
            $object->setVatIncluded($data['vat_included']);
        }
        if (\array_key_exists('vat_percentage', $data)) {
            $object->setVatPercentage($data['vat_percentage']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('vatId') && null !== $object->getVatId()) {
            $data['vat_id'] = $object->getVatId();
        }
        if ($object->isInitialized('vatIncluded') && null !== $object->getVatIncluded()) {
            $data['vat_included'] = $object->getVatIncluded();
        }
        if ($object->isInitialized('vatPercentage') && null !== $object->getVatPercentage()) {
            $data['vat_percentage'] = $object->getVatPercentage();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\JournalLine::class => false];
    }
}
