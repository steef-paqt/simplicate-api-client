<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetProjectService;
use Paqtcom\Simplicate\Model\GetProjectServiceCostType;
use Paqtcom\Simplicate\Model\GetProjectServiceHoursType;
use Paqtcom\Simplicate\Model\Installment;
use Paqtcom\Simplicate\Model\RevenueGroup;
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

class GetProjectServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetProjectService::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetProjectService::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetProjectService();
        if (array_key_exists('budget', $data) && is_int($data['budget'])) {
            $data['budget'] = (float) $data['budget'];
        }
        if (array_key_exists('amount', $data) && is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (array_key_exists('price', $data) && is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (array_key_exists('related_service_id', $data)) {
            $object->setRelatedServiceId($data['related_service_id']);
        }
        if (array_key_exists('expected_invoice_date', $data)) {
            $object->setExpectedInvoiceDate($data['expected_invoice_date']);
        }
        if (array_key_exists('invoice_date', $data)) {
            $object->setInvoiceDate($data['invoice_date']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (array_key_exists('hour_types', $data)) {
            $values = [];
            foreach ($data['hour_types'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetProjectServiceHoursType::class, 'json', $context);
            }
            $object->setHourTypes($values);
        }
        if (array_key_exists('cost_types', $data)) {
            $values_1 = [];
            foreach ($data['cost_types'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, GetProjectServiceCostType::class, 'json', $context);
            }
            $object->setCostTypes($values_1);
        }
        if (array_key_exists('vat_class', $data)) {
            $object->setVatClass($this->denormalizer->denormalize($data['vat_class'], VatClass::class, 'json', $context));
        }
        if (!empty($data['revenue_group'])) {
            $object->setRevenueGroup($this->denormalizer->denormalize($data['revenue_group'], RevenueGroup::class, 'json', $context));
        }
        if (array_key_exists('invoice_in_installments', $data)) {
            $object->setInvoiceInInstallments($data['invoice_in_installments']);
        }
        if (array_key_exists('installments', $data)) {
            $values_2 = [];
            foreach ($data['installments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, Installment::class, 'json', $context);
            }
            $object->setInstallments($values_2);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('budget_financial_hours', $data)) {
            $object->setBudgetFinancialHours($data['budget_financial_hours']);
        }
        if (array_key_exists('write_hours_start_date', $data)) {
            $object->setWriteHoursStartDate($data['write_hours_start_date']);
        }
        if (array_key_exists('write_hours_end_date', $data)) {
            $object->setWriteHoursEndDate($data['write_hours_end_date']);
        }
        if (array_key_exists('service_number', $data)) {
            $object->setServiceNumber($data['service_number']);
        }
        if (array_key_exists('use_in_resource_planner', $data)) {
            $object->setUseInResourcePlanner($data['use_in_resource_planner']);
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('end_date', $data)) {
            $object->setEndDate($data['end_date']);
        }
        if (array_key_exists('subscription_cycle', $data)) {
            $object->setSubscriptionCycle($data['subscription_cycle']);
        }
        if (array_key_exists('budget', $data)) {
            $object->setBudget((float) $data['budget']);
        }
        if (array_key_exists('default_service_id', $data)) {
            $object->setDefaultServiceId($data['default_service_id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('explanation', $data)) {
            $object->setExplanation($data['explanation']);
        }
        if (array_key_exists('invoice_method', $data)) {
            $object->setInvoiceMethod($data['invoice_method']);
        }
        if (array_key_exists('amount', $data)) {
            $object->setAmount((float) $data['amount']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice((float) $data['price']);
        }
        if (array_key_exists('track_hours', $data)) {
            $object->setTrackHours((bool) $data['track_hours']);
        }
        if (array_key_exists('track_cost', $data)) {
            $object->setTrackCost((bool) $data['track_cost']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('relatedServiceId') && null !== $object->getRelatedServiceId()) {
            $data['related_service_id'] = $object->getRelatedServiceId();
        }
        if ($object->isInitialized('expectedInvoiceDate') && null !== $object->getExpectedInvoiceDate()) {
            $data['expected_invoice_date'] = $object->getExpectedInvoiceDate();
        }
        if ($object->isInitialized('invoiceDate') && null !== $object->getInvoiceDate()) {
            $data['invoice_date'] = $object->getInvoiceDate();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('hourTypes') && null !== $object->getHourTypes()) {
            $values = [];
            foreach ($object->getHourTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['hour_types'] = $values;
        }
        if ($object->isInitialized('costTypes') && null !== $object->getCostTypes()) {
            $values_1 = [];
            foreach ($object->getCostTypes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['cost_types'] = $values_1;
        }
        if ($object->isInitialized('vatClass') && null !== $object->getVatClass()) {
            $data['vat_class'] = $this->normalizer->normalize($object->getVatClass(), 'json', $context);
        }
        if ($object->isInitialized('revenueGroup') && null !== $object->getRevenueGroup()) {
            $data['revenue_group'] = $this->normalizer->normalize($object->getRevenueGroup(), 'json', $context);
        }
        if ($object->isInitialized('invoiceInInstallments') && null !== $object->getInvoiceInInstallments()) {
            $data['invoice_in_installments'] = $object->getInvoiceInInstallments();
        }
        if ($object->isInitialized('installments') && null !== $object->getInstallments()) {
            $values_2 = [];
            foreach ($object->getInstallments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['installments'] = $values_2;
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('budgetFinancialHours') && null !== $object->getBudgetFinancialHours()) {
            $data['budget_financial_hours'] = $object->getBudgetFinancialHours();
        }
        if ($object->isInitialized('writeHoursStartDate') && null !== $object->getWriteHoursStartDate()) {
            $data['write_hours_start_date'] = $object->getWriteHoursStartDate();
        }
        if ($object->isInitialized('writeHoursEndDate') && null !== $object->getWriteHoursEndDate()) {
            $data['write_hours_end_date'] = $object->getWriteHoursEndDate();
        }
        if ($object->isInitialized('serviceNumber') && null !== $object->getServiceNumber()) {
            $data['service_number'] = $object->getServiceNumber();
        }
        if ($object->isInitialized('useInResourcePlanner') && null !== $object->getUseInResourcePlanner()) {
            $data['use_in_resource_planner'] = $object->getUseInResourcePlanner();
        }
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if ($object->isInitialized('subscriptionCycle') && null !== $object->getSubscriptionCycle()) {
            $data['subscription_cycle'] = $object->getSubscriptionCycle();
        }
        if ($object->isInitialized('budget') && null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        if ($object->isInitialized('defaultServiceId') && null !== $object->getDefaultServiceId()) {
            $data['default_service_id'] = $object->getDefaultServiceId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('explanation') && null !== $object->getExplanation()) {
            $data['explanation'] = $object->getExplanation();
        }
        if ($object->isInitialized('invoiceMethod') && null !== $object->getInvoiceMethod()) {
            $data['invoice_method'] = $object->getInvoiceMethod();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('trackHours') && null !== $object->getTrackHours()) {
            $data['track_hours'] = $object->getTrackHours();
        }
        if ($object->isInitialized('trackCost') && null !== $object->getTrackCost()) {
            $data['track_cost'] = $object->getTrackCost();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetProjectService::class => false];
    }
}
