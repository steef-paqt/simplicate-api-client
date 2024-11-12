<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\JournalVat;
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

class JournalVatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === JournalVat::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === JournalVat::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new JournalVat();
        if (array_key_exists('amount_vat', $data) && is_int($data['amount_vat'])) {
            $data['amount_vat'] = (float) $data['amount_vat'];
        }
        if (array_key_exists('amount_excl', $data) && is_int($data['amount_excl'])) {
            $data['amount_excl'] = (float) $data['amount_excl'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('vat_id', $data)) {
            $object->setVatId($data['vat_id']);
        }
        if (array_key_exists('amount_vat', $data)) {
            $object->setAmountVat($data['amount_vat']);
        }
        if (array_key_exists('amount_excl', $data)) {
            $object->setAmountExcl($data['amount_excl']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('vatId') && null !== $object->getVatId()) {
            $data['vat_id'] = $object->getVatId();
        }
        if ($object->isInitialized('amountVat') && null !== $object->getAmountVat()) {
            $data['amount_vat'] = $object->getAmountVat();
        }
        if ($object->isInitialized('amountExcl') && null !== $object->getAmountExcl()) {
            $data['amount_excl'] = $object->getAmountExcl();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [JournalVat::class => false];
    }
}
