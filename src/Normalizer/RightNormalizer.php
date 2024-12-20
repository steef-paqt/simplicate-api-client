<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Right;
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

class RightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Right::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Right::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Right();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('module_key', $data)) {
            $object->setModuleKey($data['module_key']);
        }
        if (array_key_exists('module_label', $data)) {
            $object->setModuleLabel($data['module_label']);
        }
        if (array_key_exists('right_key', $data)) {
            $object->setRightKey($data['right_key']);
        }
        if (array_key_exists('right_label', $data)) {
            $object->setRightLabel($data['right_label']);
        }
        if (array_key_exists('rightsgroup_label', $data)) {
            $object->setRightsgroupLabel($data['rightsgroup_label']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('moduleKey') && null !== $object->getModuleKey()) {
            $data['module_key'] = $object->getModuleKey();
        }
        if ($object->isInitialized('moduleLabel') && null !== $object->getModuleLabel()) {
            $data['module_label'] = $object->getModuleLabel();
        }
        if ($object->isInitialized('rightKey') && null !== $object->getRightKey()) {
            $data['right_key'] = $object->getRightKey();
        }
        if ($object->isInitialized('rightLabel') && null !== $object->getRightLabel()) {
            $data['right_label'] = $object->getRightLabel();
        }
        if ($object->isInitialized('rightsgroupLabel') && null !== $object->getRightsgroupLabel()) {
            $data['rightsgroup_label'] = $object->getRightsgroupLabel();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Right::class => false];
    }
}
