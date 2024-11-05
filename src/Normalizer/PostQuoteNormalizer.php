<?php

declare(strict_types=1);

namespace Steefdw\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Steefdw\Simplicate\Runtime\Normalizer\CheckArray;
use Steefdw\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostQuoteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\PostQuote::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\PostQuote::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Steefdw\Simplicate\Model\PostQuote();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('quotetemplate_id', $data)) {
            $object->setQuotetemplateId($data['quotetemplate_id']);
        }
        if (\array_key_exists('sales_id', $data)) {
            $object->setSalesId($data['sales_id']);
        }
        if (\array_key_exists('quote_subject', $data)) {
            $object->setQuoteSubject($data['quote_subject']);
        }
        if (\array_key_exists('json', $data)) {
            $object->setJson($data['json']);
        }
        if (\array_key_exists('customer_reference', $data)) {
            $object->setCustomerReference($data['customer_reference']);
        }
        if (\array_key_exists('is_blocked', $data)) {
            $object->setIsBlocked($data['is_blocked']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('quotetemplateId') && null !== $object->getQuotetemplateId()) {
            $data['quotetemplate_id'] = $object->getQuotetemplateId();
        }
        if ($object->isInitialized('salesId') && null !== $object->getSalesId()) {
            $data['sales_id'] = $object->getSalesId();
        }
        if ($object->isInitialized('quoteSubject') && null !== $object->getQuoteSubject()) {
            $data['quote_subject'] = $object->getQuoteSubject();
        }
        if ($object->isInitialized('json') && null !== $object->getJson()) {
            $data['json'] = $object->getJson();
        }
        if ($object->isInitialized('customerReference') && null !== $object->getCustomerReference()) {
            $data['customer_reference'] = $object->getCustomerReference();
        }
        if ($object->isInitialized('isBlocked') && null !== $object->getIsBlocked()) {
            $data['is_blocked'] = $object->getIsBlocked();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\PostQuote::class => false];
    }
}
