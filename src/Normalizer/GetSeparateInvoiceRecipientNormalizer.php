<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetContactSimple;
use Paqtcom\Simplicate\Model\GetOrganizationSimple;
use Paqtcom\Simplicate\Model\GetPersonSimple;
use Paqtcom\Simplicate\Model\GetSeparateInvoiceRecipient;
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

class GetSeparateInvoiceRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetSeparateInvoiceRecipient::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetSeparateInvoiceRecipient::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetSeparateInvoiceRecipient();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], GetOrganizationSimple::class, 'json', $context));
        }
        if (array_key_exists('person', $data)) {
            $object->setPerson($this->denormalizer->denormalize($data['person'], GetPersonSimple::class, 'json', $context));
        }
        if (array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], GetContactSimple::class, 'json', $context));
        }
        if (array_key_exists('is_separate_invoice_recipient', $data)) {
            $object->setIsSeparateInvoiceRecipient($data['is_separate_invoice_recipient']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('isSeparateInvoiceRecipient') && null !== $object->getIsSeparateInvoiceRecipient()) {
            $data['is_separate_invoice_recipient'] = $object->getIsSeparateInvoiceRecipient();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetSeparateInvoiceRecipient::class => false];
    }
}
