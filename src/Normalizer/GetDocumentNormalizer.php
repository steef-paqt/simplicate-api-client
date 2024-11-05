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

class GetDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\GetDocument::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\GetDocument::class;
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
        $object = new \Steefdw\Simplicate\Model\GetDocument();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('download_url', $data)) {
            $object->setDownloadUrl($data['download_url']);
        }
        if (\array_key_exists('document_type', $data)) {
            $object->setDocumentType($this->denormalizer->denormalize($data['document_type'], \Steefdw\Simplicate\Model\DocumentTypeSimple::class, 'json', $context));
        }
        if (\array_key_exists('linked_to', $data)) {
            $values = [];
            foreach ($data['linked_to'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\LinkedToEntity::class, 'json', $context);
            }
            $object->setLinkedTo($values);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Steefdw\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
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
        if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
            $data['download_url'] = $object->getDownloadUrl();
        }
        if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
            $data['document_type'] = $this->normalizer->normalize($object->getDocumentType(), 'json', $context);
        }
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $values = [];
            foreach ($object->getLinkedTo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['linked_to'] = $values;
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
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\GetDocument::class => false];
    }
}
