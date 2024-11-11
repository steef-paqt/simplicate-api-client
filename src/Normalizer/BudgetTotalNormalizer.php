<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
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
use function is_int;

class BudgetTotalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === BudgetTotal::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === BudgetTotal::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BudgetTotal();
        if (array_key_exists('value_budget', $data) && is_int($data['value_budget'])) {
            $data['value_budget'] = (float) $data['value_budget'];
        }
        if (array_key_exists('value_spent', $data) && is_int($data['value_spent'])) {
            $data['value_spent'] = (float) $data['value_spent'];
        }
        if (array_key_exists('value_invoiced', $data) && is_int($data['value_invoiced'])) {
            $data['value_invoiced'] = (float) $data['value_invoiced'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('value_budget', $data)) {
            $object->setValueBudget((float) $data['value_budget']);
        }
        if (array_key_exists('value_spent', $data)) {
            $object->setValueSpent((float) $data['value_spent']);
        }
        if (array_key_exists('value_invoiced', $data)) {
            $object->setValueInvoiced((float) $data['value_invoiced']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('valueBudget') && null !== $object->getValueBudget()) {
            $data['value_budget'] = $object->getValueBudget();
        }
        if ($object->isInitialized('valueSpent') && null !== $object->getValueSpent()) {
            $data['value_spent'] = $object->getValueSpent();
        }
        if ($object->isInitialized('valueInvoiced') && null !== $object->getValueInvoiced()) {
            $data['value_invoiced'] = $object->getValueInvoiced();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [BudgetTotal::class => false];
    }
}
