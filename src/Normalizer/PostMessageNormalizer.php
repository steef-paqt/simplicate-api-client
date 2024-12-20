<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ContentField;
use Paqtcom\Simplicate\Model\PostMessage;
use Paqtcom\Simplicate\Model\PostMessageLinkedTo;
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

class PostMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostMessage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostMessage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostMessage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('messagetype_id', $data)) {
            $object->setMessagetypeId($data['messagetype_id']);
        }
        if (array_key_exists('linked_to', $data)) {
            $object->setLinkedTo($this->denormalizer->denormalize($data['linked_to'], PostMessageLinkedTo::class, 'json', $context));
        }
        if (array_key_exists('created_by_id', $data)) {
            $object->setCreatedById($data['created_by_id']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (array_key_exists('content_fields', $data)) {
            $values = [];
            foreach ($data['content_fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ContentField::class, 'json', $context);
            }
            $object->setContentFields($values);
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
        if ($object->isInitialized('messagetypeId') && null !== $object->getMessagetypeId()) {
            $data['messagetype_id'] = $object->getMessagetypeId();
        }
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $data['linked_to'] = $this->normalizer->normalize($object->getLinkedTo(), 'json', $context);
        }
        if ($object->isInitialized('createdById') && null !== $object->getCreatedById()) {
            $data['created_by_id'] = $object->getCreatedById();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('contentFields') && null !== $object->getContentFields()) {
            $values = [];
            foreach ($object->getContentFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['content_fields'] = $values;
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
        return [PostMessage::class => false];
    }
}
