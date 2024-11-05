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

class JournalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\Journal::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\Journal::class;
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
        $object = new \Paqtcom\Simplicate\Model\Journal();
        if (\array_key_exists('amount_excl', $data) && \is_int($data['amount_excl'])) {
            $data['amount_excl'] = (float) $data['amount_excl'];
        }
        if (\array_key_exists('amount_incl', $data) && \is_int($data['amount_incl'])) {
            $data['amount_incl'] = (float) $data['amount_incl'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('journalize_date', $data)) {
            $object->setJournalizeDate($data['journalize_date']);
        }
        if (\array_key_exists('invoice_date', $data)) {
            $object->setInvoiceDate($data['invoice_date']);
        }
        if (\array_key_exists('invoice_number', $data)) {
            $object->setInvoiceNumber($data['invoice_number']);
        }
        if (\array_key_exists('due_date', $data)) {
            $object->setDueDate($data['due_date']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (\array_key_exists('relation_id', $data)) {
            $object->setRelationId($data['relation_id']);
        }
        if (\array_key_exists('amount_excl', $data)) {
            $object->setAmountExcl($data['amount_excl']);
        }
        if (\array_key_exists('amount_incl', $data)) {
            $object->setAmountIncl($data['amount_incl']);
        }
        if (\array_key_exists('autocollect', $data)) {
            $object->setAutocollect($data['autocollect']);
        }
        if (\array_key_exists('revenuegroup', $data)) {
            $object->setRevenuegroup($this->denormalizer->denormalize($data['revenuegroup'], \Paqtcom\Simplicate\Model\RevenueGroup::class, 'json', $context));
        }
        if (\array_key_exists('journal_lines', $data)) {
            $values = [];
            foreach ($data['journal_lines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\JournalLine::class, 'json', $context);
            }
            $object->setJournalLines($values);
        }
        if (\array_key_exists('vat', $data)) {
            $values_1 = [];
            foreach ($data['vat'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Paqtcom\Simplicate\Model\JournalVat::class, 'json', $context);
            }
            $object->setVat($values_1);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('journalizeDate') && null !== $object->getJournalizeDate()) {
            $data['journalize_date'] = $object->getJournalizeDate();
        }
        if ($object->isInitialized('invoiceDate') && null !== $object->getInvoiceDate()) {
            $data['invoice_date'] = $object->getInvoiceDate();
        }
        if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
            $data['invoice_number'] = $object->getInvoiceNumber();
        }
        if ($object->isInitialized('dueDate') && null !== $object->getDueDate()) {
            $data['due_date'] = $object->getDueDate();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('relationId') && null !== $object->getRelationId()) {
            $data['relation_id'] = $object->getRelationId();
        }
        if ($object->isInitialized('amountExcl') && null !== $object->getAmountExcl()) {
            $data['amount_excl'] = $object->getAmountExcl();
        }
        if ($object->isInitialized('amountIncl') && null !== $object->getAmountIncl()) {
            $data['amount_incl'] = $object->getAmountIncl();
        }
        if ($object->isInitialized('autocollect') && null !== $object->getAutocollect()) {
            $data['autocollect'] = $object->getAutocollect();
        }
        if ($object->isInitialized('revenuegroup') && null !== $object->getRevenuegroup()) {
            $data['revenuegroup'] = $this->normalizer->normalize($object->getRevenuegroup(), 'json', $context);
        }
        if ($object->isInitialized('journalLines') && null !== $object->getJournalLines()) {
            $values = [];
            foreach ($object->getJournalLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['journal_lines'] = $values;
        }
        if ($object->isInitialized('vat') && null !== $object->getVat()) {
            $values_1 = [];
            foreach ($object->getVat() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['vat'] = $values_1;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\Journal::class => false];
    }
}
