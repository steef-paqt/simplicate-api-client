<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostContactPersonFk;
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

class PostContactPersonFkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostContactPersonFk::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostContactPersonFk::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostContactPersonFk();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (array_key_exists('work_function', $data)) {
            $object->setWorkFunction($data['work_function']);
        }
        if (array_key_exists('work_email', $data)) {
            $object->setWorkEmail($data['work_email']);
        }
        if (array_key_exists('work_mobile', $data)) {
            $object->setWorkMobile($data['work_mobile']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('workFunction') && null !== $object->getWorkFunction()) {
            $data['work_function'] = $object->getWorkFunction();
        }
        if ($object->isInitialized('workEmail') && null !== $object->getWorkEmail()) {
            $data['work_email'] = $object->getWorkEmail();
        }
        if ($object->isInitialized('workMobile') && null !== $object->getWorkMobile()) {
            $data['work_mobile'] = $object->getWorkMobile();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostContactPersonFk::class => false];
    }
}
