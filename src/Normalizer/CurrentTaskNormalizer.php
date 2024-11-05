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

class CurrentTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Steefdw\Simplicate\Model\CurrentTask::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Steefdw\Simplicate\Model\CurrentTask::class;
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
        $object = new \Steefdw\Simplicate\Model\CurrentTask();
        if (\array_key_exists('average_hours_cost', $data) && \is_int($data['average_hours_cost'])) {
            $data['average_hours_cost'] = (float) $data['average_hours_cost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('can_change_destination', $data)) {
            $object->setCanChangeDestination($data['can_change_destination']);
        }
        if (\array_key_exists('will_send_email', $data)) {
            $object->setWillSendEmail($data['will_send_email']);
        }
        if (\array_key_exists('is_return_to_sender', $data)) {
            $object->setIsReturnToSender($data['is_return_to_sender']);
        }
        if (\array_key_exists('average_hours_cost', $data)) {
            $object->setAverageHoursCost($data['average_hours_cost']);
        }
        if (\array_key_exists('can_be_transferred', $data)) {
            $object->setCanBeTransferred($data['can_be_transferred']);
        }
        if (\array_key_exists('employees', $data)) {
            $values = [];
            foreach ($data['employees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Steefdw\Simplicate\Model\CurrentTaskEmployee::class, 'json', $context);
            }
            $object->setEmployees($values);
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
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('canChangeDestination') && null !== $object->getCanChangeDestination()) {
            $data['can_change_destination'] = $object->getCanChangeDestination();
        }
        if ($object->isInitialized('willSendEmail') && null !== $object->getWillSendEmail()) {
            $data['will_send_email'] = $object->getWillSendEmail();
        }
        if ($object->isInitialized('isReturnToSender') && null !== $object->getIsReturnToSender()) {
            $data['is_return_to_sender'] = $object->getIsReturnToSender();
        }
        if ($object->isInitialized('averageHoursCost') && null !== $object->getAverageHoursCost()) {
            $data['average_hours_cost'] = $object->getAverageHoursCost();
        }
        if ($object->isInitialized('canBeTransferred') && null !== $object->getCanBeTransferred()) {
            $data['can_be_transferred'] = $object->getCanBeTransferred();
        }
        if ($object->isInitialized('employees') && null !== $object->getEmployees()) {
            $values = [];
            foreach ($object->getEmployees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['employees'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Steefdw\Simplicate\Model\CurrentTask::class => false];
    }
}
