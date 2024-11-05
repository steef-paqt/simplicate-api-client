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

class GetWorkflowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\GetWorkflow::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\GetWorkflow::class;
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
        $object = new \Paqtcom\Simplicate\Model\GetWorkflow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('defaultworkflow', $data)) {
            $object->setDefaultworkflow($this->denormalizer->denormalize($data['defaultworkflow'], \Paqtcom\Simplicate\Model\GetSimpleDefaultWorkflow::class, 'json', $context));
        }
        if (\array_key_exists('current_task', $data)) {
            $object->setCurrentTask($this->denormalizer->denormalize($data['current_task'], \Paqtcom\Simplicate\Model\CurrentTask::class, 'json', $context));
        }
        if (\array_key_exists('actions', $data)) {
            $values = [];
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Paqtcom\Simplicate\Model\GetDefaultAction::class, 'json', $context);
            }
            $object->setActions($values);
        }
        if (\array_key_exists('linked_to', $data)) {
            $values_1 = [];
            foreach ($data['linked_to'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Paqtcom\Simplicate\Model\LinkedTo::class, 'json', $context);
            }
            $object->setLinkedTo($values_1);
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values_2 = [];
            foreach ($data['attachments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Paqtcom\Simplicate\Model\GetDocument::class, 'json', $context);
            }
            $object->setAttachments($values_2);
        }
        if (\array_key_exists('comments', $data)) {
            $values_3 = [];
            foreach ($data['comments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Paqtcom\Simplicate\Model\Comment::class, 'json', $context);
            }
            $object->setComments($values_3);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Paqtcom\Simplicate\Model\CreatedBy::class, 'json', $context));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('defaultworkflow') && null !== $object->getDefaultworkflow()) {
            $data['defaultworkflow'] = $this->normalizer->normalize($object->getDefaultworkflow(), 'json', $context);
        }
        if ($object->isInitialized('currentTask') && null !== $object->getCurrentTask()) {
            $data['current_task'] = $this->normalizer->normalize($object->getCurrentTask(), 'json', $context);
        }
        if ($object->isInitialized('actions') && null !== $object->getActions()) {
            $values = [];
            foreach ($object->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['actions'] = $values;
        }
        if ($object->isInitialized('linkedTo') && null !== $object->getLinkedTo()) {
            $values_1 = [];
            foreach ($object->getLinkedTo() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_to'] = $values_1;
        }
        if ($object->isInitialized('filename') && null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values_2 = [];
            foreach ($object->getAttachments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['attachments'] = $values_2;
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $values_3 = [];
            foreach ($object->getComments() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['comments'] = $values_3;
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
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
        return [\Paqtcom\Simplicate\Model\GetWorkflow::class => false];
    }
}
