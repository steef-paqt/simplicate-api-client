<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Attachment;
use Paqtcom\Simplicate\Model\AttachmentType;
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

class AttachmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Attachment::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Attachment::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Attachment();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('attachment_type', $data)) {
            $object->setAttachmentType($this->denormalizer->denormalize($data['attachment_type'], AttachmentType::class, 'json', $context));
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (array_key_exists('document_id', $data)) {
            $object->setDocumentId($data['document_id']);
        }
        if (array_key_exists('download_link', $data)) {
            $object->setDownloadLink($data['download_link']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('attachmentType') && null !== $object->getAttachmentType()) {
            $data['attachment_type'] = $this->normalizer->normalize($object->getAttachmentType(), 'json', $context);
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
            $data['document_id'] = $object->getDocumentId();
        }
        if ($object->isInitialized('downloadLink') && null !== $object->getDownloadLink()) {
            $data['download_link'] = $object->getDownloadLink();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Attachment::class => false];
    }
}
