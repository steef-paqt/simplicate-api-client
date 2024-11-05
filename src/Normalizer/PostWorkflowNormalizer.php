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

class PostWorkflowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\PostWorkflow::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\PostWorkflow::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\PostWorkflow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('defaultworkflow_id', $data)) {
            $object->setDefaultworkflowId($data['defaultworkflow_id']);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Paqtcom\Simplicate\Model\CreatedBy::class, 'json', $context));
        }
        if (\array_key_exists('linked_to', $data)) {
            $values = [];
            foreach ($data['linked_to'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\LinkedTo::class, 'json', $context);
            }
            $object->setLinkedTo($values);
        }
        if (\array_key_exists('attachments', $data)) {
            $values_1 = [];
            foreach ($data['attachments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Paqtcom\Simplicate\Model\PostDocument::class, 'json', $context);
            }
            $object->setAttachments($values_1);
        }
        if (\array_key_exists('comments', $data)) {
            $values_2 = [];
            foreach ($data['comments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Paqtcom\Simplicate\Model\Comment::class, 'json', $context);
            }
            $object->setComments($values_2);
        }
        if (\array_key_exists('destination_employee_id', $data)) {
            $object->setDestinationEmployeeId($data['destination_employee_id']);
        }
        if (\array_key_exists('transfer_to_employee_id', $data)) {
            $object->setTransferToEmployeeId($data['transfer_to_employee_id']);
        }
        if (\array_key_exists('transfer_to_message', $data)) {
            $object->setTransferToMessage($data['transfer_to_message']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('deadline_date', $data)) {
            $object->setDeadlineDate($data['deadline_date']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|\ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('defaultworkflowId') && null !== $object->getDefaultworkflowId()) {
            $data['defaultworkflow_id'] = $object->getDefaultworkflowId();
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $values = [];
            foreach ($object->getLinkedTo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['linked_to'] = $values;
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values_1 = [];
            foreach ($object->getAttachments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['attachments'] = $values_1;
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $values_2 = [];
            foreach ($object->getComments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['comments'] = $values_2;
        }
        if ($object->isInitialized('destinationEmployeeId') && null !== $object->getDestinationEmployeeId()) {
            $data['destination_employee_id'] = $object->getDestinationEmployeeId();
        }
        if ($object->isInitialized('transferToEmployeeId') && null !== $object->getTransferToEmployeeId()) {
            $data['transfer_to_employee_id'] = $object->getTransferToEmployeeId();
        }
        if ($object->isInitialized('transferToMessage') && null !== $object->getTransferToMessage()) {
            $data['transfer_to_message'] = $object->getTransferToMessage();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('deadlineDate') && null !== $object->getDeadlineDate()) {
            $data['deadline_date'] = $object->getDeadlineDate();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\PostWorkflow::class => false];
    }
}
