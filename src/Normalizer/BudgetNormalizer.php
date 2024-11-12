<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Budget;
use Paqtcom\Simplicate\Model\BudgetCosts;
use Paqtcom\Simplicate\Model\BudgetHours;
use Paqtcom\Simplicate\Model\BudgetTotal;
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

class BudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Budget::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Budget::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Budget();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('hours', $data)) {
            $object->setHours($this->denormalizer->denormalize($data['hours'], BudgetHours::class, 'json', $context));
        }
        if (array_key_exists('costs', $data)) {
            $object->setCosts($this->denormalizer->denormalize($data['costs'], BudgetCosts::class, 'json', $context));
        }
        if (array_key_exists('total', $data)) {
            $object->setTotal($this->denormalizer->denormalize($data['total'], BudgetTotal::class, 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
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
        return [Budget::class => false];
    }
}
