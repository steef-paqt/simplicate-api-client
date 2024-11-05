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

class ExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\Expense::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\Expense::class;
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
        $object = new \Paqtcom\Simplicate\Model\Expense();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('purchase_price_unit', $data) && \is_int($data['purchase_price_unit'])) {
            $data['purchase_price_unit'] = (float) $data['purchase_price_unit'];
        }
        if (\array_key_exists('tariff', $data) && \is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (\array_key_exists('purchase_price_total', $data) && \is_int($data['purchase_price_total'])) {
            $data['purchase_price_total'] = (float) $data['purchase_price_total'];
        }
        if (\array_key_exists('purchase_margin', $data) && \is_int($data['purchase_margin'])) {
            $data['purchase_margin'] = (float) $data['purchase_margin'];
        }
        if (\array_key_exists('total_price', $data) && \is_int($data['total_price'])) {
            $data['total_price'] = (float) $data['total_price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \Paqtcom\Simplicate\Model\GetProjectSimple::class, 'json', $context));
        }
        if (\array_key_exists('service_id', $data)) {
            $object->setServiceId($data['service_id']);
        }
        if (\array_key_exists('costtype', $data)) {
            $object->setCosttype($this->denormalizer->denormalize($data['costtype'], \Paqtcom\Simplicate\Model\GetProjectServiceCostType::class, 'json', $context));
        }
        if (\array_key_exists('default_costtype', $data)) {
            $object->setDefaultCosttype($this->denormalizer->denormalize($data['default_costtype'], \Paqtcom\Simplicate\Model\GetPurchaseType::class, 'json', $context));
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('purchase_price_unit', $data)) {
            $object->setPurchasePriceUnit($data['purchase_price_unit']);
        }
        if (\array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (\array_key_exists('purchase_price_total', $data)) {
            $object->setPurchasePriceTotal($data['purchase_price_total']);
        }
        if (\array_key_exists('purchase_margin', $data)) {
            $object->setPurchaseMargin($data['purchase_margin']);
        }
        if (\array_key_exists('total_price', $data)) {
            $object->setTotalPrice($data['total_price']);
        }
        if (\array_key_exists('is_billable', $data)) {
            $object->setIsBillable($data['is_billable']);
        }
        if (\array_key_exists('approval_status', $data)) {
            $object->setApprovalStatus($this->denormalizer->denormalize($data['approval_status'], \Paqtcom\Simplicate\Model\ApprovalStatus::class, 'json', $context));
        }
        if (\array_key_exists('invoice_status', $data)) {
            $object->setInvoiceStatus($data['invoice_status']);
        }
        if (\array_key_exists('invoice', $data)) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \Paqtcom\Simplicate\Model\GetInvoice::class, 'json', $context));
        }
        if (\array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('service_purchase_start_date', $data)) {
            $object->setServicePurchaseStartDate($data['service_purchase_start_date']);
        }
        if (\array_key_exists('service_purchase_end_date', $data)) {
            $object->setServicePurchaseEndDate($data['service_purchase_end_date']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\ExpenseAttachment::class, 'json', $context);
            }
            $object->setAttachments($values);
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
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
            $data['service_id'] = $object->getServiceId();
        }
        if ($object->isInitialized('costtype') && null !== $object->getCosttype()) {
            $data['costtype'] = $this->normalizer->normalize($object->getCosttype(), 'json', $context);
        }
        if ($object->isInitialized('defaultCosttype') && null !== $object->getDefaultCosttype()) {
            $data['default_costtype'] = $this->normalizer->normalize($object->getDefaultCosttype(), 'json', $context);
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('purchasePriceUnit') && null !== $object->getPurchasePriceUnit()) {
            $data['purchase_price_unit'] = $object->getPurchasePriceUnit();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('purchasePriceTotal') && null !== $object->getPurchasePriceTotal()) {
            $data['purchase_price_total'] = $object->getPurchasePriceTotal();
        }
        if ($object->isInitialized('purchaseMargin') && null !== $object->getPurchaseMargin()) {
            $data['purchase_margin'] = $object->getPurchaseMargin();
        }
        if ($object->isInitialized('totalPrice') && null !== $object->getTotalPrice()) {
            $data['total_price'] = $object->getTotalPrice();
        }
        if ($object->isInitialized('isBillable') && null !== $object->getIsBillable()) {
            $data['is_billable'] = $object->getIsBillable();
        }
        if ($object->isInitialized('approvalStatus') && null !== $object->getApprovalStatus()) {
            $data['approval_status'] = $this->normalizer->normalize($object->getApprovalStatus(), 'json', $context);
        }
        if ($object->isInitialized('invoiceStatus') && null !== $object->getInvoiceStatus()) {
            $data['invoice_status'] = $object->getInvoiceStatus();
        }
        if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
            $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('servicePurchaseStartDate') && null !== $object->getServicePurchaseStartDate()) {
            $data['service_purchase_start_date'] = $object->getServicePurchaseStartDate();
        }
        if ($object->isInitialized('servicePurchaseEndDate') && null !== $object->getServicePurchaseEndDate()) {
            $data['service_purchase_end_date'] = $object->getServicePurchaseEndDate();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\Expense::class => false];
    }
}
