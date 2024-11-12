<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetApprovalStatus;
use Paqtcom\Simplicate\Model\GetEmployeeSimple;
use Paqtcom\Simplicate\Model\GetHoursType;
use Paqtcom\Simplicate\Model\GetMileage;
use Paqtcom\Simplicate\Model\GetProjectSimple;
use Paqtcom\Simplicate\Model\VatClass;
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

class GetMileageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetMileage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetMileage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetMileage();
        if (array_key_exists('tariff', $data) && is_int($data['tariff'])) {
            $data['tariff'] = (float) $data['tariff'];
        }
        if (array_key_exists('mileage', $data) && is_int($data['mileage'])) {
            $data['mileage'] = (float) $data['mileage'];
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
        if (array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], GetProjectSimple::class, 'json', $context));
        }
        if (array_key_exists('type', $data)) {
            $object->setType($this->denormalizer->denormalize($data['type'], GetHoursType::class, 'json', $context));
        }
        if (array_key_exists('approvalstatus', $data)) {
            $object->setApprovalstatus($this->denormalizer->denormalize($data['approvalstatus'], GetApprovalStatus::class, 'json', $context));
        }
        if (array_key_exists('invoice_status', $data)) {
            $object->setInvoiceStatus($data['invoice_status']);
        }
        if (array_key_exists('invoice_id', $data)) {
            $object->setInvoiceId($data['invoice_id']);
        }
        if (array_key_exists('invoiceline_id', $data)) {
            $object->setInvoicelineId($data['invoiceline_id']);
        }
        if (array_key_exists('tariff', $data)) {
            $object->setTariff($data['tariff']);
        }
        if (array_key_exists('vatclass', $data)) {
            $object->setVatclass($this->denormalizer->denormalize($data['vatclass'], VatClass::class, 'json', $context));
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('mileage', $data)) {
            $object->setMileage($data['mileage']);
        }
        if (array_key_exists('related_hours_id', $data)) {
            $object->setRelatedHoursId($data['related_hours_id']);
        }
        if (array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
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
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
        }
        if ($object->isInitialized('approvalstatus') && null !== $object->getApprovalstatus()) {
            $data['approvalstatus'] = $this->normalizer->normalize($object->getApprovalstatus(), 'json', $context);
        }
        if ($object->isInitialized('invoiceStatus') && null !== $object->getInvoiceStatus()) {
            $data['invoice_status'] = $object->getInvoiceStatus();
        }
        if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
            $data['invoice_id'] = $object->getInvoiceId();
        }
        if ($object->isInitialized('invoicelineId') && null !== $object->getInvoicelineId()) {
            $data['invoiceline_id'] = $object->getInvoicelineId();
        }
        if ($object->isInitialized('tariff') && null !== $object->getTariff()) {
            $data['tariff'] = $object->getTariff();
        }
        if ($object->isInitialized('vatclass') && null !== $object->getVatclass()) {
            $data['vatclass'] = $this->normalizer->normalize($object->getVatclass(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('mileage') && null !== $object->getMileage()) {
            $data['mileage'] = $object->getMileage();
        }
        if ($object->isInitialized('relatedHoursId') && null !== $object->getRelatedHoursId()) {
            $data['related_hours_id'] = $object->getRelatedHoursId();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetMileage::class => false];
    }
}
