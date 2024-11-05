<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Installment;
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

class InstallmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Installment::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Installment::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Installment();
        if (array_key_exists('percentage', $data) && is_int($data['percentage'])) {
            $data['percentage'] = (float) $data['percentage'];
        }
        if (array_key_exists('price', $data) && is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('percentage', $data)) {
            $object->setPercentage($data['percentage']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (array_key_exists('expiration_date', $data)) {
            $object->setExpirationDate($data['expiration_date']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (array_key_exists('invoiced_date', $data)) {
            $object->setInvoicedDate($data['invoiced_date']);
        }
        if (array_key_exists('invoice_id', $data)) {
            $object->setInvoiceId($data['invoice_id']);
        }
        if (array_key_exists('invoice_line_id', $data)) {
            $object->setInvoiceLineId($data['invoice_line_id']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('percentage') && null !== $object->getPercentage()) {
            $data['percentage'] = $object->getPercentage();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('order') && null !== $object->getOrder()) {
            $data['order'] = $object->getOrder();
        }
        if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('invoicedDate') && null !== $object->getInvoicedDate()) {
            $data['invoiced_date'] = $object->getInvoicedDate();
        }
        if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
            $data['invoice_id'] = $object->getInvoiceId();
        }
        if ($object->isInitialized('invoiceLineId') && null !== $object->getInvoiceLineId()) {
            $data['invoice_line_id'] = $object->getInvoiceLineId();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Installment::class => false];
    }
}
