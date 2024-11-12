<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\EmailAttachment;
use Paqtcom\Simplicate\Model\EmailMessage;
use Paqtcom\Simplicate\Model\LinkedToEntity;
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

class EmailMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === EmailMessage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === EmailMessage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EmailMessage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('sent_at', $data)) {
            $object->setSentAt($data['sent_at']);
        }
        if (array_key_exists('received_at', $data)) {
            $object->setReceivedAt($data['received_at']);
        }
        if (array_key_exists('sender', $data)) {
            $object->setSender($data['sender']);
        }
        if (array_key_exists('recipients', $data)) {
            $object->setRecipients($data['recipients']);
        }
        if (array_key_exists('cc_recipients', $data)) {
            $object->setCcRecipients($data['cc_recipients']);
        }
        if (array_key_exists('bcc_recipients', $data)) {
            $object->setBccRecipients($data['bcc_recipients']);
        }
        if (array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (array_key_exists('html_message', $data)) {
            $object->setHtmlMessage($data['html_message']);
        }
        if (array_key_exists('html_body', $data)) {
            $object->setHtmlBody($data['html_body']);
        }
        if (array_key_exists('plain_text', $data)) {
            $object->setPlainText($data['plain_text']);
        }
        if (array_key_exists('attachments', $data)) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EmailAttachment::class, 'json', $context);
            }
            $object->setAttachments($values);
        }
        if (array_key_exists('linked_to', $data)) {
            $values_1 = [];
            foreach ($data['linked_to'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, LinkedToEntity::class, 'json', $context);
            }
            $object->setLinkedTo($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('sentAt') && null !== $object->getSentAt()) {
            $data['sent_at'] = $object->getSentAt();
        }
        if ($object->isInitialized('receivedAt') && null !== $object->getReceivedAt()) {
            $data['received_at'] = $object->getReceivedAt();
        }
        if ($object->isInitialized('sender') && null !== $object->getSender()) {
            $data['sender'] = $object->getSender();
        }
        if ($object->isInitialized('recipients') && null !== $object->getRecipients()) {
            $data['recipients'] = $object->getRecipients();
        }
        if ($object->isInitialized('ccRecipients') && null !== $object->getCcRecipients()) {
            $data['cc_recipients'] = $object->getCcRecipients();
        }
        if ($object->isInitialized('bccRecipients') && null !== $object->getBccRecipients()) {
            $data['bcc_recipients'] = $object->getBccRecipients();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('htmlMessage') && null !== $object->getHtmlMessage()) {
            $data['html_message'] = $object->getHtmlMessage();
        }
        if ($object->isInitialized('htmlBody') && null !== $object->getHtmlBody()) {
            $data['html_body'] = $object->getHtmlBody();
        }
        if ($object->isInitialized('plainText') && null !== $object->getPlainText()) {
            $data['plain_text'] = $object->getPlainText();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $values_1 = [];
            foreach ($object->getLinkedTo() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_to'] = $values_1;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EmailMessage::class => false];
    }
}
