<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Industry;
use Paqtcom\Simplicate\Model\Organization;
use Paqtcom\Simplicate\Model\OrganizationSize;
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

class OrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === Organization::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === Organization::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Organization();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('coc_code', $data)) {
            $object->setCocCode($data['coc_code']);
        }
        if (array_key_exists('vat_number', $data)) {
            $object->setVatNumber($data['vat_number']);
        }
        if (array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (array_key_exists('linkedin_url', $data)) {
            $object->setLinkedinUrl($data['linkedin_url']);
        }
        if (array_key_exists('has_different_postal_address', $data)) {
            $object->setHasDifferentPostalAddress($data['has_different_postal_address']);
        }
        if (array_key_exists('industry', $data)) {
            $object->setIndustry($this->denormalizer->denormalize($data['industry'], Industry::class, 'json', $context));
        }
        if (array_key_exists('organizationsize', $data)) {
            $object->setOrganizationsize($this->denormalizer->denormalize($data['organizationsize'], OrganizationSize::class, 'json', $context));
        }
        if (array_key_exists('invoice_receiver', $data)) {
            $object->setInvoiceReceiver($data['invoice_receiver']);
        }
        if (array_key_exists('allow_autocollect', $data)) {
            $object->setAllowAutocollect($data['allow_autocollect']);
        }
        if (array_key_exists('bank_account', $data)) {
            $object->setBankAccount($data['bank_account']);
        }
        if (array_key_exists('bank_bic', $data)) {
            $object->setBankBic($data['bank_bic']);
        }
        if (array_key_exists('relation_number', $data)) {
            $object->setRelationNumber($data['relation_number']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('cocCode') && null !== $object->getCocCode()) {
            $data['coc_code'] = $object->getCocCode();
        }
        if ($object->isInitialized('vatNumber') && null !== $object->getVatNumber()) {
            $data['vat_number'] = $object->getVatNumber();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('linkedinUrl') && null !== $object->getLinkedinUrl()) {
            $data['linkedin_url'] = $object->getLinkedinUrl();
        }
        if ($object->isInitialized('hasDifferentPostalAddress') && null !== $object->getHasDifferentPostalAddress()) {
            $data['has_different_postal_address'] = $object->getHasDifferentPostalAddress();
        }
        if ($object->isInitialized('industry') && null !== $object->getIndustry()) {
            $data['industry'] = $this->normalizer->normalize($object->getIndustry(), 'json', $context);
        }
        if ($object->isInitialized('organizationsize') && null !== $object->getOrganizationsize()) {
            $data['organizationsize'] = $this->normalizer->normalize($object->getOrganizationsize(), 'json', $context);
        }
        if ($object->isInitialized('invoiceReceiver') && null !== $object->getInvoiceReceiver()) {
            $data['invoice_receiver'] = $object->getInvoiceReceiver();
        }
        if ($object->isInitialized('allowAutocollect') && null !== $object->getAllowAutocollect()) {
            $data['allow_autocollect'] = $object->getAllowAutocollect();
        }
        if ($object->isInitialized('bankAccount') && null !== $object->getBankAccount()) {
            $data['bank_account'] = $object->getBankAccount();
        }
        if ($object->isInitialized('bankBic') && null !== $object->getBankBic()) {
            $data['bank_bic'] = $object->getBankBic();
        }
        if ($object->isInitialized('relationNumber') && null !== $object->getRelationNumber()) {
            $data['relation_number'] = $object->getRelationNumber();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Organization::class => false];
    }
}
