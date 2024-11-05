<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostDebtor;
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

class PostDebtorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostDebtor::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostDebtor::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostDebtor();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('payment_term_id', $data)) {
            $object->setPaymentTermId($data['payment_term_id']);
        }
        if (array_key_exists('provision_method', $data)) {
            $object->setProvisionMethod($data['provision_method']);
        }
        if (array_key_exists('send_invoice_email_to_contact', $data)) {
            $object->setSendInvoiceEmailToContact($data['send_invoice_email_to_contact']);
        }
        if (array_key_exists('provision_contactperson_id', $data)) {
            $object->setProvisionContactpersonId($data['provision_contactperson_id']);
        }
        if (array_key_exists('send_invoice_email_to_project_contact', $data)) {
            $object->setSendInvoiceEmailToProjectContact($data['send_invoice_email_to_project_contact']);
        }
        if (array_key_exists('send_invoice_email_to_fixed_email', $data)) {
            $object->setSendInvoiceEmailToFixedEmail($data['send_invoice_email_to_fixed_email']);
        }
        if (array_key_exists('send_email_email', $data)) {
            $object->setSendEmailEmail($data['send_email_email']);
        }
        if (array_key_exists('send_invoice_email_to_cc', $data)) {
            $object->setSendInvoiceEmailToCc($data['send_invoice_email_to_cc']);
        }
        if (array_key_exists('cc', $data)) {
            $values = [];
            foreach ($data['cc'] as $value) {
                $values[] = $value;
            }
            $object->setCc($values);
        }
        if (array_key_exists('attention_to', $data)) {
            $object->setAttentionTo($data['attention_to']);
        }
        if (array_key_exists('attention_to_person_id', $data)) {
            $object->setAttentionToPersonId($data['attention_to_person_id']);
        }
        if (array_key_exists('attention_to_fixed', $data)) {
            $object->setAttentionToFixed($data['attention_to_fixed']);
        }
        if (array_key_exists('autocollect', $data)) {
            $object->setAutocollect($data['autocollect']);
        }
        if (array_key_exists('reminders', $data)) {
            $object->setReminders($data['reminders']);
        }
        if (array_key_exists('send_email_type', $data)) {
            $object->setSendEmailType($data['send_email_type']);
        }
        if (array_key_exists('autosend_subscription_invoice', $data)) {
            $object->setAutosendSubscriptionInvoice($data['autosend_subscription_invoice']);
        }
        if (array_key_exists('invoicetemplate_id', $data)) {
            $object->setInvoicetemplateId($data['invoicetemplate_id']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('paymentTermId') && null !== $object->getPaymentTermId()) {
            $data['payment_term_id'] = $object->getPaymentTermId();
        }
        if ($object->isInitialized('provisionMethod') && null !== $object->getProvisionMethod()) {
            $data['provision_method'] = $object->getProvisionMethod();
        }
        if ($object->isInitialized('sendInvoiceEmailToContact') && null !== $object->getSendInvoiceEmailToContact()) {
            $data['send_invoice_email_to_contact'] = $object->getSendInvoiceEmailToContact();
        }
        if ($object->isInitialized('provisionContactpersonId') && null !== $object->getProvisionContactpersonId()) {
            $data['provision_contactperson_id'] = $object->getProvisionContactpersonId();
        }
        if ($object->isInitialized('sendInvoiceEmailToProjectContact') && null !== $object->getSendInvoiceEmailToProjectContact()) {
            $data['send_invoice_email_to_project_contact'] = $object->getSendInvoiceEmailToProjectContact();
        }
        if ($object->isInitialized('sendInvoiceEmailToFixedEmail') && null !== $object->getSendInvoiceEmailToFixedEmail()) {
            $data['send_invoice_email_to_fixed_email'] = $object->getSendInvoiceEmailToFixedEmail();
        }
        if ($object->isInitialized('sendEmailEmail') && null !== $object->getSendEmailEmail()) {
            $data['send_email_email'] = $object->getSendEmailEmail();
        }
        if ($object->isInitialized('sendInvoiceEmailToCc') && null !== $object->getSendInvoiceEmailToCc()) {
            $data['send_invoice_email_to_cc'] = $object->getSendInvoiceEmailToCc();
        }
        if ($object->isInitialized('cc') && null !== $object->getCc()) {
            $values = [];
            foreach ($object->getCc() as $value) {
                $values[] = $value;
            }
            $data['cc'] = $values;
        }
        if ($object->isInitialized('attentionTo') && null !== $object->getAttentionTo()) {
            $data['attention_to'] = $object->getAttentionTo();
        }
        if ($object->isInitialized('attentionToPersonId') && null !== $object->getAttentionToPersonId()) {
            $data['attention_to_person_id'] = $object->getAttentionToPersonId();
        }
        if ($object->isInitialized('attentionToFixed') && null !== $object->getAttentionToFixed()) {
            $data['attention_to_fixed'] = $object->getAttentionToFixed();
        }
        if ($object->isInitialized('autocollect') && null !== $object->getAutocollect()) {
            $data['autocollect'] = $object->getAutocollect();
        }
        if ($object->isInitialized('reminders') && null !== $object->getReminders()) {
            $data['reminders'] = $object->getReminders();
        }
        if ($object->isInitialized('sendEmailType') && null !== $object->getSendEmailType()) {
            $data['send_email_type'] = $object->getSendEmailType();
        }
        if ($object->isInitialized('autosendSubscriptionInvoice') && null !== $object->getAutosendSubscriptionInvoice()) {
            $data['autosend_subscription_invoice'] = $object->getAutosendSubscriptionInvoice();
        }
        if ($object->isInitialized('invoicetemplateId') && null !== $object->getInvoicetemplateId()) {
            $data['invoicetemplate_id'] = $object->getInvoicetemplateId();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostDebtor::class => false];
    }
}
