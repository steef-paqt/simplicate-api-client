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

class PutQuoteEmailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PutQuoteEmail::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PutQuoteEmail::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\PutQuoteEmail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $value;
            }
            $object->setAttachments($values);
        }
        if (\array_key_exists('to', $data)) {
            $values_1 = [];
            foreach ($data['to'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTo($values_1);
        }
        if (\array_key_exists('cc', $data)) {
            $values_2 = [];
            foreach ($data['cc'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCc($values_2);
        }
        if (\array_key_exists('bcc', $data)) {
            $values_3 = [];
            foreach ($data['bcc'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setBcc($values_3);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('body') && null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $value;
            }
            $data['attachments'] = $values;
        }
        if ($object->isInitialized('to') && null !== $object->getTo()) {
            $values_1 = [];
            foreach ($object->getTo() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['to'] = $values_1;
        }
        if ($object->isInitialized('cc') && null !== $object->getCc()) {
            $values_2 = [];
            foreach ($object->getCc() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['cc'] = $values_2;
        }
        if ($object->isInitialized('bcc') && null !== $object->getBcc()) {
            $values_3 = [];
            foreach ($object->getBcc() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['bcc'] = $values_3;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\PutQuoteEmail::class => false];
    }
}
