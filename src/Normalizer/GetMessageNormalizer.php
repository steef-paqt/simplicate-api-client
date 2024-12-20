<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Attachment;
use Paqtcom\Simplicate\Model\ContentField;
use Paqtcom\Simplicate\Model\Creator;
use Paqtcom\Simplicate\Model\GetMessage;
use Paqtcom\Simplicate\Model\LinkedToEntity;
use Paqtcom\Simplicate\Model\MessageType;
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

class GetMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetMessage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetMessage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetMessage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('attachments', $data)) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Attachment::class, 'json', $context);
            }
            $object->setAttachments($values);
        }
        if (array_key_exists('message_type', $data)) {
            $object->setMessageType($this->denormalizer->denormalize($data['message_type'], MessageType::class, 'json', $context));
        }
        if (array_key_exists('linked_to', $data)) {
            $values_1 = [];
            foreach ($data['linked_to'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, LinkedToEntity::class, 'json', $context);
            }
            $object->setLinkedTo($values_1);
        }
        if (array_key_exists('created_by', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], Creator::class, 'json', $context));
        }
        if (array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (array_key_exists('content_fields', $data)) {
            $values_2 = [];
            foreach ($data['content_fields'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, ContentField::class, 'json', $context);
            }
            $object->setContentFields($values_2);
        }
        if (array_key_exists('content', $data)) {
            $object->setContent($data['content']);
        }
        if (array_key_exists('display_date', $data)) {
            $object->setDisplayDate($data['display_date']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }
        if ($object->isInitialized('messageType') && null !== $object->getMessageType()) {
            $data['message_type'] = $this->normalizer->normalize($object->getMessageType(), 'json', $context);
        }
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $values_1 = [];
            foreach ($object->getLinkedTo() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_to'] = $values_1;
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('contentFields') && null !== $object->getContentFields()) {
            $values_2 = [];
            foreach ($object->getContentFields() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['content_fields'] = $values_2;
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }
        if ($object->isInitialized('displayDate') && null !== $object->getDisplayDate()) {
            $data['display_date'] = $object->getDisplayDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetMessage::class => false];
    }
}
