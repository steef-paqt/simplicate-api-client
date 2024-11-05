<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Steefdw\Simplicate\Runtime\Normalizer\CheckArray;
use Steefdw\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PostMessage::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PostMessage::class;
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
        $object = new \Steefdw\Simplicate\Model\PostMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('messagetype_id', $data)) {
            $object->setMessagetypeId($data['messagetype_id']);
        }
        if (\array_key_exists('linked_to', $data)) {
            $object->setLinkedTo($this->denormalizer->denormalize($data['linked_to'], \Steefdw\Simplicate\Model\PostMessageLinkedTo::class, 'json', $context));
        }
        if (\array_key_exists('created_by_id', $data)) {
            $object->setCreatedById($data['created_by_id']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('content_fields', $data)) {
            $values = [];
            foreach ($data['content_fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\ContentField::class, 'json', $context);
            }
            $object->setContentFields($values);
        }
        if (\array_key_exists('content', $data)) {
            $object->setContent($data['content']);
        }
        if (\array_key_exists('display_date', $data)) {
            $object->setDisplayDate($data['display_date']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
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
        return [\Steefdw\Simplicate\Model\PostMessage::class => false];
    }
}
