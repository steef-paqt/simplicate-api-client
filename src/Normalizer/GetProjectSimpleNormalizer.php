<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetEmployeeSimple;
use Paqtcom\Simplicate\Model\GetOrganizationSimple;
use Paqtcom\Simplicate\Model\GetPersonSimple;
use Paqtcom\Simplicate\Model\GetProjectSimple;
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

class GetProjectSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetProjectSimple::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetProjectSimple::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetProjectSimple();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('project_number', $data)) {
            $object->setProjectNumber($data['project_number']);
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], GetOrganizationSimple::class, 'json', $context));
        }
        if (array_key_exists('person', $data)) {
            $object->setPerson($this->denormalizer->denormalize($data['person'], GetPersonSimple::class, 'json', $context));
        }
        if (array_key_exists('project_manager', $data)) {
            $object->setProjectManager($this->denormalizer->denormalize($data['project_manager'], GetEmployeeSimple::class, 'json', $context));
        }
        if (array_key_exists('separate_invoice_recipient', $data)) {
            $object->setSeparateInvoiceRecipient($data['separate_invoice_recipient']);
        }
        if (array_key_exists('has_register_mileage_enabled', $data)) {
            $object->setHasRegisterMileageEnabled($data['has_register_mileage_enabled']);
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
        if ($object->isInitialized('projectNumber') && null !== $object->getProjectNumber()) {
            $data['project_number'] = $object->getProjectNumber();
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if ($object->isInitialized('projectManager') && null !== $object->getProjectManager()) {
            $data['project_manager'] = $this->normalizer->normalize($object->getProjectManager(), 'json', $context);
        }
        if ($object->isInitialized('separateInvoiceRecipient') && null !== $object->getSeparateInvoiceRecipient()) {
            $data['separate_invoice_recipient'] = $object->getSeparateInvoiceRecipient();
        }
        if ($object->isInitialized('hasRegisterMileageEnabled') && null !== $object->getHasRegisterMileageEnabled()) {
            $data['has_register_mileage_enabled'] = $object->getHasRegisterMileageEnabled();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetProjectSimple::class => false];
    }
}
