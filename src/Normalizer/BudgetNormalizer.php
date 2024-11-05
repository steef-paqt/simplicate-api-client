<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\Budget::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\Budget::class;
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
        $object = new \Paqtcom\Simplicate\Model\Budget();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($this->denormalizer->denormalize($data['hours'], \Paqtcom\Simplicate\Model\BudgetHours::class, 'json', $context));
        }
        if (\array_key_exists('costs', $data)) {
            $object->setCosts($this->denormalizer->denormalize($data['costs'], \Paqtcom\Simplicate\Model\BudgetCosts::class, 'json', $context));
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($this->denormalizer->denormalize($data['total'], \Paqtcom\Simplicate\Model\BudgetTotal::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('hours') && null !== $object->getHours()) {
            $data['hours'] = $this->normalizer->normalize($object->getHours(), 'json', $context);
        }
        if ($object->isInitialized('costs') && null !== $object->getCosts()) {
            $data['costs'] = $this->normalizer->normalize($object->getCosts(), 'json', $context);
        }
        if ($object->isInitialized('total') && null !== $object->getTotal()) {
            $data['total'] = $this->normalizer->normalize($object->getTotal(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\Budget::class => false];
    }
}
