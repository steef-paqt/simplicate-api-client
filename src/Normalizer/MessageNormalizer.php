<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ContentField;
use Paqtcom\Simplicate\Model\Message;
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

class MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Message::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Message::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Message();
        if (null === $data || false === is_array($data)) {
            return $object;
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
        return [Message::class => false];
    }
}
