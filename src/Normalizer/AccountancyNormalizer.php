<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Accountancy;
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

class AccountancyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Accountancy::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Accountancy::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Accountancy();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('is_tax_unit_vat', $data)) {
            $object->setIsTaxUnitVat($data['is_tax_unit_vat']);
        }
        if (array_key_exists('vat_number_fe', $data)) {
            $object->setVatNumberFe($data['vat_number_fe']);
        }
        if (array_key_exists('tax_unit_vat_role', $data)) {
            $object->setTaxUnitVatRole($data['tax_unit_vat_role']);
        }
        if (array_key_exists('is_tax_unit_vpb', $data)) {
            $object->setIsTaxUnitVpb($data['is_tax_unit_vpb']);
        }
        if (array_key_exists('tax_unit_vpb_role', $data)) {
            $object->setTaxUnitVpbRole($data['tax_unit_vpb_role']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('isTaxUnitVat') && null !== $object->getIsTaxUnitVat()) {
            $data['is_tax_unit_vat'] = $object->getIsTaxUnitVat();
        }
        if ($object->isInitialized('vatNumberFe') && null !== $object->getVatNumberFe()) {
            $data['vat_number_fe'] = $object->getVatNumberFe();
        }
        if ($object->isInitialized('taxUnitVatRole') && null !== $object->getTaxUnitVatRole()) {
            $data['tax_unit_vat_role'] = $object->getTaxUnitVatRole();
        }
        if ($object->isInitialized('isTaxUnitVpb') && null !== $object->getIsTaxUnitVpb()) {
            $data['is_tax_unit_vpb'] = $object->getIsTaxUnitVpb();
        }
        if ($object->isInitialized('taxUnitVpbRole') && null !== $object->getTaxUnitVpbRole()) {
            $data['tax_unit_vpb_role'] = $object->getTaxUnitVpbRole();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Accountancy::class => false];
    }
}
