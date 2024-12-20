<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\InvoiceTemplate;
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

class InvoiceTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === InvoiceTemplate::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === InvoiceTemplate::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new InvoiceTemplate();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('hide_amount', $data)) {
            $object->setHideAmount($data['hide_amount']);
        }
        if (array_key_exists('hide_price', $data)) {
            $object->setHidePrice($data['hide_price']);
        }
        if (array_key_exists('footer_normal', $data)) {
            $object->setFooterNormal($data['footer_normal']);
        }
        if (array_key_exists('footer_directdebit', $data)) {
            $object->setFooterDirectdebit($data['footer_directdebit']);
        }
        if (array_key_exists('default_note', $data)) {
            $object->setDefaultNote($data['default_note']);
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
        if ($object->isInitialized('hideAmount') && null !== $object->getHideAmount()) {
            $data['hide_amount'] = $object->getHideAmount();
        }
        if ($object->isInitialized('hidePrice') && null !== $object->getHidePrice()) {
            $data['hide_price'] = $object->getHidePrice();
        }
        if ($object->isInitialized('footerNormal') && null !== $object->getFooterNormal()) {
            $data['footer_normal'] = $object->getFooterNormal();
        }
        if ($object->isInitialized('footerDirectdebit') && null !== $object->getFooterDirectdebit()) {
            $data['footer_directdebit'] = $object->getFooterDirectdebit();
        }
        if ($object->isInitialized('defaultNote') && null !== $object->getDefaultNote()) {
            $data['default_note'] = $object->getDefaultNote();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [InvoiceTemplate::class => false];
    }
}
