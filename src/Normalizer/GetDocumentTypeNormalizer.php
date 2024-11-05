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

class GetDocumentTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetDocumentType::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetDocumentType::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\GetDocumentType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('can_have_attachment', $data)) {
            $object->setCanHaveAttachment($data['can_have_attachment']);
        }
        if (\array_key_exists('is_for_crm', $data)) {
            $object->setIsForCrm($data['is_for_crm']);
        }
        if (\array_key_exists('is_for_contact', $data)) {
            $object->setIsForContact($data['is_for_contact']);
        }
        if (\array_key_exists('is_for_sale', $data)) {
            $object->setIsForSale($data['is_for_sale']);
        }
        if (\array_key_exists('is_for_debtor', $data)) {
            $object->setIsForDebtor($data['is_for_debtor']);
        }
        if (\array_key_exists('is_for_project', $data)) {
            $object->setIsForProject($data['is_for_project']);
        }
        if (\array_key_exists('is_for_subscription', $data)) {
            $object->setIsForSubscription($data['is_for_subscription']);
        }
        if (\array_key_exists('is_for_employee', $data)) {
            $object->setIsForEmployee($data['is_for_employee']);
        }
        if (\array_key_exists('is_for_invoice', $data)) {
            $object->setIsForInvoice($data['is_for_invoice']);
        }
        if (\array_key_exists('is_for_myorganizationprofile', $data)) {
            $object->setIsForMyorganizationprofile($data['is_for_myorganizationprofile']);
        }
        if (\array_key_exists('is_blocked', $data)) {
            $object->setIsBlocked($data['is_blocked']);
        }
        if (\array_key_exists('is_visible_on_all', $data)) {
            $object->setIsVisibleOnAll($data['is_visible_on_all']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('canHaveAttachment') && null !== $object->getCanHaveAttachment()) {
            $data['can_have_attachment'] = $object->getCanHaveAttachment();
        }
        if ($object->isInitialized('isForCrm') && null !== $object->getIsForCrm()) {
            $data['is_for_crm'] = $object->getIsForCrm();
        }
        if ($object->isInitialized('isForContact') && null !== $object->getIsForContact()) {
            $data['is_for_contact'] = $object->getIsForContact();
        }
        if ($object->isInitialized('isForSale') && null !== $object->getIsForSale()) {
            $data['is_for_sale'] = $object->getIsForSale();
        }
        if ($object->isInitialized('isForDebtor') && null !== $object->getIsForDebtor()) {
            $data['is_for_debtor'] = $object->getIsForDebtor();
        }
        if ($object->isInitialized('isForProject') && null !== $object->getIsForProject()) {
            $data['is_for_project'] = $object->getIsForProject();
        }
        if ($object->isInitialized('isForSubscription') && null !== $object->getIsForSubscription()) {
            $data['is_for_subscription'] = $object->getIsForSubscription();
        }
        if ($object->isInitialized('isForEmployee') && null !== $object->getIsForEmployee()) {
            $data['is_for_employee'] = $object->getIsForEmployee();
        }
        if ($object->isInitialized('isForInvoice') && null !== $object->getIsForInvoice()) {
            $data['is_for_invoice'] = $object->getIsForInvoice();
        }
        if ($object->isInitialized('isForMyorganizationprofile') && null !== $object->getIsForMyorganizationprofile()) {
            $data['is_for_myorganizationprofile'] = $object->getIsForMyorganizationprofile();
        }
        if ($object->isInitialized('isBlocked') && null !== $object->getIsBlocked()) {
            $data['is_blocked'] = $object->getIsBlocked();
        }
        if ($object->isInitialized('isVisibleOnAll') && null !== $object->getIsVisibleOnAll()) {
            $data['is_visible_on_all'] = $object->getIsVisibleOnAll();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetDocumentType::class => false];
    }
}
