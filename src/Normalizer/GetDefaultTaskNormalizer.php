<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetDefaultTask;
use Paqtcom\Simplicate\Model\GetSimpleDefaultWorkflow;
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
use function is_int;

class GetDefaultTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetDefaultTask::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetDefaultTask::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetDefaultTask();
        if (array_key_exists('average_hours_cost', $data) && is_int($data['average_hours_cost'])) {
            $data['average_hours_cost'] = (float) $data['average_hours_cost'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('defaultworkflow', $data)) {
            $object->setDefaultworkflow($this->denormalizer->denormalize($data['defaultworkflow'], GetSimpleDefaultWorkflow::class, 'json', $context));
        }
        if (array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (array_key_exists('can_change_destination', $data)) {
            $object->setCanChangeDestination($data['can_change_destination']);
        }
        if (array_key_exists('will_send_email', $data)) {
            $object->setWillSendEmail($data['will_send_email']);
        }
        if (array_key_exists('is_return_to_sender', $data)) {
            $object->setIsReturnToSender($data['is_return_to_sender']);
        }
        if (array_key_exists('average_hours_cost', $data)) {
            $object->setAverageHoursCost($data['average_hours_cost']);
        }
        if (array_key_exists('can_be_transferred', $data)) {
            $object->setCanBeTransferred($data['can_be_transferred']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('defaultworkflow') && null !== $object->getDefaultworkflow()) {
            $data['defaultworkflow'] = $this->normalizer->normalize($object->getDefaultworkflow(), 'json', $context);
        }
        if ($object->isInitialized('order') && null !== $object->getOrder()) {
            $data['order'] = $object->getOrder();
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

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetDefaultTask::class => false];
    }
}
