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

class GetTimerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetTimer::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetTimer::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetTimer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('seconds_spent', $data)) {
            $object->setSecondsSpent($data['seconds_spent']);
        }
        if (\array_key_exists('min_seconds_step', $data)) {
            $object->setMinSecondsStep($data['min_seconds_step']);
        }
        if (\array_key_exists('employee', $data)) {
            $object->setEmployee($this->denormalizer->denormalize($data['employee'], \Paqtcom\Simplicate\Model\GetEmployeeSimple::class, 'json', $context));
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \Paqtcom\Simplicate\Model\GetProjectSimple::class, 'json', $context));
        }
        if (\array_key_exists('projectservice', $data)) {
            $object->setProjectservice($this->denormalizer->denormalize($data['projectservice'], \Paqtcom\Simplicate\Model\GetProjectServiceSimple::class, 'json', $context));
        }
        if (\array_key_exists('hourstype', $data)) {
            $object->setHourstype($this->denormalizer->denormalize($data['hourstype'], \Paqtcom\Simplicate\Model\GetHoursType::class, 'json', $context));
        }
        if (\array_key_exists('related_hours', $data)) {
            $object->setRelatedHours($this->denormalizer->denormalize($data['related_hours'], \Paqtcom\Simplicate\Model\GetHoursSimple::class, 'json', $context));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($data['metadata']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('secondsSpent') && null !== $object->getSecondsSpent()) {
            $data['seconds_spent'] = $object->getSecondsSpent();
        }
        if ($object->isInitialized('minSecondsStep') && null !== $object->getMinSecondsStep()) {
            $data['min_seconds_step'] = $object->getMinSecondsStep();
        }
        if ($object->isInitialized('employee') && null !== $object->getEmployee()) {
            $data['employee'] = $this->normalizer->normalize($object->getEmployee(), 'json', $context);
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('projectservice') && null !== $object->getProjectservice()) {
            $data['projectservice'] = $this->normalizer->normalize($object->getProjectservice(), 'json', $context);
        }
        if ($object->isInitialized('hourstype') && null !== $object->getHourstype()) {
            $data['hourstype'] = $this->normalizer->normalize($object->getHourstype(), 'json', $context);
        }
        if ($object->isInitialized('relatedHours') && null !== $object->getRelatedHours()) {
            $data['related_hours'] = $this->normalizer->normalize($object->getRelatedHours(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $data['metadata'] = $object->getMetadata();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\GetTimer::class => false];
    }
}
