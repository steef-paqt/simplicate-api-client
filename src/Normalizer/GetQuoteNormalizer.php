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

class GetQuoteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetQuote::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetQuote::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetQuote();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('quotetemplate', $data)) {
            $object->setQuotetemplate($this->denormalizer->denormalize($data['quotetemplate'], \Paqtcom\Simplicate\Model\QuoteTemplate::class, 'json', $context));
        }
        if (\array_key_exists('send_type', $data)) {
            $object->setSendType($data['send_type']);
        }
        if (\array_key_exists('quote_number', $data)) {
            $object->setQuoteNumber($data['quote_number']);
        }
        if (\array_key_exists('quote_date', $data)) {
            $object->setQuoteDate($data['quote_date']);
        }
        if (\array_key_exists('quotestatus', $data)) {
            $object->setQuotestatus($this->denormalizer->denormalize($data['quotestatus'], \Paqtcom\Simplicate\Model\QuoteStatus::class, 'json', $context));
        }
        if (\array_key_exists('json', $data)) {
            $object->setJson($data['json']);
        }
        if (\array_key_exists('services', $data)) {
            $values = [];
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\QuoteSalesService::class, 'json', $context);
            }
            $object->setServices($values);
        }
        if (\array_key_exists('total_excl', $data)) {
            $object->setTotalExcl($data['total_excl']);
        }
        if (\array_key_exists('total_incl', $data)) {
            $object->setTotalIncl($data['total_incl']);
        }
        if (\array_key_exists('total_vat', $data)) {
            $object->setTotalVat($data['total_vat']);
        }
        if (\array_key_exists('vat', $data)) {
            $object->setVat($data['vat']);
        }
        if (\array_key_exists('grand_totals', $data)) {
            $object->setGrandTotals($data['grand_totals']);
        }
        if (\array_key_exists('receivers', $data)) {
            $object->setReceivers($data['receivers']);
        }
        if (\array_key_exists('valid_days', $data)) {
            $object->setValidDays($data['valid_days']);
        }
        if (\array_key_exists('payment_term', $data)) {
            $object->setPaymentTerm($data['payment_term']);
        }
        if (\array_key_exists('download_url', $data)) {
            $object->setDownloadUrl($data['download_url']);
        }
        if (\array_key_exists('is_sepa_authorization', $data)) {
            $object->setIsSepaAuthorization($data['is_sepa_authorization']);
        }
        if (\array_key_exists('is_outdated', $data)) {
            $object->setIsOutdated($data['is_outdated']);
        }
        if (\array_key_exists('is_blocked', $data)) {
            $object->setIsBlocked($data['is_blocked']);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($data['created_by']);
        }
        if (\array_key_exists('last_updated_approval_status', $data)) {
            $object->setLastUpdatedApprovalStatus($data['last_updated_approval_status']);
        }
        if (\array_key_exists('sent_at', $data)) {
            $object->setSentAt($data['sent_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('sales_id', $data)) {
            $object->setSalesId($data['sales_id']);
        }
        if (\array_key_exists('quote_subject', $data)) {
            $object->setQuoteSubject($data['quote_subject']);
        }
        if (\array_key_exists('customer_reference', $data)) {
            $object->setCustomerReference($data['customer_reference']);
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
        if ($object->isInitialized('quotetemplate') && null !== $object->getQuotetemplate()) {
            $data['quotetemplate'] = $this->normalizer->normalize($object->getQuotetemplate(), 'json', $context);
        }
        if ($object->isInitialized('sendType') && null !== $object->getSendType()) {
            $data['send_type'] = $object->getSendType();
        }
        if ($object->isInitialized('quoteNumber') && null !== $object->getQuoteNumber()) {
            $data['quote_number'] = $object->getQuoteNumber();
        }
        if ($object->isInitialized('quoteDate') && null !== $object->getQuoteDate()) {
            $data['quote_date'] = $object->getQuoteDate();
        }
        if ($object->isInitialized('quotestatus') && null !== $object->getQuotestatus()) {
            $data['quotestatus'] = $this->normalizer->normalize($object->getQuotestatus(), 'json', $context);
        }
        if ($object->isInitialized('json') && null !== $object->getJson()) {
            $data['json'] = $object->getJson();
        }
        if ($object->isInitialized('services') && null !== $object->getServices()) {
            $values = [];
            foreach ($object->getServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['services'] = $values;
        }
        if ($object->isInitialized('totalExcl') && null !== $object->getTotalExcl()) {
            $data['total_excl'] = $object->getTotalExcl();
        }
        if ($object->isInitialized('totalIncl') && null !== $object->getTotalIncl()) {
            $data['total_incl'] = $object->getTotalIncl();
        }
        if ($object->isInitialized('totalVat') && null !== $object->getTotalVat()) {
            $data['total_vat'] = $object->getTotalVat();
        }
        if ($object->isInitialized('vat') && null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        if ($object->isInitialized('grandTotals') && null !== $object->getGrandTotals()) {
            $data['grand_totals'] = $object->getGrandTotals();
        }
        if ($object->isInitialized('receivers') && null !== $object->getReceivers()) {
            $data['receivers'] = $object->getReceivers();
        }
        if ($object->isInitialized('validDays') && null !== $object->getValidDays()) {
            $data['valid_days'] = $object->getValidDays();
        }
        if ($object->isInitialized('paymentTerm') && null !== $object->getPaymentTerm()) {
            $data['payment_term'] = $object->getPaymentTerm();
        }
        if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
            $data['download_url'] = $object->getDownloadUrl();
        }
        if ($object->isInitialized('isSepaAuthorization') && null !== $object->getIsSepaAuthorization()) {
            $data['is_sepa_authorization'] = $object->getIsSepaAuthorization();
        }
        if ($object->isInitialized('isOutdated') && null !== $object->getIsOutdated()) {
            $data['is_outdated'] = $object->getIsOutdated();
        }
        if ($object->isInitialized('isBlocked') && null !== $object->getIsBlocked()) {
            $data['is_blocked'] = $object->getIsBlocked();
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['created_by'] = $object->getCreatedBy();
        }
        if ($object->isInitialized('lastUpdatedApprovalStatus') && null !== $object->getLastUpdatedApprovalStatus()) {
            $data['last_updated_approval_status'] = $object->getLastUpdatedApprovalStatus();
        }
        if ($object->isInitialized('sentAt') && null !== $object->getSentAt()) {
            $data['sent_at'] = $object->getSentAt();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('salesId') && null !== $object->getSalesId()) {
            $data['sales_id'] = $object->getSalesId();
        }
        if ($object->isInitialized('quoteSubject') && null !== $object->getQuoteSubject()) {
            $data['quote_subject'] = $object->getQuoteSubject();
        }
        if ($object->isInitialized('customerReference') && null !== $object->getCustomerReference()) {
            $data['customer_reference'] = $object->getCustomerReference();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetQuote::class => false];
    }
}
