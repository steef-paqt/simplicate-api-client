<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetEmployeeSimple;
use Paqtcom\Simplicate\Model\GetTeam;
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

class GetTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetTeam::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetTeam::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetTeam();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('employees', $data)) {
            $values = [];
            foreach ($data['employees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetEmployeeSimple::class, 'json', $context);
            }
            $object->setEmployees($values);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('employees') && null !== $object->getEmployees()) {
            $values = [];
            foreach ($object->getEmployees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['employees'] = $values;
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetTeam::class => false];
    }
}