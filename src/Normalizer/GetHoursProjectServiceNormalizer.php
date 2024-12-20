<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetHoursProjectService;
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

class GetHoursProjectServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetHoursProjectService::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetHoursProjectService::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetHoursProjectService();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (array_key_exists('until_date', $data)) {
            $object->setUntilDate($data['until_date']);
        }
        if (array_key_exists('purchase_start_date', $data)) {
            $object->setPurchaseStartDate($data['purchase_start_date']);
        }
        if (array_key_exists('purchase_end_date', $data)) {
            $object->setPurchaseEndDate($data['purchase_end_date']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('untilDate') && null !== $object->getUntilDate()) {
            $data['until_date'] = $object->getUntilDate();
        }
        if ($object->isInitialized('purchaseStartDate') && null !== $object->getPurchaseStartDate()) {
            $data['purchase_start_date'] = $object->getPurchaseStartDate();
        }
        if ($object->isInitialized('purchaseEndDate') && null !== $object->getPurchaseEndDate()) {
            $data['purchase_end_date'] = $object->getPurchaseEndDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetHoursProjectService::class => false];
    }
}
