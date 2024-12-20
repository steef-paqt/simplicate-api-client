<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetDefaultAction;
use Paqtcom\Simplicate\Model\GetSimpleDefaultTask;
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

class GetDefaultActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetDefaultAction::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetDefaultAction::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetDefaultAction();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('task', $data)) {
            $object->setTask($this->denormalizer->denormalize($data['task'], GetSimpleDefaultTask::class, 'json', $context));
        }
        if (array_key_exists('to_task', $data)) {
            $object->setToTask($this->denormalizer->denormalize($data['to_task'], GetSimpleDefaultTask::class, 'json', $context));
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('is_response_required', $data)) {
            $object->setIsResponseRequired($data['is_response_required']);
        }
        if (array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('task') && null !== $object->getTask()) {
            $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
        }
        if ($object->isInitialized('toTask') && null !== $object->getToTask()) {
            $data['to_task'] = $this->normalizer->normalize($object->getToTask(), 'json', $context);
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('isResponseRequired') && null !== $object->getIsResponseRequired()) {
            $data['is_response_required'] = $object->getIsResponseRequired();
        }
        if ($object->isInitialized('color') && null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetDefaultAction::class => false];
    }
}
