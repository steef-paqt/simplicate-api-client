<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostDocument;
use Paqtcom\Simplicate\Model\PostDocumentLinkedTo;
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

class PostDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostDocument::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostDocument::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostDocument();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('linked_to', $data)) {
            $values = [];
            foreach ($data['linked_to'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PostDocumentLinkedTo::class, 'json', $context);
            }
            $object->setLinkedTo($values);
        }
        if (array_key_exists('document_type_id', $data)) {
            $object->setDocumentTypeId($data['document_type_id']);
        }
        if (array_key_exists('upload_queue_id', $data)) {
            $object->setUploadQueueId($data['upload_queue_id']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $values = [];
            foreach ($object->getLinkedTo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['linked_to'] = $values;
        }
        if ($object->isInitialized('documentTypeId') && null !== $object->getDocumentTypeId()) {
            $data['document_type_id'] = $object->getDocumentTypeId();
        }
        if ($object->isInitialized('uploadQueueId') && null !== $object->getUploadQueueId()) {
            $data['upload_queue_id'] = $object->getUploadQueueId();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostDocument::class => false];
    }
}
