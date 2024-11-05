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

class GetPropositionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetProposition::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetProposition::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\GetProposition();
        if (\array_key_exists('total_hours', $data) && \is_int($data['total_hours'])) {
            $data['total_hours'] = (float) $data['total_hours'];
        }
        if (\array_key_exists('total_mileage', $data) && \is_int($data['total_mileage'])) {
            $data['total_mileage'] = (float) $data['total_mileage'];
        }
        if (\array_key_exists('total_fixed', $data) && \is_int($data['total_fixed'])) {
            $data['total_fixed'] = (float) $data['total_fixed'];
        }
        if (\array_key_exists('total_terms', $data) && \is_int($data['total_terms'])) {
            $data['total_terms'] = (float) $data['total_terms'];
        }
        if (\array_key_exists('total_purchase', $data) && \is_int($data['total_purchase'])) {
            $data['total_purchase'] = (float) $data['total_purchase'];
        }
        if (\array_key_exists('total_advance_deposit', $data) && \is_int($data['total_advance_deposit'])) {
            $data['total_advance_deposit'] = (float) $data['total_advance_deposit'];
        }
        if (\array_key_exists('total_future', $data) && \is_int($data['total_future'])) {
            $data['total_future'] = (float) $data['total_future'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('total_hours', $data)) {
            $object->setTotalHours($data['total_hours']);
        }
        if (\array_key_exists('total_mileage', $data)) {
            $object->setTotalMileage($data['total_mileage']);
        }
        if (\array_key_exists('total_fixed', $data)) {
            $object->setTotalFixed($data['total_fixed']);
        }
        if (\array_key_exists('total_terms', $data)) {
            $object->setTotalTerms($data['total_terms']);
        }
        if (\array_key_exists('total_purchase', $data)) {
            $object->setTotalPurchase($data['total_purchase']);
        }
        if (\array_key_exists('total_advance_deposit', $data)) {
            $object->setTotalAdvanceDeposit($data['total_advance_deposit']);
        }
        if (\array_key_exists('total_future', $data)) {
            $object->setTotalFuture($data['total_future']);
        }
        if (\array_key_exists('simplicate_url', $data)) {
            $object->setSimplicateUrl($data['simplicate_url']);
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \Paqtcom\Simplicate\Model\GetProjectSimple::class, 'json', $context));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('totalHours') && null !== $object->getTotalHours()) {
            $data['total_hours'] = $object->getTotalHours();
        }
        if ($object->isInitialized('totalMileage') && null !== $object->getTotalMileage()) {
            $data['total_mileage'] = $object->getTotalMileage();
        }
        if ($object->isInitialized('totalFixed') && null !== $object->getTotalFixed()) {
            $data['total_fixed'] = $object->getTotalFixed();
        }
        if ($object->isInitialized('totalTerms') && null !== $object->getTotalTerms()) {
            $data['total_terms'] = $object->getTotalTerms();
        }
        if ($object->isInitialized('totalPurchase') && null !== $object->getTotalPurchase()) {
            $data['total_purchase'] = $object->getTotalPurchase();
        }
        if ($object->isInitialized('totalAdvanceDeposit') && null !== $object->getTotalAdvanceDeposit()) {
            $data['total_advance_deposit'] = $object->getTotalAdvanceDeposit();
        }
        if ($object->isInitialized('totalFuture') && null !== $object->getTotalFuture()) {
            $data['total_future'] = $object->getTotalFuture();
        }
        if ($object->isInitialized('simplicateUrl') && null !== $object->getSimplicateUrl()) {
            $data['simplicate_url'] = $object->getSimplicateUrl();
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetProposition::class => false];
    }
}
