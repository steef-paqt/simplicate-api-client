<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\PostInvoice;
use Paqtcom\Simplicate\Model\PostInvoiceLine;
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

class PostInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === PostInvoice::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === PostInvoice::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostInvoice();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('payment_term_id', $data)) {
            $object->setPaymentTermId($data['payment_term_id']);
        }
        if (array_key_exists('invoice_lines', $data)) {
            $values = [];
            foreach ($data['invoice_lines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PostInvoiceLine::class, 'json', $context);
            }
            $object->setInvoiceLines($values);
        }
        if (array_key_exists('status_id', $data)) {
            $object->setStatusId($data['status_id']);
        }
        if (array_key_exists('my_organization_profile_id', $data)) {
            $object->setMyOrganizationProfileId($data['my_organization_profile_id']);
        }
        if (array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }
        if (array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('paymentTermId') && null !== $object->getPaymentTermId()) {
            $data['payment_term_id'] = $object->getPaymentTermId();
        }
        if ($object->isInitialized('invoiceLines') && null !== $object->getInvoiceLines()) {
            $values = [];
            foreach ($object->getInvoiceLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['invoice_lines'] = $values;
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['status_id'] = $object->getStatusId();
        }
        if ($object->isInitialized('myOrganizationProfileId') && null !== $object->getMyOrganizationProfileId()) {
            $data['my_organization_profile_id'] = $object->getMyOrganizationProfileId();
        }
        if ($object->isInitialized('organizationId') && null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PostInvoice::class => false];
    }
}
